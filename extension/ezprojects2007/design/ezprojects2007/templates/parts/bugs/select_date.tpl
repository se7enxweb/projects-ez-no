{let current_date = gettime( currentdate() ) }
{default search_type = 'all'
         from_day = $current_date['day']
         to_day = $current_date['day']
         from_month = $current_date['month']
         to_month = $current_date['month']
         from_year = $current_date['year']
         to_year = $current_date['year']}


<table class="list" width="100%">
    <tr>
        <th>{'Select date'|i18n( 'design/ezno/bugs/select_report_date' )}</th>
    </tr>
    <tr>
        <td><input name='SearchType' value='all' type='radio' {section show=eq($search_type,'all')}checked='checked' {/section}>{'All Reports'|i18n( 'design/ezno/bugs/select_report_date' )}</td>
    </tr>
    <tr>
        <td><input name='SearchType' value='fromTo' type='radio' {section show=eq($search_type,'fromTo')}checked='checked' {/section}>
            {'From'|i18n( 'design/ezno/bugs/select_report_date' )}: &nbsp;{'day'|i18n( 'design/ezno/bugs/select_report_date' )}<input name='FromDay' size='2' maxlength='2' value="{$from_day}" type='text'>
            {'month'|i18n( 'design/ezno/bugs/select_report_date' )}<input name='FromMonth' size='2' maxlength='2' value="{$from_month}" type='text'>
            {'year'|i18n( 'design/ezno/bugs/select_report_date' )}<input name='FromYear' size='4' maxlength='4' value="{$from_year}" type='text'>

            &nbsp; &nbsp; &nbsp;

            {'To'|i18n( 'design/ezno/bugs/select_report_date' )}: &nbsp; {'day'|i18n( 'design/ezno/bugs/select_report_date' )}<input name='ToDay' size='2' maxlength='2' value="{$to_day}" type='text'>
            {'month'|i18n( 'design/ezno/bugs/select_report_date' )}<input name='ToMonth' size='2' maxlength='2' value="{$to_month}" type='text'>
            {'year'|i18n( 'design/ezno/bugs/select_report_date' )}<input name='ToYear' size='4' maxlength='4' value="{$to_year}" type='text'>
        </td>
    </tr>
    {*
    <tr>
        <td><input name='SearchType' value='week' type='radio'>
            {'Week'|i18n( 'design/ezno/bugs/select_report_date' )}:
            &nbsp<input name='fromWeek' size='2' maxlength='2' value="1" type='text'>
            &nbsp;-
            &nbsp;<input name='toWeek' size='2' maxlength='2' value="1" type='text'>
        </td>
    </tr>
    *}
</table>
{/default}
{/let}


