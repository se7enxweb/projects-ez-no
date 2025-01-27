{default collection=cond( $collection_id, fetch( content, collected_info_collection, hash( collection_id, $collection_id ) ),
                          fetch( content, collected_info_collection, hash( contentobject_id, $node.contentobject_id ) ) )}

{set-block scope=global variable=title}{'Form %formname'|i18n('design/standard/content/form',,hash('%formname',$node.name))}{/set-block}

<h1>{'Thank you for your feedback'|i18n( 'ezno/contactform' )}!</h1>

{section show=$error}

{section show=$error_existing_data}
<p>{'You have already submitted data to this form. The previously submitted data was the following.'|i18n('design/standard/content/form')}</p>
{/section}

{/section}

<h3>{$collection.attributes.0.contentclass_attribute_name|i18n( 'ezno/contactform' )}</h3>
{attribute_result_gui view=info attribute=$collection.attributes.0}

<h3>{$collection.attributes.1.contentclass_attribute_name|i18n( 'ezno/contactform' )}</h3>
{attribute_result_gui view=info attribute=$collection.attributes.1}

<h3>{$collection.attributes.2.contentclass_attribute_name|i18n( 'ezno/contactform' )}</h3>
{attribute_result_gui view=info attribute=$collection.attributes.2}

<h3>{$collection.attributes.3.contentclass_attribute_name|i18n( 'ezno/contactform' )}</h3>
{attribute_result_gui view=info attribute=$collection.attributes.3}

<br /><br />

<p><a href={$node.object.data_map.redirect_id.content|ezurl}>{'Return to site'|i18n('design/standard/content/form')}</a></p>