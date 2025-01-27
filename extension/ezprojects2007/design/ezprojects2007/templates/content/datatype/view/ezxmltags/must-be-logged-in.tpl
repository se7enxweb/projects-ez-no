{let current_user=fetch('user','current_user')}
{section show=$current_user.is_logged_in}{$content}{/section}
{/let}
