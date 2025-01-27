{* Calculate the offset for a forum message *}

{* Parameters:
   - count = int
*}
{set offset=$count|div( 20 )|ceil()|sub( 1 )|mul( 20 )}