<h1>{$Title}</h1>
<div>
	Mission Type: {$MissionType} <br/>
	Status: {$Status} <br/>
	Destination: {$Destination}<br/>
	Crew:
	<ul>
	<% loop $Crews %>
		<li>
			{$FullName}
		</li>
	<% end_loop %>
	</ul>
</div>
<div>{$Objective}</div>
<div>{$Background}</div>
<div>{$Content}</div>
{$Form}
{$PageComments}
