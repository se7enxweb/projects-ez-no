{set-block scope=root variable=email_receiver}{$object.data_map.receiver.content}{/set-block}
{set-block scope=root variable=redirect_to_node_id}{$object.data_map.redirect_id.content}{/set-block}

{set-block scope=root variable=subject}{attribute_result_gui view=info attribute=$collection.attributes.3} ({attribute_result_gui view=info attribute=$collection.attributes.0}){/set-block}
{set-block scope=root variable=email_sender}{$collection.attributes.1.data_text|wash} <{$collection.attributes.2.data_text|wash}>{/set-block}


{attribute_result_gui view=info attribute=$collection.attributes.4}


--
ez.no contact form <{$object.data_map.receiver.content}>