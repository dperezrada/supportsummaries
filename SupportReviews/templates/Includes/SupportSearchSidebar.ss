<div class="box" id="searchSidebar">
	<h2><% _t('SupportSearchSidebar.FILTERRESULTS','Filter Results') %></h2>
	<h3><% _t('SupportSearchSidebar.PERCATEGORY','Per Category') %></h3>
	<ul>
	   <li><a href="$SupportDocsPage.Link"><% _t('SupportSearchSidebar.ALLSUMMARIES','All Summaries') %></a></li>
	   <% control Categories %>
	   <li><a <% if Current %>class="current"<% end_if %> href="$Link">$i18nTitle</a></li>	   
	   <% end_control %>
	</ul>
	<h3><% _t('SupportSearchSidebar.PERYEAR','Per Year') %></h3>
	<ul>
	   <li><a href="$SupportDocsPage.YearLink(all)"><% _t('SupportSearchSidebar.ALL','All') %></a></li>
	   <li><a href="$SupportDocsPage.YearLink(1)"><% _t('SupportSearchSidebar.LASTYEAR','Last Year') %></a></li>
	   <li><a href="$SupportDocsPage.YearLink(5)"><% _t('SupportSearchSidebar.LATEST5YEARS','Latest 5 Years') %></a></li>
	   <li><a href="$SupportDocsPage.YearLink(10)"><% _t('SupportSearchSidebar.LATEST10YEARS','Latest 10 Years') %></a></li>
	</ul>
</div>
