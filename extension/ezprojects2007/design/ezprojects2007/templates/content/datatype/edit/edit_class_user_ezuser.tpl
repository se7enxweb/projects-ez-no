<table>
<tr>
<td>
   <div class="element">
     <label>{"E-Mail"|i18n("design/standard/content/datatype")}</label><div class="labelbreak"></div>
     <input type="text" name="ContentObjectAttribute_data_user_email_{$attribute.id}" size="11" value="{$attribute.content.email|wash(xhtml)}">
   </div>
</td>
<td>
<div class="block">
   <div class="element" valign="top" align="top">
      <label>{"Login"|i18n("design/standard/content/datatype")}</label><div class="labelbreak"></div>
       {section show=$attribute.content.has_stored_login}
       <input type="hidden" name="ContentObjectAttribute_data_user_login_{$attribute.id}" value="{$attribute.content.login}" />
       {$attribute.content.login}
       {section-else}
       <input type="text" name="ContentObjectAttribute_data_user_login_{$attribute.id}" size="11" value="{$attribute.content.login}" />
      {/section}
   </div>
</td>
<td>
<input type="hidden" name="ContentObjectAttribute_data_user_password_{$attribute.id}" size="11" value="{section show=$attribute.content.original_password}{$attribute.content.original_password}{section-else}{section show=$attribute.content.has_stored_login}password{/section}{/section}" />
<input type="hidden" name="ContentObjectAttribute_data_user_password_confirm_{$attribute.id}" size="11" value="{section show=$attribute.content.original_password_confirm}{$attribute.content.original_password_confirm}{section-else}{section show=$attribute.content.has_stored_login}password{/section}{/section}" />
</td>
<div class="break"></div>
</div>
</tr>
</table>

<!-- tset -->
