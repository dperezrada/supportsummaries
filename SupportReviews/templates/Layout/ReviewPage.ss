<div id="bd">
	<div class="wrapper typography">
		
		<div class="container">
			<div class="grid_3-4">
				<div class="box">
					<p class="date">$Date.Month, $Date.Year - SUPPORT Summary of a systematic review <span id="print" >| 
						<a href="javascript: w=window.open('$PDF.URL'); w.print(); w.close(); "><% _t('ReviewPage.PRINT','print this article') %></a> | 
						<!--a href="javascript:window.print()"><% _t('ReviewPage.PRINT','print this article') %></a-->  
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
					<img src="SupportReviews/images/extra-logos.png" width="255px" />
					<div class="box">
						<hr>
						<h4>Who is this summary for?</h4>
						$SummaryFor
						<h4 style="margin-top:15px;margin-bottom:3px;background:transparent url('SupportReviews/images/exclamacion.png') no-repeat left center;padding-left:30px;">This summary includes:</h4>
						<ul><li><b>Key findings</b> from research based on a systematic review</li>
							<li><b>Considerations about the relevance of this research </b> for low income countries</li>
						</ul>
						<h4 style="margin-top:10px;margin-bottom:3px;background:transparent url('SupportReviews/images/equis.png') no-repeat left center;padding-left:30px;">Not included:</h4>
						<ul><li>Recommendations</li>
							<li>Additional evidence not included in the systematic review</li>
							<li>Detailed descriptions of interventions or their implementation</li>
							<hr>
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
						<p style="margin-bottom:1px;"> A summary of studies addressing a clearly formulated question that uses systematic and explicit methods to identify, select, and critically appraise the relevant research, and to collect and analyse data from the included studies.	

						</p>
						<hr>
						<p style="margin-bottom:1px;"><strong>SUPPORT</strong> &ndash; was an international project to support the use of policy relevant reviews and trials to inform decisions about maternal and child health in low- and middle-income countries, funded by the European Commission (FP6) and the Canadian Institutes of Health Research.</p>					
						<p ><strong><a href="http://www.supportsummaries.org/glossary-of-terms/" target="_blank" title="Glossary of terms used in this report">Glossary of terms used in this report</a></strong></p>
						<p><strong><a href="#AdditionalInformation">Background references on this topic</a></strong></p>	
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
						<p>After searching widely for systematic reviews that can help inform decisions about health systems, we have selected ones that provide information that is relevant to low-income countries. The methods used to assess the reliability of the review and to make judgements about its relevance are described <a href="http://www.supportsummaries.org/how-support-summaries-are-prepared/" title="methods for doing support reviews" target="_blank"> here</a></p>

						
						<h4>Knowing what’s not known is important</h4>
						<p>A reliable review might not find any studies from low-income countries or might not find any well-designed studies. Although that is disappointing, it is important to know what is not known as well as what is known.</p>
						<p>A lack of evidence does not mean a lack of effects. It means the effects are uncertain.  When there is a lack of evidence, consideration should be given to monitoring and evaluating the effects of intervention, if it is used.</p>   	
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
								<h4>About the certainty of the  evidence (GRADE) </h4>
								<p> <% include High %><br />
									<strong>High</strong>: This research provides a very good indication of the likely effect. The likelihood that the effect will be substantially different† is low.</p>
								<p> <% include Moderate %><br />
									<strong>Moderate</strong>: This research provides a good indication of the likely effect. The likelihood that effect will be substantially different† is moderate.</p>
								<p> <% include Low %><br />
									<strong>Low</strong>: This research provides some indication of the likely effect. Howevver, the likelihood that it will be substantially different† is high.</p>
								<p> <% include VeryLow %><br />
									<strong>Very low</strong>: This research does not provide a reliable indication of the likely effect.  The likelihood that the effect will be substantially different† is very high.</p>
								<p>* This is sometimes referred to as 'quality of evidence' or 'confidence in the estimate'.</p>
								<p>† Substantially different = a large enough difference that it might affect a decision.</p>
								<p>See <a href="#AdditionalInformation" > last page </a> for more information.</p>
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
			<h2>Relevance of the review for low-income countries</h2>
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
						<h4>About certainty of evidence (GRADE)</h4>
						<p> The “certainty of the evidence” is an assessment of how good an indication the research provides of the likely effect, i.e. the likelihood that the effect will be substantially different from what the research found. By “substantially different” we mean a large enough difference that it might affect a decision. These judgements are made using the GRADE system, and are provided for each outcome. The judgements are based on the study design (randomised trials versus observational studies), factors that reduce the certainty (risk of bias, inconsistency, indirectness, imprecision, and publication bias) and factors that increase  the certainty (a large effect, a dose response relationship, and plausible confounding). For each outcome, the certainty of the evidence is rated as high, moderate, low or very low using the definitions on page 3.</p>
						<p> <a href="http://www.supportsummaries.org/grade" title="For more information about GRADE"><strong>For more information about GRADE </strong></a></p>
					</div>
					<div class="box">
						<h4>SUPPORT collaborators:</h4>
						<p>The Cochrane Effective Practice and Organisation of Care Group (EPOC) is part of the <a href="http://www.cochrane.org" >Cochrane Collaboration</a>.  The Norwegian EPOC satellite supports the production of Cochrane reviews relevant to health systems in low- and middle-income countries . <a href="http://www.epocoslo.cochrane.org">www.epocoslo.cochrane.org</a> </p>
						<p><strong>The Evidence-Informed Policy Network (EVIPNet) </strong> is an initiative to promote the use of health research in policymaking in low- and middle-income countries. <a href="http://www.evipnet.org"> www.evipnet.org </a></p>
						<p><strong>The Alliance for Health Policy and Systems Research (HPSR) </strong> is an international collaboration that promotes the generation and use of health policy and systems research in low- and middle-income countries. <a href="http://www.who.int/alliance-hpsr">www.who.int/alliance-hpsr</a></p>
						<p><strong>Norad</strong>, the Norwegian Agency for Development Cooperation, supports the Norwegian EPOC satellite and the production of SUPPORT Summaries. <a href="http://www.norad.no">www.norad.no</a> </p>
						<p><strong>The Effective Health Care Research Consortium</strong> is an international partnership that prepares Cochrane reviews relevant to low-income countries. <a href="http://www.evidence4health.org">www.evidence4health.org</a> </p>


						<p><strong>To receive e-mail notices of new SUPPORT summaries or provide feedback on this summary, go to:</strong>
						<a href="http://www.supportsummaries.org/contact"> www.supportsummaries.org/contact </a></p>
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