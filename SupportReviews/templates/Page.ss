<!DOCTYPE html>
<html lang="$Locale">
<head>
	<% base_tag %>
	$Metatags(false)
	<title>$Title &raquo; $SiteConfig.Title</title>
</head>
<body class="$Locale" <% if ClassName = SupportReviewEN %>id="SupportReview"<% else_if ClassName = SupportReviewES %>id="SupportReview"<% else %>id="$ClassName"<% end_if %>>
	
	<% include Head %>
	<div id="bd">
		$Layout
	</div>

<% include FooterMenu %>

$GoogleAnalytics
</body>
</html>




