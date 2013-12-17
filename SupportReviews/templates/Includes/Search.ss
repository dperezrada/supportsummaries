<div class="search">
	$SearchForm
	<% if singular_name= Home %>
	<p class="browse"><span><% _t('Search.OR','or') %></span> <a href="<% if Locale = en_US %>support-summaries<% else %>resumenes-support<% end_if %>"><% _t('HomePage.BROWSESUMMARIES','Browse Summaries') %></a></p>
	<% end_if %>
</div>
