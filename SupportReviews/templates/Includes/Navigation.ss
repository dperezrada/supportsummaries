<div id="nav">
	<ul>
		<% control Menu(1) %>
			<li>
				<% if Children %>
					<a class="$LinkingMode $FirstLast" href="$Link" title="Go to $Title">$MenuTitle</a>
						<% if Children %>
						<ul class="sub">
							<% control Children %>
							<li><a href="$Link" title="Go to $Title" class="$LinkingMode levelb">$MenuTitle</a></li>
							<% end_control %>
						</ul>
				<% else %>
					<a class="$LinkingMode $FirstLast" href="$Link" title="Go to $Title">$MenuTitle</a>
					<% end_if %>
				<% end_if %>
			</li>
		<% end_control %>
	</ul>
</div><!-- #nav -->