$Content
<style>
	.badass {
		background: #bada55;
	}
</style>
<% if $CrewObject %>
	<div class="devlops-list">
	<% loop $CrewObject %>
		<div class="{$BadassClass}">
			<div><b>Full Name:</b> {$FullName}</div>
			<div><b>Current Status:</b> {$FlightStatus}</div>
		</div>
	<% end_loop %>
	</div>
<% end_if %>