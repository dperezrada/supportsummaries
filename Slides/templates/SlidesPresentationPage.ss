<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<% base_tag %>

	<title>Shower Presentation Template</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1274, user-scalable=no">
</head>
<body class="list">
	<header class="caption">
		<h1><% _t('SlidesPresentationPage.SUPPORTREVIEWSTUTORIAL','Support reviews tutorial') %></h1>
		<p><% _t('Head.SLOGAN','Evidence of the effects of health system interventions for low- and middle-income countries') %></p>
	</header>
	<!-- <div class="slide cover" id="Cover"><div>
		<section>
			<header>
				<h2>Shower Presentation Template</h2>
			</header>
			<img src="images/cover.jpg" alt="">
		</section>
	</div></div> -->

	<% control Slides %>
	<div class="slide" id="slide$Pos"><div>
		<section>
			<header>
				<h2>$Title</h2>
			</header>
			<div class="image <% if ImagePosition %>$ImagePosition<% else %>left<% end_if %>">
				<img src="<% control Image %>$URL<% end_control %>" alt="$Title"/>
			</div>
			<div class="content">
				$Content
			</div>
		</section>
	</div></div>
	<% end_control %>
	<!--
		To hide progress bar from entire presentation
		just remove “progress” element.
		-->
	<div class="progress"><div></div></div>
	<!-- Copyright © 2010–2012 Vadim Makeev — pepelsbey.net -->
	<!-- Photos by John Carey — fiftyfootshadows.net -->
</body>
</html>