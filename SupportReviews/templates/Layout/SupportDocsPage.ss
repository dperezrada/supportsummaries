<div class="wrapper typography">
	<div class="container">
		<div class="grid_3-4">
			<h1><% _t('SupportDocsPage.SUPPORTSUMMARIES','Support Summaries') %></h1>

			<% if Reviews %>
				<% if Heading %>
					<h2>$Heading</h2>
				<% end_if %>	
				<% if Grouped %>
					<% control Reviews %>		
						<h2>$SRCategory.i18nTitle</h2>
						<ul>
						<% control Children %>
							<li><a href="$Link">$Title</a></li>
							<% if InProgress %>
								<span class="inprogress">(In Progress)</span>
							<% end_if %>
						<% end_control %>
						</ul>
					<% end_control %>
				<% else %>
				<ul>
					<% control Reviews %>
						<li><a href="$Link">$Title</a>
						<% if InProgress %>
						<span class="inprogress">(In Progress)</span>
						<% end_if %> 
						</li>
					<% end_control %>
				</ul>
				<% end_if %>


				<% if Reviews.MoreThanOnePage %>
				<div id="PageNumbersTop" class="pageNumbers clearfix">
					<% if Reviews.NotFirstPage %>
						<a class="next" href="$Reviews.PrevLink" title="View the next page">&laquo; Previous Page</a>
					<% end_if %>
					<span>
					<% control Reviews.Pages(5) %>
						<% if CurrentBool %>
						<span>$PageNum</span>
						<% else %>
						<a href="$Link" title="View page number $PageNum">$PageNum</a>
						<% end_if %>
					<% end_control %>
					</span>
					<% if Reviews.NotLastPage %>
						<a class="prev" href="$Reviews.NextLink" title="View the next page">Next Page &raquo;</a>
					<% end_if %>
				</div>
				<% end_if %>			
			<% else %>
				<% _t('SupportDocsPage.THEREISNOREVIEWSINTHISCATEGORY','There are no reviews in this category') %>
			<% end_if %>


			$Content			
		</div>
		<div class="grid_1-4">
			<% include SupportSearchSidebar %>
		</div>
	</div>

</div>