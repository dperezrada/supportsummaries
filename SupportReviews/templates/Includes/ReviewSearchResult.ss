<div class="article"> 
	<h2><a class="searchResultHeader" href="{$Top.SupportURL}/show/$URLSegment">$Title</a><% if InProgress %>
		<span class="inprogress">(In Progress)</span>
	<% end_if %></h2>
	<p class="metadata"><strong><% _t('ReviewSearchResult.PUBLISHED','Published date') %></strong>: $Date.Nice | <strong><% _t('ReviewSearchResult.CATEGORY','Category') %></strong>: <a href="support-summaries/percategory/$SRCategory.ID">$SRCategory.i18nTitle</a></p>
	
	
		<% if Summary %>
		<p>
		$Summary.ContextSummary(200) 
		<a href="$Link"><% _t('Page_results.READMORE','read more...') %></a>
		</p>
		<% end_if %>
</div>
