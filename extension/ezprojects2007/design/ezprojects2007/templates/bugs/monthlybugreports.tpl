<h1>Monthly bugs posted per category</h1>

<table class="list" width="50%">
    <tr>
      <td class="forumhead">Date</td>
      <td class="forumhead">Undefined</td>
      <td class="forumhead">OE</td>
      <td class="forumhead">Misc</td>
      <td class="forumhead">Packages</td>
      <td class="forumhead">Admin</td>
      <td class="forumhead">Install</td>
      <td class="forumhead">Language</td>
      <td class="forumhead">ez.no</td>
      <td class="forumhead">Licensing</td>
      <td class="forumhead">Community</td>
      <td class="forumhead">TOTAL POSTED</td>
      <td class="forumhead">Resolved</td>
      <td class="forumhead">Closed</td>
      <td class="forumhead">TOTAL FIXED</td>
    </tr>

        {section loop=$report_list sequence=array(bgdark, bglight)}
            {let date=$:item.data_map['date'].content
                 undefined=$:item.data_map['undefined_category'].content
                 oe=$:item.data_map['oe_category'].content
                 misc=$:item.data_map['misc_category'].content
                 packages=$:item.data_map['packages_category'].content
                 admin=$:item.data_map['admin_category'].content
                 install=$:item.data_map['install_category'].content
                 language=$:item.data_map['language_category'].content
                 ezno=$:item.data_map['ez_no_category'].content
                 licensing=$:item.data_map['licensing_category'].content
                 community=$:item.data_map['community_category'].content
                 posted=sum($undefined, $oe, $misc, $packages, $admin, $install, $language, $ezno, $licensing, $community)
                 resolved=$:item.data_map['resolved_status'].content
                 closed=$:item.data_map['closed_status'].content
                 fixed=sum($resolved, $closed)}
                <tr>
                    <td>{$date.day}/{$date.month}/{$date.year}</td>
                    <td>{$undefined}</td>
                    <td>{$oe}</td>
                    <td>{$misc}</td>
                    <td>{$packages}</td>
                    <td>{$admin}</td>
                    <td>{$install}</td>
                    <td>{$language}</td>
                    <td>{$ezno}</td>
                    <td>{$licensing}</td>
                    <td>{$community}</td>
                    <td>{$posted}</td>
                    <td>{$resolved}</td>
                    <td>{$closed}</td>
                    <td>{$fixed}</td>
                </tr>
            {/let}
        {/section}
</table>

