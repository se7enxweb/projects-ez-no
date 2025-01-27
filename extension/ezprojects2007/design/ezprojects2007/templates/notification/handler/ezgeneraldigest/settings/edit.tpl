{let settings=$handler.settings}
    

        <div class="block">
        <label>
    <input type="checkbox" name="ReceiveDigest_{$handler.id_string}" {$settings.receive_digest|choose("",checked)} />
{'Receive all messages combined in one digest'|i18n('design/standard/notification')}</label>
        </div>
    
        <div class="block">
        <label>{'Time of day'|i18n('design/standard/notification')}:
        <select style="vertical-align: middle;" name="Time_{$handler.id_string}">
        {section name=Time loop=$handler.available_hours}
            <option value="{$Time:item}" {section show=eq($Time:item,$settings.time)}selected="selected"{/section}>{$Time:item}</option>
        {/section}
        </select>
        </label>
        </div>

    
    
    
        <label>
        <input type="radio" name="DigestType_{$handler.id_string}" value="3" {eq($settings.digest_type,3)|choose('',checked)} />
        {'Daily'|i18n('design/standard/notification')}
        </label>

        <label>
            <input type="radio" name="DigestType_{$handler.id_string}" value="1" {eq($settings.digest_type,1)|choose('',checked)} />
            {'Weekly, day of week'|i18n('design/standard/notification')}:&nbsp;&nbsp;&nbsp;

        <select name="Weekday_{$handler.id_string}">
        {section name=WeekDays loop=$handler.all_week_days}
            <option value="{$WeekDays:item}" {section show=eq($WeekDays:item,$settings.day)}selected="selected"{/section}>{$WeekDays:item}</option>
        {/section}
        </select>
        </label>

        <label>
        <input type="radio" name="DigestType_{$handler.id_string}" value="2" {eq($settings.digest_type,2)|choose('',checked)} />
            {'Monthly, day of month'|i18n('design/standard/notification')}:&nbsp;
        <select name="Monthday_{$handler.id_string}">
        {section name=MonthDays loop=$handler.all_month_days}
            <option value="{$MonthDays:item}" {section show=eq($MonthDays:item,$settings.day)}selected="selected"{/section}>{$MonthDays:item}</option>
        {/section}
        </select>
        </label>

        <p>{'If the day of month number you have chosen is larger than the number of days in the current month, then the last day of the current month will be used instead.'|i18n('design/standard/notification')}</p>
    

{/let}
