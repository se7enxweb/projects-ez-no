{switch match=$status_number}
{case match=0}
    {set status='Draft'}
{/case}
{case match=1}
    {set status='Recommendation'}
{/case}
{case match=2}
    {set status='Finalized'}
{/case}
{case match=3}
    {set status='Being implemented'}
{/case}
{case match=4}
    {set status='Completed'}
{/case}
{case match=5}
    {set status='Rejected'}
{/case}
{case}
    {set status='Unknown'}
{/case}
{/switch}