<?php
/*
#?ini charset="iso-8859-1"?
# eZ Publish fetch alias configuration file.

# fetch_alias is to used as a replacement for fetch for often used fetch functions
#             or to simplify complicated fetch functions.

# General syntax
#
# [<parameter>]         # name of first parameter in fetch_alias
# Module=          # which module to use
# FunctionName=    # name of function defined in kernel/<module>/function_definition.php
# Parameter[key]=<value>  # key is the name of the parameter defined for the function in kernel/<module>/function_definition.php
#                         # value is the key of the hash entry in fetch_alias
# Constant[key]=<value>   # key is the name of the parameter defined for the function in kernel/<module>/function_definition.php
#                         # value is a constant defined in this ini file. use ; to separate elements if the value is supposed to be an array

[last_news_articles]
Module=content
FunctionName=tree
Parameter[parent_node_id]=parent_node_id
Constant[sort_by]=published;0
Constant[depth]=1
Constant[limit]=5
Constant[class_filter_type]=include
Constant[class_filter_array]=article

[children]
Module=content
FunctionName=list
Parameter[sort_by]=sort_by
Parameter[parent_node_id]=parent_node_id
Parameter[offset]=offset
Parameter[limit]=limit
Parameter[attribute_filter]=attribute_filter
Parameter[class_filter_type]=class_filter_type
Parameter[class_filter_array]=class_filter_array

[child_count]
Module=content
FunctionName=list_count
Parameter[parent_node_id]=parent_node_id
Parameter[attribute_filter]=attribute_filter
Parameter[class_filter_type]=class_filter_type
Parameter[class_filter_array]=class_filter_array

# Main menu fetch
[main_menu]
Module=content
FunctionName=tree
Parameter[sort_by]=sort_by
Constant[parent_node_id]=2
Constant[depth]=2
Constant[class_filter_type]=include
Constant[class_filter_array]=infopage

## Comments ##
[comments]
Module=content
FunctionName=list
Constant[sort_by]=published;0
Parameter[parent_node_id]=parent_node_id
Parameter[offset]=offset
Parameter[limit]=limit
Constant[class_filter_type]=include
Constant[class_filter_array]=article_comment;comment

[comment_count]
Module=content
FunctionName=list_count
Parameter[parent_node_id]=parent_node_id
Constant[class_filter_type]=include
Constant[class_filter_array]=article_comment;comment

## Forum stuff ##
[last_forum_replies]
Module=content
FunctionName=tree
Parameter[parent_node_id]=parent_node_id
Constant[sort_by]=modified_subnode;0
Constant[depth]=2
Constant[limit]=10
Constant[class_filter_type]=include
Constant[class_filter_array]=forum_message

[last_forum_reply]
Module=content
FunctionName=list
Parameter[parent_node_id]=parent_node_id
Constant[sort_by]=published;0
Constant[limit]=1
Constant[class_filter_type]=include
Constant[class_filter_array]=forum_message

[forums]
Module=content
FunctionName=list
Parameter[parent_node_id]=parent_node_id
Constant[sort_by]=priority;1
Constant[class_filter_type]=include
Constant[class_filter_array]=forum

[forum_messages]
Module=content
FunctionName=list
Parameter[parent_node_id]=parent_node_id
Parameter[offset]=offset
Parameter[limit]=limit
Constant[sort_by]=published;1
Constant[class_filter_type]=include
Constant[class_filter_array]=forum_message

[forum_message_count]
Module=content
FunctionName=list_count
Parameter[parent_node_id]=parent_node_id
Constant[class_filter_type]=include
Constant[class_filter_array]=forum_message

[user_forum_message_count]
Module=content
FunctionName=object_count_by_user_id
Parameter[user_id]=user_id
Constant[class_id]=16

## Specifications ##
[last_specifications]
Module=content
FunctionName=list
Constant[parent_node_id]=54510
Constant[sort_by]=published;0
Constant[limit]=4
Constant[class_filter_type]=include
Constant[class_filter_array]=specification

## Blogs ##
[last_logs]
Module=content
FunctionName=list
Constant[parent_node_id]=44596
Constant[sort_by]=published;0
Constant[limit]=4
Constant[class_filter_type]=include
Constant[class_filter_array]=log

## Project ##
[last_projects]
Module=content
FunctionName=list
Constant[parent_node_id]=2
Constant[sort_by]=published;0
Constant[limit]=10
Constant[depth]=2
Constant[class_filter_type]=include
Constant[class_filter_array]=project

# Fetch developer users
[developers]
Module=content
FunctionName=list
Constant[parent_node_id]=65017
Constant[sort_by]=name;1
Constant[class_filter_type]=include
Constant[class_filter_array]=user

# Fetch contributions
[contribs]
Module=content
FunctionName=list
Parameter[parent_node_id]=parent_node_id
Constant[sort_by]=name;1
Constant[class_filter_type]=include
Constant[class_filter_array]=project

# Articles
[articles]
Module=content
FunctionName=list
Parameter[parent_node_id]=parent_node_id
Parameter[limit]=limit
Parameter[offset]=offset
Constant[sort_by]=published;0
Constant[class_filter_type]=include
Constant[class_filter_array]=article

[articles_tree]
Module=content
FunctionName=tree
Parameter[parent_node_id]=parent_node_id
Parameter[limit]=limit
Parameter[offset]=offset
Parameter[sort_by]=sort_by
Parameter[main_node_only]=main_node_only
Constant[class_filter_type]=include
Constant[class_filter_array]=article_container


[articles_tree_count]
Module=content
FunctionName=tree_count
Parameter[parent_node_id]=parent_node_id
Parameter[main_node_only]=main_node_only
Constant[class_filter_type]=include
Constant[class_filter_array]=article_container

[articles_list]
Module=content
FunctionName=list
Parameter[parent_node_id]=parent_node_id
Parameter[limit]=limit
Parameter[offset]=offset
Parameter[sort_by]=sort_by
Constant[class_filter_type]=include
Constant[class_filter_array]=article_container

[article_subpages]
Module=content
FunctionName=list
Parameter[parent_node_id]=parent_node_id
Constant[class_filter_type]=include
Constant[class_filter_array]=article_subpage
Parameter[sort_by]=sort_by

[article_categories]
Module=content
FunctionName=list
Parameter[parent_node_id]=parent_node_id
Parameter[sort_by]=sort_by
Constant[class_filter_type]=include
Constant[class_filter_array]=infopage


# References
[references]
Module=content
FunctionName=tree
Constant[parent_node_id]=231
Parameter[attribute_filter]=attribute_filter
Parameter[limit]=limit
Parameter[offset]=offset
Parameter[sort_by]=sort_by

[reference_count]
Module=content
FunctionName=tree_count
Constant[parent_node_id]=231
Parameter[attribute_filter]=attribute_filter



*/
?>
