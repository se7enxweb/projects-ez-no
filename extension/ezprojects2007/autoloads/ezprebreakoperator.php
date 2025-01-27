<?php
//
// Definition of eZPreBreak class
//
// Created on: <17-Oct-2005 14:18:29 ole>
//
// Copyright (C) 1999-2004 eZ Systems as. All rights reserved.
//
// This source file is part of the eZ Publish (tm) Open Source Content
// Management System.
//
// This file may be distributed and/or modified under the terms of the
// "GNU General Public License" version 2 as published by the Free
// Software Foundation and appearing in the file LICENSE included in
// the packaging of this file.
//
// Licencees holding a valid "eZ Publish professional licence" version 2
// may use this file in accordance with the "eZ Publish professional licence"
// version 2 Agreement provided with the Software.
//
// This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
// THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
// PURPOSE.
//
// The "eZ Publish professional licence" version 2 is available at
// http://ez.no/ez_publish/licences/professional/ and in the file
// PROFESSIONAL_LICENCE included in the packaging of this file.
// For pricing of this licence please contact us via e-mail to licence@ez.no.
// Further contact information is available at http://ez.no/company/contact/.
//
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// Contact licence@ez.no if any conditions of this licencing isn't clear to
// you.
//

/*! \file eznogeneratejsmenuoperator.php
*/

/*!
  \class eZPreBreak eznogeneratejsmenuoperator.php
  \brief The class eZPreBreak does

*/

class eZPreBreak
{
    /*!
     Constructor
    */
    function eZPreBreak( $name = "ezprebreak" )
    {
        $this->Operators = array( $name );
    }
        /*!
     Returns the template operators.
    */
    function &operatorList()
    {
        return $this->Operators;
    }

    /*!
     See eZTemplateOperator::namedParameterList()
    */
    function namedParameterList()
    {
    }

    function modify( &$tpl, &$operatorName, &$operatorParameters, &$rootNamespace, &$currentNamespace, &$operatorValue, &$namedParameters )
    {
        $originalString = $operatorValue;
        $explodedString = explode( "\n", $originalString );
        $insidePre = false;
        $preIsOnCurrentLine = false;
        $finalString = "";

        foreach( $explodedString as $line )
        {
            $line = str_replace( '<pre class="code">', '<pre>', $line );
            if ( strstr( $line, "<pre>" ) )
            {
                if ( $line == "<pre>" )
                {
                    $line = '<pre class="wordwrap">';
                }
                else
                {
                    $line = str_replace( "<pre>", "<pre class=\"wordwrap\"><span class=\"line\">", $line );
                    if ( !strstr( $line, "</pre>" ) )
                        $line .= "</span>\n";
                }
                $insidePre = true;
                $preIsOnCurrentLine = true;
            }

            if ( $insidePre == true )
            {
                if ( $preIsOnCurrentLine )
                {
                    $preIsOnCurrentLine = false;
                }
                else
                {
                    // Convert tab characters to spaces
                    if ( strstr( $line, "\t" ) )
                    {
                        $explodedLine = explode( "\t", $line  );
                        $newLine = "";
                        $lastLine = array_pop( $explodedLine );

                        foreach ( $explodedLine as $tabLine )
                        {
                            $lineLength = strlen( $tabLine );
                            $tabPos = strlen( $tabLine ) + 1;
                            $tabLength = 8;
                            $nrOfTabs = ceil( $lineLength / $tabLength );
                            $nextTabAtPos = ( ceil( $tabPos / $tabLength ) * $tabLength ) + 1;
                            $nrOfSpaces = $nextTabAtPos - $tabPos;

                            $newLine .= $tabLine . str_repeat( "&nbsp;", $nrOfSpaces );
                        }
                        $line = $newLine . $lastLine;
                    }

                    if ( $line == "" or trim( $line ) == "\n" )
                        $line = '<span class="line">&nbsp;</span>' . "\n";

                    // For each two spaces or more replace it with &nbsp;
                    $line = preg_replace( "/\s(\s+)/e", "str_repeat( '&nbsp;', strlen( '\\1' ) )", $line );

                    $line = preg_replace( "/^\s/", "&nbsp;", $line );

                    if ( !strstr( $line, '<span class="line">' ) )
                         $line = "<span class=\"line\">" . $line;

                    if ( !strstr( $line, "</pre>" ) and !strstr( $line, "</span>" ) )
                        $line .= "</span>\n";
                }
            }

            if ( strstr( $line, "</pre>" ) )
            {
                $line = str_replace( "</pre>", "</span></pre>", $line );
                $insidePre = false;
                $preIsOnCurrentLine = false;
            }

            $finalString .= $line . "\n";
        }
        $operatorValue = $finalString;
    }
    var $Operators;
}

?>
