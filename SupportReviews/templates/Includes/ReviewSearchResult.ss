<div class="article"> 
	<h2><a class="searchResultHeader" 
		<% if InProgress %>
			<% if PDQLink %>
				href="$PDQLink"
			<% else %>
				href="#"
			<% end_if %>
		<% else %>
			href="{$Top.SupportURL}/show/$URLSegment"
		<% end_if %>
	>
	<% if InProgress %>
	 <img class="in_progress" src="/SupportReviews/images/in_progress.png" />
	<% end_if %>
	$Title</a><% if InProgress %>
		<span class="inprogress">(In Progress)</span>
	<% end_if %></h2>
	<p class="metadata">
		<% if InProgress != 1 %>
			<strong><% _t('ReviewSearchResult.PUBLISHED','Published date') %>
			</strong>: $Date.Nice | 
		<% end_if %>
		<strong><% _t('ReviewSearchResult.CATEGORY','Category') %>
		</strong>: <a href="support-summaries/percategory/$SRCategory.ID">$SRCategory.i18nTitle</a></p>
		
	
		<% if Summary %>
			<% if InProgress != 1 %>
				<p>
				$Summary.ContextSummary(200) 
				<a href="$Link"><% _t('Page_results.READMORE','read more...') %></a>
				</p>
			<% end_if %>
		<% end_if %>
</div>
