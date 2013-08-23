<div class="box" id="searchSidebar">
	<h2><% _t('SupportSearchSidebar.FILTERRESULTS','Filter Results') %></h2>
	<h3><% _t('SupportSearchSidebar.PERCATEGORY','Per Category') %></h3>
	<ul>
		<% if selected_filters.query %>
			<li><a href="/home/SearchForm?Search=$selected_filters.query&category=&year=$selected_filters.year"><% _t('SupportSearchSidebar.ALLSUMMARIES','All Summaries') %></a></li>
			<% control Categories %>
			<li><a <% if Current %>class="current"<% end_if %> href="$SearchLink">$i18nTitle</a></li>	   
			<% end_control %>
		<% else %>
			<li><a href="$SupportDocsPage.Link"><% _t('SupportSearchSidebar.ALLSUMMARIES','All Summaries') %></a></li>
			<% control Categories %>
			<li><a <% if Current %>class="current"<% end_if %> href="$Link">$i18nTitle</a></li>	   
			<% end_control %>
		<% end_if %>
	</ul>
	<h3><% _t('SupportSearchSidebar.PERYEAR','Per Year') %></h3>
	<ul>
		<% if selected_filters.query %>
			<li><a <% if selected_filters.year %>class="current"<% end_if %> href="/home/SearchForm?Search=$selected_filters.query&category=$selected_filters.category&year="><% _t('SupportSearchSidebar.ALL','All') %></a></li>
			<li><a href="/home/SearchForm?Search=$selected_filters.query&category=$selected_filters.category&year=1"><% _t('SupportSearchSidebar.LASTYEAR','Last Year') %></a></li>
			<li><a href="/home/SearchForm?Search=$selected_filters.query&category=$selected_filters.category&year=5"><% _t('SupportSearchSidebar.LATEST5YEARS','Latest 5 Years') %></a></li>
			<li><a href="/home/SearchForm?Search=$selected_filters.query&category=$selected_filters.category&year=10"><% _t('SupportSearchSidebar.LATEST10YEARS','Latest 10 Years') %></a></li>
		<% else %>
			<li><a href="$SupportDocsPage.YearLink(1)"><% _t('SupportSearchSidebar.LASTYEAR','Last Year') %></a></li>
			<li><a href="$SupportDocsPage.YearLink(5)"><% _t('SupportSearchSidebar.LATEST5YEARS','Latest 5 Years') %></a></li>
			<li><a href="$SupportDocsPage.YearLink(10)"><% _t('SupportSearchSidebar.LATEST10YEARS','Latest 10 Years') %></a></li>
		<% end_if %>
	</ul>
</div>
