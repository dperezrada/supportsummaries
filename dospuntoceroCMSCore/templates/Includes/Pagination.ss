<% if Paginate.MoreThanOnePage %>
	<div class="paginator cf">
		<% if Paginate.PrevLink %>
			<a class="prev" href="$Paginate.PrevLink"><% _t('Paginate.PREVIOUS', 'Previous') %></a> 
		<% end_if %>
		
		<% control Paginate.Pages %>
			<% if CurrentBool %>
				<span class="currentPage">$PageNum</span> 
			<% else %>
				<a href="$Link" title="$PageNum">$PageNum</a> 
			<% end_if %>
		<% end_control %>

		<% if Paginate.NextLink %>
			<a class="next" href="$Paginate.NextLink"><% _t('Paginate.NEXT', 'Next') %></a> 
		<% end_if %>
	</div>
<% end_if %>