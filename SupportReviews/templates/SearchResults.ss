<!DOCTYPE html>
<html lang="es">
<head>
	<% base_tag %>
	$Metatags(false)
	<title>$Title &raquo; $SiteConfig.Title</title>
</head>
<body id="SupportDocsPage">
	<% include Head %>
	<div id="bd">
		<div class="wrapper">
			<div class="container typography">
				<div class="grid_3-4">
					<div class="box">
						<% if Results %>
							<% control Results %>
								<% if ClassName = SupportReviewEN %>
									<% include ReviewSearchResult %>
								<% else_if ClassName = SupportReviewES %>
									<% include ReviewSearchResult %>
								<% else %>                      
									<% include NormalSearchResult %>
								<% end_if %>
							<% end_control %>
							<% if Results.MoreThanOnePage %>
								<div id="PageNumbers">
									<% if Results.NotFirstPage %>
										<a class="prev" href="$Results.PrevLink">
											&larr; <% _t('SearchResults.PREVIOUSPAGE','Previous page') %>
										</a>
									<% end_if %>
									<% control Results.Pages %>
										<% if CurrentBool %>
											<b>$PageNum</b>
										<% else %>
											<a href="$Link">$PageNum</a>
										<% end_if %>
									<% end_control %>
									<% if Results.NotLastPage %>
										<a class="next" href="$Results.NextLink">
											<% _t('SearchResults.NEXTPAGE','Next page') %> &rarr;
										</a>
									<% end_if %>
									<p>
										<% _t('SearchResults.PAGE','Page') %> $Results.CurrentPage <% _t('SearchResults.OF','of') %> $Results.TotalPages
									</p>
								</div>
							<% end_if %>
							<p> Summary of this review is in progress. <img class="in_progress" src="SupportReviews/images/in_progress.png"/> The link leads to the review in PDQ-Evidence.</p>
						<% else %>
							<div class="article">
								<p>
									<% _t('Page_results.NORESULTS','No results found...') %>
								</p>
							</div>
						<% end_if %>
					</div>
				</div>
				<div class="grid_1-4">
					<% include SupportSearchSidebar %>
				</div>
			</div>
		</div>
	</div>
<% include Footer %>

$GoogleAnalytics
</body>
</html>