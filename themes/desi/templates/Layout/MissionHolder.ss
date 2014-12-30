<h1>{$Title}</h1>
<div>{$Content}</div>
{$Form}
{$PageComments}

<ul>
<% loop $Children %>
	<li>
		{$Title}
        <a href="{$Link}">link</a>
	</li>
<% end_loop %>
</ul>
