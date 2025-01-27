{* Right info for a multi page article *}

{* Parameters:
   - used_node = ezcontentobjecttreenode
*}

<div class="template-design">
<div class="template-module content-view-sidebar">
<div class="template-object class-article">

{* Right info header *}
<div class="attribute-heading">
    <h2 class="bullet">{"Article info"|i18n( "ezno" )}</h2>
</div>
<ul class="linklist">
    <li><a href={"/community/articles"|ezurl}>{"All articles"|i18n( "ezno" )}</a></li>
    <li><a href={concat("/layout/set/printarticle/", $used_node.url_alias)|ezurl}>{"Print this article"|i18n( "ezno" )}</a></li>
    {* Comment count *}
    <li>
        {section show=$used_node.object.data_map.enable_comments.content}
            {let comment_count=fetch_alias( comment_count, hash( parent_node_id, $used_node.main_node_id ) )}
            <p><a href="#comments">{$comment_count}&nbsp;{"Comments"|i18n( "ezno" )|downcase}</a></p>
            {/let}
        {section-else}
            <p><em>{"Comments disabled"|i18n( "ezno" )}</em></p>
        {/section}
    </li>
</ul>

<h3>Writing for ez.no</h3>
<p>Want to share your information?
<a href="http://ez.no/community/articles/writing_articles_for_ez_no" >We publish your article on our Website</a>.</p>

</div>
</div>
</div>

{* Partner *}
{section show=$used_node.object.data_map.partner_information.has_content}
    <div class="template-design">
    <div class="template-module content-view-sidebar">
    <div class="template-object class-article">

    {* Right info header *}
    <div class="attribute-heading">
        <h2 class="bullet">{"Partner"|i18n( "ezno" )}</h2>
    </div>

    {attribute_view_gui attribute=$used_node.object.data_map.partner_information}

    </div>
    </div>
    </div>
{/section}

{* Article index *}
{let article_subpages=fetch_alias( article_subpages, hash( parent_node_id, $used_node.node_id,
														   sort_by, $used_node.sort_array ) )}
{section show=$article_subpages}
    <div class="template-design">
    <div class="template-module content-view-sidebar">
    <div class="template-object class-article">

    <div class="attribute-heading">
	    <h2 class="bullet">{"Article index"|i18n( "ezno/article" )}</h2>
    </div>

    <div class="attribute-related-articles">
        <ol>
            {section show=eq( $node.node_id, $used_node.node_id )}
                <li>
                {section show=$used_node.object.data_map.index_title.has_content}
                	{attribute_view_gui attribute=$used_node.object.data_map.index_title}
                {section-else}
                	{$used_node.name|wash}
                {/section}
                </li>
            {section-else}
                <li><a href={$used_node.url_alias|ezurl}>
                 {section show=$used_node.object.data_map.index_title.has_content}
                	{attribute_view_gui attribute=$used_node.object.data_map.index_title}
                {section-else}
                	{$used_node.name|wash}
                {/section}
                </a></li>
            {/section}
		    {section loop=$article_subpages}
                {section show=eq( $node.node_id, $:item.node_id )}
                    <li>
                    {section show=$:item.object.data_map.index_title.has_content}
                		{attribute_view_gui attribute=$:item.object.data_map.index_title}
                	{section-else}
                		{$:item.name|wash}
                	{/section}
                    </li>
                {section-else}
                    <li><a href={$:item.url_alias|ezurl}>
                    {section show=$:item.object.data_map.index_title.has_content}
                		{attribute_view_gui attribute=$:item.object.data_map.index_title}
                	{section-else}
                		{$:item.name|wash}
                	{/section}
                    </a></li>
                {/section}
            {/section}
   	    </ol>
    </div>

    </div>
    </div>
    </div>
{/section}
{/let}

{* Author info *}
{section show=$used_node.object.data_map.author.has_content}
    <div class="template-design">
    <div class="template-module content-view-sidebar">
    <div class="template-object class-article">

    <div class="attribute-heading">
	    <h2 class="bullet">{"Author info"|i18n( "ezno/article" )}</h2>
    </div>

    <div class="attribute-name">
	    <h3>{$used_node.object.data_map.author.content.name}</h3>
    </div>

    <div class="attribute-image">
        <div class="object-left">
        	{attribute_view_gui attribute=$used_node.object.data_map.author.content.data_map.author_photo image_class="small"}
        </div>
    </div>

    <div class="attribute-short">
	    {attribute_view_gui attribute=$used_node.object.data_map.author.content.data_map.short_description}
    </div>

    {section show=$used_node.object.data_map.author.content.data_map.external_url.has_content}
        <div class="attribute-link">
            <p>{"Personal website:"|i18n( "ezno" )} {attribute_view_gui attribute=$used_node.object.data_map.author.content.data_map.external_url}</p>
        </div>
    {/section}

    <ul class="linklist">
        <li><a href={concat( "/articlelist/", $used_node.object.data_map.author.content.id )|ezurl}>View all articles written by {$used_node.object.data_map.author.content.name}</a></li>
        <li><a href={concat( "/authorcontact/form/", $used_node.object.data_map.author.content.id, "/", $node.node_id )|ezurl}>Contact {$used_node.object.data_map.author.content.name}</a></li>
    </ul>

    </div>
    </div>
    </div>
{/section}

{* Right info *}
{section show=$used_node.data_map.rightinfo.has_content}
	<div class="template-design">
	<div class="template-module content-view-sidebar">
	<div class="template-object class-article">
    
    {attribute_view_gui attribute=$used_node.data_map.rightinfo}

	</div>
	</div>
	</div>
{/section}

{* Related articles *}
{section show=$used_node.object.data_map.related_articles.content.relation_list}
    <div class="template-design">
    <div class="template-module content-view-sidebar">
    <div class="template-object class-article">

    <div class="attribute-heading">
	    <h2 class="bullet">{"Related articles"|i18n( "ezno/article" )}</h2>
    </div>

    <div class="attribute-related-articles">
	    <ul class="linklist">
		    {section var=Relations loop=$used_node.object.data_map.related_articles.content.relation_list}
    		    <li>{content_view_gui view=embed content_object=fetch( content, object, hash( object_id, $Relations.item.contentobject_id, object_version, $Relations.item.contentobject_version ) )}</li>
    		{/section}
	    </ul>
    </div>

    </div>
    </div>
    </div>
{/section}

{* License *}
{section show=$used_node.object.data_map.license_information.has_content}
    <div class="template-design">
    <div class="template-module content-view-sidebar">
    <div class="template-object class-article">

    <div class="attribute-heading">
        <h2 class="bullet">{"License"|i18n( "ezno" )}</h2>
    </div>

    {attribute_view_gui attribute=$used_node.object.data_map.license_information}

    </div>
    </div>
    </div>
{/section}