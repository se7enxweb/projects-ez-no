{switch match=$status_number}
{case match=0}
    {set status='Stable'}
{/case}
{case match=1}
    {set status='Beta'}
{/case}
{case match=2}
    {set status='Alpha'}
{/case}
{case}
    {set status='Stable'}
{/case}
{/switch}