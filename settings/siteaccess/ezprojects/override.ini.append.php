<?php
/*
# ez.no template override file.
# This file is divided into sections and each section
# is sorted alphabetical by [template section name].
# Please keep it that way, or I'll whoop your ass :)

# Section order:
# - Node templates (must be at the top!)
# - Full templates
# - Line templates
# - Edit templates
# - Plain templates
# - Collected info templates
# - Notification templates

# *** NODE OVERRIDE TEMPLATES *** #

[full_node_projects]
Source=node/view/full.tpl
MatchFile=node/projects.tpl
Subdir=templates
Match[node]=2

[full_node_types]
Source=node/view/full.tpl
MatchFile=node/types.tpl
Subdir=templates
Match[node]=454

# *** END NODE OVERRIDE TEMPLATES *** #

# *** FULL VIEW TEMPLATES *** #

[full_class_reviews]
Source=node/view/full.tpl
MatchFile=full/reviews.tpl
Subdir=templates
Match[class_identifier]=reviews

[full_class_component_type]
Source=node/view/full.tpl
MatchFile=full/component_type.tpl
Subdir=templates
Match[class_identifier]=component_type

[full_class_user]
Source=node/view/full.tpl
MatchFile=full/user.tpl
Subdir=templates
Match[class_identifier]=user

[full_class_news]
Source=node/view/full.tpl
MatchFile=full/news.tpl
Subdir=templates
Match[class_identifier]=news

[full_class_folder]
Source=node/view/full.tpl
MatchFile=full/folder.tpl
Subdir=templates
Match[class_identifier]=folder

[full_class_files]
Source=node/view/full.tpl
MatchFile=full/files.tpl
Subdir=templates
Match[class_identifier]=files

[full_class_galleries]
Source=node/view/full.tpl
MatchFile=full/galleries.tpl
Subdir=templates
Match[class_identifier]=galleries

[full_class_team]
Source=node/view/full.tpl
MatchFile=full/team.tpl
Subdir=templates
Match[class_identifier]=team

[full_class_user_group]
Source=node/view/full.tpl
MatchFile=full/user_group.tpl
Subdir=templates
Match[class_identifier]=user_group

[full_class_subversion]
Source=node/view/full.tpl
MatchFile=full/subversion.tpl
Subdir=templates
Match[class_identifier]=subversion

[full_class_subversion_log_message]
Source=node/view/full.tpl
MatchFile=full/subversion_log_message.tpl
Subdir=templates
Match[class_identifier]=subversion_log_message

[full_class_forums]
Source=node/view/full.tpl
MatchFile=full/forums.tpl
Subdir=templates
Match[class_identifier]=forums

[full_section_article_infopage]
Source=node/view/full.tpl
MatchFile=full/section_article_infopage.tpl
Subdir=templates
Match[class_identifier]=infopage
Match[section]=30

[full_class_article_container]
Source=node/view/full.tpl
MatchFile=full/article_container.tpl
Subdir=templates
Match[class_identifier]=article_container

[full_class_article_subpage]
Source=node/view/full.tpl
MatchFile=full/article_subpage.tpl
Subdir=templates
Match[class_identifier]=article_subpage

[full_class_article]
Source=node/view/full.tpl
MatchFile=full/article.tpl
Subdir=templates
Match[class_identifier]=article

[full_class_article_comment]
Source=node/view/full.tpl
MatchFile=full/comment.tpl
Subdir=templates
Match[class_identifier]=article_comment

[full_class_banner]
Source=node/view/full.tpl
MatchFile=full/banner.tpl
Subdir=templates
Match[class_identifier]=banner

[full_class_book_product]
Source=node/view/full.tpl
MatchFile=full/book_product.tpl
Subdir=templates
Match[class_identifier]=book_product

[full_class_bug]
Source=node/view/full.tpl
MatchFile=full/bug.tpl
Subdir=templates
Match[class_identifier]=bug

[full_class_contrib_category]
Source=node/view/full.tpl
MatchFile=full/contrib_category.tpl
Subdir=templates
Match[class_identifier]=contrib_cat

[full_class_project]
Source=node/view/full.tpl
MatchFile=full/project.tpl
Subdir=templates
Match[class_identifier]=project

[full_class_comment]
Source=node/view/full.tpl
MatchFile=full/comment.tpl
Subdir=templates
Match[class_identifier]=comment

[full_class_documentation_page]
Source=node/view/full.tpl
MatchFile=full/documentation_page.tpl
Subdir=templates
Match[class_identifier]=documentation_page

[full_class_employee]
Source=node/view/full.tpl
MatchFile=full/employee.tpl
Subdir=templates
Match[class_identifier]=employee

[full_class_exam]
Source=node/view/full.tpl
MatchFile=full/exam.tpl
Subdir=templates
Match[class_identifier]=exam

[full_class_external_infopage]
Source=node/view/full.tpl
MatchFile=full/external_infopage.tpl
Subdir=templates
Match[class_identifier]=external_infopage

[full_class_faq]
Source=node/view/full.tpl
MatchFile=full/faq.tpl
Subdir=templates
Match[class_identifier]=faq

[full_class_faq_category]
Source=node/view/full.tpl
MatchFile=full/faq_category.tpl
Subdir=templates
Match[class_identifier]=faq_category

[full_class_flash]
Source=node/view/full.tpl
MatchFile=full/flash.tpl
Subdir=templates
Match[class_identifier]=flash

[full_class_frontpage]
Source=node/view/full.tpl
MatchFile=full/frontpage.tpl
Subdir=templates
Match[class_identifier]=frontpage

[full_class_infopage]
Source=node/view/full.tpl
MatchFile=full/infopage.tpl
Subdir=templates
Match[class_identifier]=infopage

[full_class_image]
Source=node/view/full.tpl
MatchFile=full/image.tpl
Subdir=templates
Match[class_identifier]=image

[full_class_image_gallery]
Source=node/view/full.tpl
MatchFile=full/image_gallery.tpl
Subdir=templates
Match[class_identifier]=image_gallery

[full_class_file]
Source=node/view/full.tpl
MatchFile=full/file.tpl
Subdir=templates
Match[class_identifier]=file

[full_class_forum]
Source=node/view/full.tpl
MatchFile=full/forum.tpl
Subdir=templates
Match[class_identifier]=forum

[full_class_forum_message]
Source=node/view/full.tpl
MatchFile=full/forum_message.tpl
Subdir=templates
Match[class_identifier]=forum_message

[full_class_licensed_product]
Source=node/view/full.tpl
MatchFile=full/licensed_product.tpl
Subdir=templates
Match[class_identifier]=licenced_product

[full_class_log]
Source=node/view/full.tpl
MatchFile=full/log.tpl
Subdir=templates
Match[class_identifier]=log

[full_class_presentation]
Source=node/view/full.tpl
MatchFile=full/presentation.tpl
Subdir=templates
Match[class_identifier]=presentation

[full_class_product]
Source=node/view/full.tpl
MatchFile=full/product.tpl
Subdir=templates
Match[class_identifier]=product

[full_class_question]
Source=node/view/full.tpl
MatchFile=full/question.tpl
Subdir=templates
Match[class_identifier]=question

[full_class_reference]
Source=node/view/full.tpl
MatchFile=full/reference.tpl
Subdir=templates
Match[class_identifier]=page_link

[full_class_specification]
Source=node/view/full.tpl
MatchFile=full/specification.tpl
Subdir=templates
Match[class_identifier]=specification

[full_class_template_mechanism]
Source=node/view/full.tpl
MatchFile=full/template_mechanism.tpl
Subdir=templates
Match[class_identifier]=template_mechanism


# Not to be confused with User Group (container class for users).
[full_class_user_grous]
Source=node/view/full.tpl
MatchFile=full/user_groups.tpl
Subdir=templates
Match[class_identifier]=user_groups

[full_class_weblog]
Source=node/view/full.tpl
MatchFile=full/weblog.tpl
Subdir=templates
Match[class_identifier]=weblog
# *** END FULL VIEW TEMPLATES *** #


# *** LINE VIEW TEMPLATES *** #
[line_class_review]
Source=node/view/line.tpl
MatchFile=line/review.tpl
Subdir=templates
Match[class_identifier]=review

[line_class_rss_import]
Source=node/view/line.tpl
MatchFile=line/rss_import.tpl
Subdir=templates
Match[class_identifier]=rss_import

[line_class_article]
Source=node/view/line.tpl
MatchFile=line/article.tpl
Subdir=templates
Match[class_identifier]=article

[line_class_article_comment]
Source=node/view/line.tpl
MatchFile=line/comment.tpl
Subdir=templates
Match[class_identifier]=article_comment

[line_class_article_container]
Source=node/view/line.tpl
MatchFile=line/article_container.tpl
Subdir=templates
Match[class_identifier]=article_container

[line_class_book_product]
Source=node/view/line.tpl
MatchFile=line/product.tpl
Subdir=templates
Match[class_identifier]=book_product

[line_class_bug]
Source=node/view/line.tpl
MatchFile=line/bug.tpl
Subdir=templates
Match[class_identifier]=bug

[line_class_comment]
Source=node/view/line.tpl
MatchFile=line/comment.tpl
Subdir=templates
Match[class_identifier]=comment

[line_class_contrib_category]
Source=node/view/line.tpl
MatchFile=line/contrib_category.tpl
Subdir=templates
Match[class_identifier]=contrib_cat

[line_class_project]
Source=node/view/line.tpl
MatchFile=line/project.tpl
Subdir=templates
Match[class_identifier]=project

[line_class_employee]
Source=node/view/line.tpl
MatchFile=line/employee.tpl
Subdir=templates
Match[class_identifier]=employee

[line_class_exam]
Source=node/view/line.tpl
MatchFile=line/exam.tpl
Subdir=templates
Match[class_identifier]=exam

[line_class_file]
Source=node/view/line.tpl
MatchFile=line/file.tpl
Subdir=templates
Match[class_identifier]=file

[line_class_flash]
Source=node/view/line.tpl
MatchFile=line/flash.tpl
Subdir=templates
Match[class_identifier]=flash

[line_class_infoage]
Source=node/view/line.tpl
MatchFile=line/infopage.tpl
Subdir=templates
Match[class_identifier]=infopage

[line_class_image_gallery]
Source=node/view/line.tpl
MatchFile=line/image_gallery.tpl
Subdir=templates
Match[class_identifier]=image_gallery

[line_class_log]
Source=node/view/line.tpl
MatchFile=line/log.tpl
Subdir=templates
Match[class_identifier]=log

[line_class_faq_category]
Source=node/view/line.tpl
MatchFile=line/faq_category.tpl
Subdir=templates
Match[class_identifier]=faq_category

[line_class_forum]
Source=node/view/line.tpl
MatchFile=line/forum.tpl
Subdir=templates
Match[class_identifier]=forum

[line_class_forum_message]
Source=node/view/line.tpl
MatchFile=line/forum_message.tpl
Subdir=templates
Match[class_identifier]=forum_message

[line_class_licenced_product]
Source=node/view/line.tpl
MatchFile=line/product.tpl
Subdir=templates
Match[class_identifier]=licenced_product

[line_class_partner]
Source=node/view/line.tpl
MatchFile=line/partner.tpl
Subdir=templates
Match[class_identifier]=partner

[line_class_presentation]
Source=node/view/line.tpl
MatchFile=line/presentation.tpl
Subdir=templates
Match[class_identifier]=presentation

[line_class_product]
Source=node/view/line.tpl
MatchFile=line/product.tpl
Subdir=templates
Match[class_identifier]=product

[line_class_question]
Source=node/view/line.tpl
MatchFile=line/question.tpl
Subdir=templates
Match[class_identifier]=question

[line_class_reference]
Source=node/view/line.tpl
MatchFile=line/reference.tpl
Subdir=templates
Match[class_identifier]=page_link

[line_class_specification]
Source=node/view/line.tpl
MatchFile=line/specification.tpl
Subdir=templates
Match[class_identifier]=specification

[line_class_template_mechanism]
Source=node/view/line.tpl
MatchFile=line/template_mechanism.tpl
Subdir=templates
Match[class_identifier]=template_mechanism


# Not to be confused with User Group (container class for users).
[line_class_user_groups]
Source=node/view/line.tpl
MatchFile=line/user_groups.tpl
Subdir=templates
Match[class_identifier]=user_groups
# *** END LINE VIEW TEMPLATES *** #


# *** LISTITEM VIEW TEMPLATES *** #
[listitem_class_review]
Source=node/view/listitem.tpl
MatchFile=listitem/review.tpl
Subdir=templates
Match[class_identifier]=review

[listitem_class_article]
Source=node/view/listitem.tpl
MatchFile=listitem/article.tpl
Subdir=templates
Match[class_identifier]=article

[listitem_class_rss_import]
Source=node/view/listitem.tpl
MatchFile=listitem/rss_import.tpl
Subdir=templates
Match[class_identifier]=rss_import

[listitem_class_articlecomment]
Source=node/view/listitem.tpl
MatchFile=listitem/comment.tpl
Subdir=templates
Match[class_identifier]=article_comment

[listitem_class_article_container]
Source=node/view/listitem.tpl
MatchFile=listitem/article_container.tpl
Subdir=templates
Match[class_identifier]=article_container

[listitem_class_comment]
Source=node/view/listitem.tpl
MatchFile=listitem/comment.tpl
Subdir=templates
Match[class_identifier]=comment

[listitem_class_project]
Source=node/view/listitem.tpl
MatchFile=listitem/project.tpl
Subdir=templates
Match[class_identifier]=project

[listitem_class_forum_message]
Source=node/view/listitem.tpl
MatchFile=listitem/forum_message.tpl
Subdir=templates
Match[class_identifier]=forum_message

[listitem_class_log]
Source=node/view/listitem.tpl
MatchFile=listitem/log.tpl
Subdir=templates
Match[class_identifier]=log

[listitem_class_specification]
Source=node/view/listitem.tpl
MatchFile=listitem/specification.tpl
Subdir=templates
Match[class_identifier]=specification
# *** END LINE VIEW TEMPLATES *** #


# *** EMBED VIEW TEMPLATES *** #
[embed_class_banner]
Source=content/view/embed.tpl
MatchFile=embed/banner.tpl
Subdir=templates
Match[class_identifier]=banner

[embed_class_flash]
Source=content/view/embed.tpl
MatchFile=embed/flash.tpl
Subdir=templates
Match[class_identifier]=flash

[embed_class_forum]
Source=content/view/embed.tpl
MatchFile=embed/forum.tpl
Subdir=templates
Match[class_identifier]=forum

[embed_class_image]
Source=content/view/embed.tpl
MatchFile=embed/image.tpl
Subdir=templates
Match[class_identifier]=image

[embed_class_infopage_last_sites]
Source=content/view/embed.tpl
MatchFile=embed/infopage_last_sites.tpl
Subdir=templates
Match[object]=106107

[embed_class_infopage]
Source=content/view/embed.tpl
MatchFile=embed/infopage.tpl
Subdir=templates
Match[class_identifier]=infopage

[embed_class_reference]
Source=content/view/embed.tpl
MatchFile=embed/reference.tpl
Subdir=templates
Match[class_identifier]=page_link


# Yes, use the same template as embed_class_infopage
[embed_class_weblog]
Source=content/view/embed.tpl
MatchFile=embed/infopage.tpl
Subdir=templates
Match[class_identifier]=weblog
# *** END EMBED VIEW TEMPLATES *** #


# *** EDIT VIEW TEMPLATES *** #

[edit_attribute_review_rating]
Source=content/datatype/edit/ezinteger.tpl
MatchFile=edit/attribute_review_rating.tpl
Subdir=templates
Match[class_identifier]=review
Match[attribute_identifier]=rating

[edit_attribute_project_component_types]
Source=content/datatype/edit/ezobjectrelationlist.tpl
MatchFile=edit/attribute_project_component_types.tpl
Subdir=templates
Match[class_identifier]=project
Match[attribute_identifier]=component_types

[edit_class_article]
Source=content/edit.tpl
MatchFile=edit/article.tpl
Subdir=templates
Match[class_identifier]=article

[edit_class_project]
Source=content/edit.tpl
MatchFile=edit/project.tpl
Subdir=templates
Match[class_identifier]=project

[edit_class_bug]
Source=content/edit.tpl
MatchFile=edit/bug.tpl
Subdir=templates
Match[class_identifier]=bug

[edit_class_bug_comment]
Source=content/edit.tpl
MatchFile=edit/bug_comment.tpl
Subdir=templates
Match[class_identifier]=article_comment
Match[parent_class_identifier]=bug

[edit_class_bug_article_comment]
Source=content/edit.tpl
MatchFile=edit/comment.tpl
Subdir=templates
Match[class_identifier]=article_comment

[edit_class_comment]
Source=content/edit.tpl
MatchFile=edit/comment.tpl
Subdir=templates
Match[class_identifier]=comment

[edit_class_external_infopage]
Source=content/edit.tpl
MatchFile=edit/external_infopage.tpl
Subdir=templates
Match[class_identifier]=external_infopage

[edit_class_file]
Source=content/edit.tpl
MatchFile=edit/file.tpl
Subdir=templates
Match[class_identifier]=file

[edit_class_forum_message]
Source=content/edit.tpl
MatchFile=edit/forum_message.tpl
Subdir=templates
Match[class_identifier]=forum_message

[edit_class_partner]
Source=content/edit.tpl
MatchFile=edit/partner.tpl
Subdir=templates
Match[class_identifier]=partner

[edit_class_reference]
Source=content/edit.tpl
MatchFile=edit/reference.tpl
Subdir=templates
Match[class_identifier]=page_link

[edit_class_user]
Source=content/edit.tpl
MatchFile=edit/user.tpl
Subdir=templates
Match[class_identifier]=user
# *** END EDIT VIEW TEMPLATES *** #

# *** PLAIN VIEW TEMPLATES *** #
[plain_class_exam]
Source=node/view/plain.tpl
MatchFile=plain/exam.tpl
Subdir=templates
Match[class_identifier]=exam

[plain_class_question]
Source=node/view/plain.tpl
MatchFile=plain/question.tpl
Subdir=templates
Match[class_identifier]=question

[plain_class_project]
Source=node/view/plain.tpl
MatchFile=plain/project.tpl
Subdir=templates
Match[class_identifier]=project

# *** END PLAIN VIEW TEMPLATES *** #


# *** COLLECTED INFO TEMPLATES *** #
[collectedinfomail_class_contact_form_result]
Source=content/collectedinfo/form.tpl
MatchFile=collectedinfo/collectedinfomail_class_contact_form_result.tpl
Subdir=templates
Match[class_identifier]=contact_form

[collectedinfomail_class_contact_mail]
Source=content/collectedinfomail/form.tpl
MatchFile=collectedinfo/collectedinfomail_class_contact_mail.tpl
Subdir=templates
Match[class_identifier]=contact_form
# *** END COLLECTED INFO TEMPLATES *** #


# *** NOTIFICATION TEMPLATES *** #
[notification_bug]
Source=notification/handler/ezsubtree/view/plain.tpl
MatchFile=notification/notification_bug.tpl
Subdir=templates
Match[class_identifier]=bug

[notification_bug_comment]
Source=notification/handler/ezsubtree/view/plain.tpl
MatchFile=notification/notification_bug_comment.tpl
Subdir=templates
Match[class_identifier]=article_comment
Match[parent_class_identifier]=bug

[notification_forum_message]
Source=notification/handler/ezsubtree/view/plain.tpl
MatchFile=notification/notification_forum_message.tpl
Subdir=templates
Match[class_identifier]=forum_message

[notification_article_comment]
Source=notification/handler/ezsubtree/view/plain.tpl
MatchFile=notification/notification_article_comment.tpl
Subdir=templates
Match[class_identifier]=article_comment
Match[parent_class_identifier]=article
# *** END NOTIFICATION TEMPLATES *** #


*/
?>

