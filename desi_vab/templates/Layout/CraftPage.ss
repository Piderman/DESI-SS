<%--
	devlop refernce page for all the things 
--%>
<% if $CraftObject %>
	<div>
	<% loop $CraftObject %>
		<div><b>Title:</b> {$Title}</div>
		<div><b>Vehicle:</b> {$Vehicle}</div>
		<div><b>Crew Size:</b> {$CrewSize}</div>
		<div><b>Cost:</b> {$Cost}</div>
		<div><b>Delta V:</b> {$DeltaV}</div>
		<div><b>Weight:</b> {$Weight}</div>
		<div><b>Stages:</b> {$Stages}</div>
		<div><b>Payload Capacity:</b> {$PayloadCapacity}</div>
		<hr>
	<% end_loop %>
	</div>
<% end_if %>
