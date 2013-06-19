<% control Supporters %>
	<div class="supporter cf">
        <div class="image left">
			<% if SupporterURL %>
        		<a href="$SupporterURL" target="_blank">$SupporterImage.SetWidth(100)</a>			
			<% else %>
				$SupporterImage.SetWidth(100)
			<% end_if %>

        </div>
		<div class="supporterinfo">
			<h4>$Title_ES</h4>
			$Description_ES
		</div>
	</div>
<% end_control %>
