<?php
/**
 * definition of the class eZURLFilter
 * @package default
 */

/**
 * an extended attribute filter for the URL datatype
 *
 * @author Kristof Coomans <kristof.coomans@telenet.be>
 * @copyright Kristof Coomans 2006-2008
 * @version 2.0
 */
class eZURLFilter
{
    /**
     * create a new instance of eZURLFilter
     *
     * extended attribute filter classes are instantiated by
     * eZContentObjectTreeNode::createExtendedAttributeFilterSQLStrings()
     */
    function eZURLFilter()
    {
    }

    /**
     * create the extended attribute filtering SQL parts
     *
     * @param array $params filter parameters, use a structure similar to
     * {@link http://ez.no/doc/ez_publish/technical_manual/3_8/reference/modules/content/fetch_functions/list#eztoc24465_0_0_1 the attribute_filter of the content/list fetch function}.
     * It supports the following filter types: =, !=, like, not like, in, not in
     * @return array an array with the "tables" and "joins" keys, both containing a string value with SQL conditions
     */
    function createSqlParts( $params )
    {
        $db = eZDB::instance();

        //eZDebug::writeDebug( $params, 'eZURLFilter::createSqlParts' );

        $i = 0;
        $sqlTables = '';
        $sqlJoins = '';

        if ( !is_array( $params ) )
        {
            eZDebug::writeError( 'Unexpected value for params, expected: array', 'eZURLFilter::createSqlParts' );
            return array( 'tables' => $sqlTables, 'joins'  => $sqlJoins, 'columns' => '' );
        }

        // first optional param element should be either 'or' or 'and'
        if( is_string( $params[0] ) )
        {
            $mode = strtolower( array_shift( $params ) );
            $matchAll = ( $mode !== 'or' );
        }
        else
        {
            $matchAll = true;
        }

        $sqlCondArray = array();


        // remaining params are pairs of attribute id and object id which should be matched.
        // object id can also be an array of object ids, in that case the match is on either object id.
        $t = 0;

        foreach ( $params as $filter )
        {
            if ( !is_array( $filter ) || ( count( $filter ) < 2 ) )
            {
                eZDebug::writeError( 'Unexpected value for filter, expected an array with at least 2 values', 'eZURLFilter::createSqlParts' );
                continue;
            }

            if ( count( $filter ) == 2 )
            {
                $attribute_id = $filter[0];
                $filterType = '=';
                $filterValue = $filter[1];
            }
            else
            {
                $attribute_id = $filter[0];
                $filterType = strtolower( $filter[1] );
                $filterValue = $filter[2];
            }

            $linkTable = 't' . $t;
            $urlTable = 'turl' . $t;
            $attributeTable = 'turlattribute' . $t;

            if ( !is_numeric( $attribute_id ) )
            {
                $attribute_id = eZContentObjectTreeNode::classAttributeIDByIdentifier( $attribute_id );
            }

            if ( $attribute_id === false )
            {
                eZDebug::writeError( 'Unknown attribute identifier', 'eZURLFilter::createSqlParts()' );
                // skip this condition
                continue;
            }

            $doQuote = true;
            $doEscape = true;

            switch ( $filterType )
            {
                case '=':
                {
                    $operator = '=';
                } break;

                case '!=':
                {
                    $operator = '<>';
                } break;

                case 'not like':
                case 'like':
                {
                    $operator = ( $filterType == 'like' ? 'LIKE' : 'NOT LIKE' );
                    // We escape the string ourselves, this MUST be done before wildcard replace
                    $filterValue = $db->escapeString( $filterValue );
                    $doEscape = false;

                    // Since * is used as wildcard we need to transform the string to
                    // use % as wildcard. The following rules apply:
                    // - % -> \%
                    // - * -> %
                    // - \* -> *
                    // - \\ -> \

                    $filterValue = preg_replace( array( '#%#m',
                                                      '#(?<!\\\\)\\*#m',
                                                      '#(?<!\\\\)\\\\\\*#m',
                                                      '#\\\\\\\\#m' ),
                                               array( '\\%',
                                                      '%',
                                                      '*',
                                                      '\\\\' ),
                                               $filterValue );

                } break;

                case 'in':
                case 'not_in' :
                {
                    if ( !is_array( $filterValue ) || count( $filterValue ) < 2 )
                    {
                        eZDebug::writeDebug( 'expected an array with at least 2 values as the filter value for filter type ' . $filterType, 'eZURLFilter::createSqlParts' );
                        continue 2;
                    }
                    else
                    {
                        $operator = ( $filterType == 'in' ? 'IN' : 'NOT IN' );
                        $doQuote = false;
                        $doEscape = false;

                        $values = array();
                        foreach ( $filterValue as $value )
                        {
                            $values[] = "'" . $db->escapeString( $value ) . "'";
                        }

                        $filterValue = '(' . implode( ',', $values ) . ')';
                    }
                } break;

                default:
                {
                    eZDebug::writeDebug( 'unknown filter type: ' . $filterType, 'eZURLFilter::createSqlParts' );
                    continue 2;
                }
            }

            if ( $doEscape )
            {
                $filterValue = $db->escapeString( $filterValue );
            }

            if ( $doQuote )
            {
                if ( !is_string( $filterValue ) )
                {
                    eZDebug::writeError( 'unexpected filter value for filter type ' . $filterType . ', expected a string', 'eZURLFilter::createSqlParts' );
                    continue;
                }

                $filterValue = "'" . $filterValue . "'";
            }

            $sqlCondArray[] = $urlTable . '.url ' . $operator . ' ' . $filterValue;

            $sqlTables .= ',ezurl_object_link AS ' . $linkTable;
            $sqlTables .= ',ezurl AS ' . $urlTable;
            $sqlTables .= ',ezcontentobject_attribute AS ' . $attributeTable;

            $sqlJoins .= ' ' . $attributeTable . '.contentclassattribute_id=' . $attribute_id . ' AND ';
            $sqlJoins .= $attributeTable . '.contentobject_id=ezcontentobject_tree.contentobject_id AND ';
            $sqlJoins .= $attributeTable . '.version=ezcontentobject_tree.contentobject_version AND ';

            $sqlJoins .= $linkTable . '.contentobject_attribute_id=' . $attributeTable . '.id AND ';
            $sqlJoins .= $linkTable . '.contentobject_attribute_version=' . $attributeTable . '.version AND ';
            $sqlJoins .= $linkTable . '.url_id=' . $urlTable . '.id AND ';
            $sqlJoins .= "\n                      ";

            $t++;
        }

        // add conditions to query
        if ( sizeof( $sqlCondArray ) > 0 )
        {
            $sqlJoins .= ' (' . join( $matchAll ? ' AND ' : ' OR ', $sqlCondArray ).') AND ';
        }

        return array( 'tables' => $sqlTables, 'joins'  => $sqlJoins, 'columns' => '' );
    }
}

?>