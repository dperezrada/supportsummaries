<div id="bd">
	<div class="wrapper typography">
		
		<div class="container">
			<div class="grid_3-4">
				<div class="box">
					<p class="date">$Date.Month, $Date.Year - SUPPORT Summary of a systematic review <span id="print" >| 
						<a href="javascript:window.print()"><% _t('ReviewPage.PRINT','print this article') %></a> | 
						<!-- <a href="http://pdfcrowd.com/url_to_pdf/?use_print_media=1">download PDF </span></a> -->
						<% if PDF %>
							<a href="$PDF.URL">download PDF </span></a>
						<% end_if %>
					</p>
					<h1>$Title</h1>
					

					<div id="summary">
						$Summary
					</div>
				</div>
			</div>
			<div class="grid_1-4">
				<div class="sidebar"> 
					<img src="SupportReviews/images/extra-logos.png" width="220px" />
					<div class="box">
						<h4>Who is this summary for?</h4>
						$SummaryFor
						<h4 style="background:transparent url('SupportReviews/images/exclamacion.png') no-repeat left center;padding-left:30px;">This summary includes:</h4>
						<ul><li>Key findings from research based on a systematic review</li>
							<li>Considerations about the relevance of this research for low and middle- income countries</li>
						</ul>
						<h4 style="background:transparent url('SupportReviews/images/equis.png') no-repeat left center;padding-left:30px;">Not included:</h4>
						<ul><li>Recommendations</li>
							<li>Additional evidence not included in the systematic review</li>
							<li>Detailed descriptions of interventions or their implementation</li>
						</ul>					
						<h4>This summary is based on the following systematic review:</h4>
						<p>$SummaryBasedOn</p>
						<% if PDQLink %>
						<p>
							<a href="$PDQLink">See in PDQ-Evidence</a>
						</p>
						<% end_if %>
						<% if CochraneLink %>
						<p>
							<a href="$CochraneLink">See in Cochrane Library</a>
						</p>
						<% end_if %>
						<h4>What is a systematic review?</h4>
						<p>A summary of studies addressing a clearly formulated question that uses systematic and explicit methods to identify, select, and critically appraise the relevant research, and to collect and analyse data from the included studies.	</p>
						<hr>
						<p><strong>SUPPORT</strong> &ndash; an international collaboration funded by the EU 6th Framework Programme to support the use of policy relevant reviews and trials to inform decisions about maternal and child health in low and middle-income countries. <a title="www.support-collaboration.org" href="http://www.support-collaboration.org">www.support-collaboration.org</a></p>					
						<p><strong><a href="http://www.support-collaboration.org/summaries/explanations.htm" target="_blank" title="Glossary of terms used in this report">Glossary of terms used in this report</a></strong></p>
						<p><strong><a href="/support/show/$ID#AdditionalInformation">Background references on this topic</a></strong></p>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper typography">

		<div class="container">
			<div class="grid_3-4">
				<div class="box">
					<div id="Background"> 
						<h2>Background</h2>
						$Background
					</div>
				</div>
			</div>
			<div class="grid_1-4">
			    <div class="sidebar">
					<div class="box">
						<h4>How this summary was prepared</h4>
						<p>After searching widely for systematic reviews that can help inform decisions about health systems, we have selected ones that provide information that is relevant to low and middle-income countries. The methods used to assess the quality of the review and to make judgements about its relevance are described in the <a href="http://www.support-collaboration.org/summaries/methods.htm" title="methods for doing support reviews" target="_blank">methods page</a> on our <a href="http://www.support-collaboration.org/summaries/methods.htm" title="methods for doing support reviews" target="_blank">support-collaboration.org website</a></p>

						
						<h4>Knowing what’s not known is important</h4>
						<p>A good quality review might not find any studies from low and middle-income countries or might not find any well-designed studies. Although that is disappointing, it is important to know what is not known as well as what is known.</p>
						   	
					</div>
			    </div>
			</div>

			<div class="clear"></div><br /><br /><div class="clear"></div>

			<div id="AboutSummaryTable">  
				<h2>About the systematic review underlying this summary</h2>
				$AboutSummaryTable
				<p>
					$SummaryBasedOn 
					<% if PubMedLink %><a href="$PubMedLink">See in PubMed</a> <% end_if %>
					<% if CochraneLink %><a href="$CochraneLink">See in Cochrame</a> <% end_if %>
					<% if PDQLink %><a href="$PDQLink">See in PDQ</a><% end_if %>
					
				</p>

				
			</div>
			
		</div><!--.container-->	
	</div>		               

	<div class="wrapper typography">
	
		<div class="container">
			<div class="grid">
				<div class="box">
					<div id="SummaryOfFindings">
						<div class="sidebar">
							<div class="box">
								<h4>About quality of  evidence (GRADE) </h4>
								<p> <% include High %><br />
									<strong>High</strong>: Further research is very unlikely to change our confidence in the estimate of effect.</p>
								<p> <% include Moderate %><br />
									<strong>Moderate</strong>: Further research is likely to have an important impact on our confidence in the estimate of effect and may change the estimate.</p>
								<p> <% include Low %><br />
									<strong>Low</strong>: Further research is very likely to have an important impact on our confidence in the estimate of effect and is likely to change the estimate.</p>
								<p> <% include VeryLow %><br />
									<strong>Very low</strong>: We are very uncertain about the estimate.</p>
								<p><a href="/support/show/$ID#AdditionalInformation" title="More information">More information</a></p>
							</div>
						</div>
						
						<h2>Summary of findings</h2>
						$SummaryOfFindings  
						
						
						
					</div>
				</div>
			</div>
			<!-- <div class="clear"></div><br /><br /><div class="clear"></div>
			
			
			<div id="SummaryOfFindingsTable">			
				$SummaryOfFindingsTable
			</div> -->
		</div>
	</div>
	<div class="wrapper typography">

		<div id="RelevanceOfTheReview">
			<h2>Relevance of the review for low and middle-income countries</h2>
			$RelevanceOfTheReview
		</div>
	</div>		
	<div class="wrapper typography">
	
		<div class="container">
			<div class="grid_3-4">
				<div class="box">
					<div id="AdditionalInformation">
						<h2>Additional information</h2>
						$AdditionalInformation
						
						<% if PDQLink %>
						<br /><hr /><br />
						<p>
							<a href="$PDQLink">See related evidence at PDQ-Evidence</a>
						</p>
						<% end_if %>
					</div>					
					<div class="clear"></div><br /><br /><div class="clear"></div>
					<div id="SummaryFor">
						<% if Supporters %>
							<h3>This summary was prepared with additional support from:</h3>

							<% if Locale = "es_ES" %>
								<% include SpanishSupporter %>
							<% end_if %>
							<% if Locale = "en_US" %>
								<% control Supporters %>
									<div class="supporter cf">
				                        <div class="image left">
				                        	<a href="$SupporterURL" target="_blank">$SupporterImage.SetWidth(100)</a>
				                        </div>
										<div class="supporterinfo">
											<h4>$Title_EN</h4>
											$Description_EN
										</div>
							
									</div>
								<% end_control %>
							
							<% end_if %>

						<% end_if %>
					</div>
				</div>
			</div>
			<div class="grid_1-4">
				<div class="sidebar">
					<div class="box">
						<h4>About quality of evidence (GRADE)</h4>
						<p> The quality of the evidence is a judgement about the extent to which we can be confident that the estimates of effect are correct. These judgements are made using the GRADE system, and are provided for each outcome. The judgements are based on the type of study design (randomised trials versus observational studies), the risk of bias, the consistency of the results across studies, and the precision of the overall estimate across studies. For each outcome, the quality of the evidence is rated as high, moderate, low or very low using the definitions on the <a href="/support/show/$ID#SummaryOfFindings" title="Summary of findings page">Summary of findings page</a>.</p>
						<p> <a href="http://www.support-collaboration.org/summaries/grade2.pdf" title="For more information about GRADE">For more information about GRADE</a></p>
					</div>
					<div class="box">
						<h4>SUPPORT collaborators:</h4>
						<p> The Alliance for Health Policy and Systems Research (HPSR) is an international collaboration aiming to promote the generation and use of health policy and systems research as a means to improve the health systems of developing countries. www.who.int/alliance-hpsr</p>
						<p> The Cochrane Effective Practice and Organisation of Care Group (EPOC) is a Collaborative Review Group of the Cochrane Collaboration: an international organisation that aims to help people make well informed decisions about health care by preparing, maintaining and ensuring the accessibility of systematic reviews of the effects of health care interventions. www.epoc.cochrane.org</p>
						<p> The Evidence-Informed Policy Network (EVIPNet) is an initiative to promote the use of health research in policymaking. Focusing on low and middle-income countries, EVIPNet promotes partnerships at the country level between policy-makers, researchers and civil society in order to facilitate both policy development and policy implementation through the use of the best scientific evidence available. <a href="http://www.who.int/rpc/evipnet/en/" title="www.who.int/rpc/evipnet/en/">www.who.int/rpc/evipnet/en/</a></p>
						<p> <a href="http://www.support-collaboration.org" title="more information on this review">Click here for more information</a></p>
						<p> <a href="http://www.support-collaboration.org/summaries/newsletter/" title="Receive e-mail notices of new SUPPORT summaries">Receive e-mail notices of new SUPPORT summaries</a></p>
						<p> <a href="http://www.support-collaboration.org/feedback/" title="provide feedback about this summary">Provide feedback on this summary</a></p>					
					</div>
				</div>
			</div>
		</div>		
	</div><!--.wrapper-->
	
	<div class="wrapper container">
		<div class="box">
			<h2>
				<% _t('ReviewPage.Comments','Comments') %>
			</h2>
			<div id="disqus_thread"></div>
			<script type="text/javascript">
			    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			    var disqus_shortname = 'umbeuc'; // required: replace example with your forum shortname

			    // The following are highly recommended additional parameters. Remove the slashes in front to use.
			    // var disqus_identifier = 'unique_dynamic_id_1234';
			    // var disqus_url = 'http://example.com/permalink-to-page.html';

			    /* * * DON'T EDIT BELOW THIS LINE * * */
			    (function() {
			        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
			        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			    })();
			</script>
			
		</div>

		
	</div>
</div><!--#bd-->