$Content

<% if ShowChildren = 1 %>
	<% control Paginate %>
		<div class="article $AlphaOmega grid_half cf">
			<% if Photo %>
				<div class="image right">
					<img src="<% control Photo %><% control CroppedImage(200,200) %>$URL<% end_control %><% end_control %>" alt="$Title"/>
				</div>
			<% end_if %>
			<h3>$Title</h3>
			<p>$Content.LimitCharacters(200)</p>
			<p><a href="$Link">leer más</a></p>
		</div>	
	<% end_control %>
	<% include Pagination %>
<% end_if %>