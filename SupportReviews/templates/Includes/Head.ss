<div id="hd" class="cf">
	<div class="wrapper">

		<div id="logo">
			<a href="/">
				<img src="$ThemeDir/images/logo.png" alt="$Title"/>
			</a>
			<div class="slogan">
				<h1><% _t('Head.SUPPORTSUMMARIES','SUPPORT Summaries') %></h1>
				<p><% _t('Head.SLOGAN','Evidence of the effects of health system interventions <br />for low- and middle-income countries') %></p>
			</div>
		</div>

		<div id="nav">
				<ul class="sf-menu">
					<% control Menu(1) %>
						<li>
							<% if Children %>
								<a class="$LinkingMode $FirstLast" href="$Link" title="<% _t('Head.GOTO','Go to ') %>$Title">$MenuTitle</a>
									<% if Children %>
										<ul class="sub">
											<% control Children %>
											<li><a href="$Link" title="<% _t('Head.GOTO','Go to ') %> $Title" class="$LinkingMode levelb">$MenuTitle</a></li>
											<% end_control %>
										</ul>
									<% end_if %>
							<% else %>
								<a class="$LinkingMode $FirstLast" href="$Link" title="<% _t('Head.GOTO','Go to ') %> $Title">$MenuTitle</a>
							<% end_if %>
						</li>


					<% end_control %>
					<% if Translations %>
						<li>

							<% control Translations %>
								<a hreflang="$Locale.RFC1766" href="$Link"><% _t('Page.TRANSLATIONS','available translations') %>: <img src="SupportReviews/images/{$Locale}.gif" title="$Title" /></a>
							<% end_control %>
						</li>
					<% end_if %>
				</ul>
		</div>
		<% if ClassName != HomePage %>
			<% include Search %>
		<% end_if %>
	</div>	
</div>
