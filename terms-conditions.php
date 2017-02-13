<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>bookmyanchors</title>
		<link rel="icon" type="image/png" href="img/logo/title-logo.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.swipebox.js"></script>
		<link rel="stylesheet" href="css/swipebox.css">
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script> -->

		<link href="css/font-awesome.css" rel="stylesheet">
	    <link href="css/bootstrap-social.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="css/custom_style.css">
		<script type="text/javascript" src="js/custom_js.js"></script>
		<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Lato:700,900&subset=latin-ext');
			.terms-conditions{
				 font-family: 'Lato', sans-serif;
			}
			.terms-conditions h1{
				 font-family: 'Lato', sans-serif;
				 font-size: 20px;
				 font-weight: 900;
				 line-height: 2;
			}
			.terms-conditions h2{
				 font-family: 'Lato', sans-serif;
				 font-size: 18px;
				 font-weight: 900;
				 line-height: 2;
			}
			.terms-conditions p{
				 font-family: 'Lato', sans-serif;
				 font-size: 15px;
				 font-weight: 700;
				 line-height: 2;
				 color: #383737;
			}
			
			.terms-conditions-check{
				list-style-type: none;
	     	}
			.terms-conditions-check>li:before {
				content: "\00BB \0020";
				font-size: 2px;
	     	}
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				console.log("nf");
				$(".background_image").scroll(function(){
					if($(this).scrollTop()>400)
					{
						$(".social-container1").removeClass("hide");
					}
					else{
						$(".social-container1").addClass("hide");	
					}
				});
			});
		</script>
	</head>
	<body>
	<div class="social-container1 hide">
		<div class="col-md-12 container-fluid light-black">
		<!-- icon bar -->
			<div class="container-fluid light-black icon-container col-md-12">
				<div class="col-md-4 logo">
					<a href="index.php">
						<img src="img/logo.png" class="img-responsive">
					</a>
				</div>
				<div class="col-md-8  Search-box">
					<div class="input-group stylish-input-group">
	           			<input type="text" class="form-control"  placeholder="Search with name or bma code" >
		        			<span class="input-group-addon">
		               			<button type="submit">
									<span class="glyphicon glyphicon-search"></span>
	                   			</button>  
	               			</span>
	       			</div>
				</div>
			</div>
		</div>
		</div>
	<div class="container-fluid">
		<!-- social media bar -->
			<?php include('header.php'); ?>
			<!-- ends social media bar -->

		<div class="terms-conditions">
			<h2>Terms and Conditions</h2>
			<p>
				The website,<strong> www.Bookmyanchors </strong>developed, owned and operated by <strong>shdowtech</strong>, is offered to its users, who may view/ access the Website subject to the Terms of Use provided hereunder.<br>

				By accessing and/or using the Website, you agree 
				<ol type="i">
					<li>to be bound by these Terms of Use and are deemed to have read and understood all of its contents and implications;</li>
					<li> you grant your free and unconditional consent to be subject to these Terms of Use as applicable.</li>
				</ol><br>	
				The Terms of Use set forth herein apply to the Website is covered and protected by all laws including but not limited to copyright and trademark laws of India.

			</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Bookmyanchors Services</strong></h1>
			<p>
				Bookmyanchors is provided to you to discover, explore and book entertainers through our featured content and interactive functionality available via the Internet.  
				<br>
				The Terms of Use include our policy for acceptable use of the Bookmyanchors Services and content, as well as your rights, obligations and restrictions regarding your use of the Bookmyanchors Services. We grant you a limited, revocable, non-exclusive license to access the Bookmyanchors Services for your own personal use, subject to the Terms of Use. Use of the Bookmyanchors Services beyond the scope of authorized access granted to you terminates this permission.
				<br>
				These terms and condition will constitute a binding contract between you and Bookmyanchors. By accessing the Bookmyanchors Services, you accept, without limitation or qualification, the following Terms of Use found and our existing Bookmyanchors Rules (the "Rules"), found, which are incorporated by this reference. You are only authorized to use the Bookmyanchors Services if you agree to abide by the Terms of Use and all applicable laws. If you do NOT accept the Terms of Use and the Rules, then please discontinue your use of the Site and the Bookmyanchors Services. Your continued use of this website following the posting of any change or modification of these terms will mean you accept those changes or modifications. Bookmyanchors reserves the right to withdraw access to this website and to change, modify, revise the materials, products and pricing listed or offered through this website at any time.
				<br>
				We may modify the Terms of Use from time to time and each modification will be effective upon posting on the Site, which serves as notice to you. The Terms of Use constitute the entire agreement regarding your use of the Site or the Bookmyanchors Services and supersede any such prior Terms of Use. We will attempt to notify all members of changes to these Terms of Use but are not obligated to do so, as it is important that you review the Terms of Use regularly to ensure you are updated as to any changes made.

			</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Emcee Content: Responsibility/Ownership &amp; Licenses</strong></h1>
			<p>
				The website <a href="#"><strong>www.bookmyanchors</strong></a> take responsibility for the contents displayed on the emcee detailed profile. Any violation of rules by the anchors will be liable from the company. All the anchors are subjected to the contract by the company. No client will be permitted to contact the anchor directly unless through <a href="#"><strong>www.bookmyanchors</strong></a>.
			</p>	
		</div>
		<div class="terms-conditions">
			<h1><strong>Celebrity anchor management </strong></h1>
			<p>
				The celebrities booked through the website are not bound to the website by any liability. Bookings will be done according to their availability and preferences. 
			</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Permitted Use of Content</strong></h1>
			<p>
				The content associated with the Bookmyanchors Services, including without limitation, the text, software, scripts, graphics, photographs, sounds, music, videos, visual interface, design, computer code, interactive features and the like  and the trademarks, service marks, trade names and logos contained therein, except all Anchor Content, are owned by or licensed to Bookmyanchors, subject to copyright and other intellectual property rights under the law. Except as expressly and unambiguously provided herein, Bookmyanchors does not grant you any express or implied rights, and all rights in and to the Bookmyanchors Services and the Site Content are retained by Bookmyanchors.
				<br>
				You may access Anchor Content for your information and personal, non-commercial use solely as intended through the provided functionality of the Bookmyanchors Services. Anchor Content and Site Content are provided to you for your information and personal, non-commercial use only, to be used solely as intended through the provided functionality of the Bookmyanchors Services and may not be downloaded, copied, reproduced, distributed, transmitted, broadcast, displayed, sold, licensed, or otherwise exploited for any other purposes whatsoever without the prior written consent of the respective owners, and it may not be used as prohibited under the Terms of Use.

			</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Intellectual Property Rights</strong></h1>
			<p>
				Subject to aforesaid, it is hereby specifically recorded that the content available through the Bookmyanchors Service is the sole and exclusive property of Bookmyanchors or its licensors and is protected by copyright and other intellectual property laws. Intellectual Property Rights for the purpose of this Agreement shall always mean and include copyrights whether registered or not, patents including rights of filing patents, trademarks, trade names, trade dresses, collective marks, associate marks and the right to register them, designs both industrial and layout, geographical indicators, moral rights, broadcasting rights, displaying rights, distribution rights, selling rights, abridged rights, translating rights, reproducing rights, performing rights, communicating rights, adapting rights, circulating rights, protected rights, joint rights, reciprocating rights, infringement rights and all those special rights conferred as a result of the Berne Convention, 1979 individually as a result of prospective local laws in accordance with the Convention and the Trade Related Aspects of Intellectual Property Rights Agreement of the World Trade Organization. All those intellectual property rights arising as a result of domain names, internet or any other form of an electronic/technological law shall also vest in the domain of Bookmyanchors. The parties hereto agree and confirm that no part of any intellectual property rights mentioned hereinabove is transferred in the name of Member and any intellectual property rights arising as a result of these presents shall also be in the absolute ownership, possession and control of Bookmyanchors.
			</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Copyright Infringement Policy</strong></h1>
			<p>
				In accordance with the Indian Copyright Act and other applicable laws, we have adopted a policy of disabling or terminating, in appropriate circumstances and at our sole discretion, the account of any Bookmyanchors member who infringes the intellectual property rights of you, us, or any third party. If you believe that your work has been copied in a way that constitutes copyright infringement, or your intellectual property rights have been otherwise violated, please notify us.
			</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Member Accounts</strong></h1>
			<p>
				To avail services rendered by the website one must comply with all the terms and condition. Anyone engaged in any unlawful activities is prohibited by terms and conditions and by applicable laws. By availing our services you expressly agree not to:
			</p>
			<ul type="terms-conditions-check">
				<li>Act as a coordinator or representative of the bookmyanchors Services and utilize the Bookmyanchor Services or emcee profile or Site Content for any commercial purpose other than for which the Bookmyanchor Services is intended without our express written permission which will be liable.</li>
				<li>Access, monitor or copy any content or information of the Bookmyanchor Services using any robot, spider, scraper or other automated means or any manual process for any purpose without our express written permission.</li>
				<li>Any action that may result in the websites credibility and discretion.</li>
				<li>Mirror, copy or incorporate any part of our website bookmyanchors or copy the design or pattern</li>
				<li>By accessing the service one must agree not to use the Bookmyanchor Services for any commercial use, without the prior written authorization of Bookmyanchor. Prohibited commercial uses include any of the following actions taken without the approvals from company shall agree not to use the Bookmyanchor Services for any commercial use, without the prior written authorization of Bookmyanchor. Prohibited commercial uses include any of the following actions taken without the company’s express approval:</li>
				<li>Use of the Bookmyanchor Services for the primary purpose of gaining advertising or subscription revenue,</li>
				<li>Sale of advertising on the Bookmyanchor Services or any third-party website, targeted specific Anchor Content or Site Content.</li>
				<li>Use of Vulgar, obscene, racial  and defamatory statements or comments or objectionable language</li>
				<li>Transmitting, posting or otherwise making available any materials or information infringing on the rights of a third party/any material that contains any malicious computer code, or reverse engineering or hacking any materials associated with the Bookmyanchor Services.</li>
			</ul>
			<p>
				In addition to the above online etiquettes the Clients/users/subscriber are requested to maintain certain code of practices and prohibited by law to do anything that may be liable under law with the emcees on venue
			</p>
			<ul type="terms-conditions-check">
				<li>Using vulgar, double meaning, obscene or offensive language.</li>
				<li>Misbehaving with the emcee/anchor.</li>
				<li>Demanding anything that is inappropriate to an emcee especially things that might hurt personal dignity of a person mostly female anchors</li>
				<li>Harassing, intimidating, stalking or threatening or impersonating any anchor associated with us</li>
				<li>Invasion of the emcee’s privacy</li>
				<li>Any sexually provoking gesture, comment or behavior towards the emcee specially against an female emcee</li>
				<li>Spreading comments, rumors or any actions that may invade an emcee’s dignity</li>
				<li>To conclude any actions that might hurt a person’s dignity, security and threatens an emcees security will be punishable according to the laws under Indian Penal code</li>
			</ul>
			<p>
				Bookmyanchors maintain a policy of cooperation with any law enforcement authorities or court order requesting or directing Bookmyanchors to disclose the identity of anyone posting any such information or materials.  Also we strictly enforce the Terms of Use through self-help, moderation, active investigation, litigation and prosecution.
			</p>
					
		</div>
		<div class="terms-conditions">
			<h1><strong>Terms and fees</strong></h1>
			<p>
				Kindly address all youAny client who goes through the website will be having access to the emcee profiles and details. We provide Services at such charges as provided in their engagement terms contained in the Terms and Conditions for Anchor and Clients prevailing at the time of booking. The selection of the anchor will be according to the profile given by the www.bookmyanchors.com website so that the client is free to select according to their preference. The booking charges shown in the website is inclusive of all the service charges so there is no need to pay anything extra above that. The Client and Anchor registered with bookmyanchors are prohibited to make any direct deal amongst themselves without the prior permission of Bookmyanchors. If on the later stage it is found so the each of the anchor and Anchor shall be liable to pay compensation of 150000. But the Anchors can take up assignments on their freewill with the consent from the company. 
				<br>The Fees once paid is not refundable unless under certain conditions.
			</p>
			<ul type="cricle">
				<li>The emcee/Anchor weren’t present at the time of the event </li>
				<li>Late arrival of the emcee ( The arrival time will be counted as at least one hour prior to the event timing unless intimated by the client or the emcee)</li>
				<li>The Emcee has been changed by the company at the time of arrival without the clients acknowledgement</li>
			</ul>
			<p>
				The company has the right to change the emcee incase of in availability with the booked anchors due to valid emergencies as accidents, Personal tragedies such as death of a close relative  as Parents or siblings or immediate blood relation, Sickness, or natural Calamities/disaster  with the consent/ acknowledgement of the client. If not approved by the client the company will be refunding the entire amount charged through Bookmyanchors website.
				<br>The above three scenarios are eligible for a full refund from the company side
				<br>Also the company will be refunding the 50%of the total payment made by a client for the anchor if dissatisfied by his/her performance during the event if presented with a proper evidence or proof, mostly audiovisual.
			</p>

			<ul type="cricle">
				<li>If the cancellations for valid reasons occur one week prior to the event only 0% of the payment will be charged and rest will be returned to the client.</li>
				<li>If the cancellations for valid reasons occur three days prior to the event then only the 5% of the total payment will be charged and rest will be returned to the client.</li>
				<li>If the cancellations for valid reasons occur one day prior to the event only 50% of the total payment will be charged and rest will be returned to the client.</li>
				<li>If the cancellations for valid reasons occur eight hours prior to the event only the 65% of the total payment will be charged and rest will be returned to the client.</li>
				<li>If the cancellations for valid reasons occur six hours prior to the event only the 80% of the total payment will be charged and rest will be returned to the client.</li>
			</ul>
			<p>If we observe anyone continuously making bookings and cancellations more than three times in a row will be investigated and if found out that the cancellations were without any valid reason their Fourth cancellation won’t be refundable and other clients will be given preference over them for the next activity in order to avoid deception by any competitors and avoid conflict.</p>	
		</div>
		<div class="terms-conditions">
			<h1><strong>Terms and Conditions and List of cards accepted</strong></h1>
			<h2><strong>Debit cards (Visa& MasterCard’s )</strong></h2>
				<p>All Kinds of Debit Cards are accpected </p>
			<!-- <ul>
				<li>Andhra Bank Visa Debit Card</li>
				<li>Axis Bank Mastercard Debit Card</li>
				<li>Axis Bank Visa Debit Card</li>
				<li>Barclays Bank Visa Debit Card</li>
				<li>Bank of India Mastercard Debit Card</li>
				<li>Canara Bank Mastercard Debit Card</li>
				<li>Canara Bank Visa Debit Card</li>
				<li>Central Bank of India Mastercard Debit Card</li>
				<li>Citibank Maestro Debit Card</li>
				<li>Citibank Mastercard Debit Card</li>
				<li>City Union Bank Visa Debit Card</li>
				<li>Corporation Bank Mastercard Debit Card</li>
				<li>Corporation Bank Visa Debit Card</li>
				<li>Deutsche Bank Visa Debit Card</li>
				<li>Dhanlaxmi Bank Visa Debit Card</li>
				<li>GE Money Financial Services Debit Card</li>
				<li>HDFC Bank Mastercard Debit Card</li>
				<li>HDFC Bank Visa Debit Card</li>
				<li>ICICI Bank Mastercard Debit Card</li>
				<li>ICICI Bank Visa Debit Card</li>
				<li>IDBI Bank Mastercard Debit Card</li>
				<li>IDBI Bank Visa Debit Card</li>
				<li>Indian Bank Mastercard Debit Card</li>
				<li>Indian Overseas Bank Visa Debit Card</li>
				<li>Indusind Bank Visa Debit Card</li>
				<li>Karnataka Bank Visa Debit Card</li>
				<li>Kotak Virtual Visa Cards Visa Debit Card</li>
				<li>Punjab National Bank Mastercard Debit Card</li>
				<li>Royal Bank of Scotland Mastercard Debit Card</li>
				<li>Standard Chartered Bank Mastercard Debit Card</li>
				<li>Standard Chartered Bank Visa Debit Card</li>
				<li>State Bank of India Mastercard Debit Card</li>
				<li>State Bank of India Visa Debit Card</li>
				<li>The Federal Bank Mastercard Debit Card</li>
				<li>The Federal Bank Visa Debit Card</li>
				<li>The Karur Vysya Bank Visa Debit Card</li>
				<li>The Syndicate Bank Visa Debit Card</li>
				<li>The Union Bank of India Visa Debit Card</li>
				<li>The Union Bank of India Mastercard Debit Card</li>
				<li>Yes Bank Mastercard Debit Card</li>
				<li>Other Visa debit Cards</li>
			</ul> -->
			<h2><strong>Credit Cards (Visa, MasterCard’s &Amex)</strong></h2>
			<ul>
				<li>Visa</li>
				<li>Master Card</li>
				<li>American Expres</li>
			</ul>
			<p>
				All online banking transfers, paytm, any ecommerce means of payment and in*****<strong>special cases with the consent of the company (Bookmyanchors) cash payments can also be made.</strong>
			</p>		
		</div>
		<div class="terms-conditions">
			<h1><strong>Termination of Service</strong></h1>
			<p>
				You agree that the Company, in its sole discretion, has the right, but not the obligation, to block your IP address, or otherwise terminate your access to or use of the Bookmyanchor Services, or any part thereof, immediately and without notice, and remove and delete any Anchor Content on the Bookmyanchor Services, for any reason, including, without limitation, if we believe that you have violated or acted inconsistently with the letter or spirit of the Terms of Use. Further, you agree that Bookmyanchor will not be liable to you or any third party for any termination of your access to the Bookmyanchor Services. Further, you agree not to attempt to use the Bookmyanchor Services after your member account has been terminated.
				<br>You agree that if you are dissatisfied with the Bookmyanchor Services, if you do not agree with any part of the Terms of Use, or if you have any other dispute or claim with or against us with respect to the Terms of Use or the Bookmyanchor Services, your sole and exclusive remedy is to discontinue using the Bookmyanchor Services.
			</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Links</strong></h1>
			<p>The Bookmyanchor Services may provide links to other websites or resources. Because we have no control over such websites and resources, you acknowledge and agree that Bookmyanchor is not responsible for the availability of such external websites and resources, and does not endorse and is not responsible or liable for any content, advertising, products or other materials on or available from such websites or resources. You further acknowledge and agree that we will not be liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use or reliance on any such content, goods or services available on or through any such website or resource.</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Children / Minor Policy</strong></h1>
			<p>This website is recommended for use of individuals of age of 18 years or above, but if you are above 13 years of age or older but below 18 years, you may be granted access by providing either of their parents Email IDs and an Email will be sent informing the parent that their ward has registered himself/herself to use the Bookmyanchor Services through this website. Parents of such wards will be liable for damages or losses occurred due to activities or action of their wards and are legally bound by any Acts/ Deeds/ Violations of the Bookmyanchor Terms of Use by their wards. Bookmyanchor shall not be liable for a minor viewing the website without a parent or guardian.</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Indemnity</strong></h1>
			<p>You agree to defend, indemnify and hold Bookmyanchor, our owner, and each of its subsidiaries, affiliates, directors, officers, agents, vendors or other partners, employees and Bookmyanchor moderators harmless from any claim or demand, including attorneys' fees and costs, made by any third party due to or arising out of any Content, material or information posted, provided, transmitted or otherwise made available by you on or through the Bookmyanchor Services, by your violation of the Terms of Use, or by your violation of any third party right, including without limitation any copyright, property, or privacy right.</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>Trademark Information</strong></h1>
			<p>Bookmyanchor is a registered trademark and logo. You agree that all Bookmyanchor's trademarks, including Bookmyanchor trade names, service marks, logos and service names are trademarks and the property of Bookmyanchor. Without our prior permission, you agree not to display or use in any manner any Bookmyanchor mark. All trademarks included in the Bookmyanchor Services not owned by Bookmyanchor are the property of their respective owners. Nothing contained on the Bookmyanchor Services may be construed as granting, by implication, estoppel, or otherwise, any right or license to use any trademark.</p>
		</div>
		<div class="terms-conditions">
			<h1><strong>General Provisions</strong></h1>
			<p>If there is any claim or dispute about or involving the Bookmyanchor Services, you agree that the claim or dispute will be governed by the laws of India, without regard to conflict of law provisions. You agree to and hereby submit to exclusive personal jurisdiction and venue in the courts located in the Kochi, Kerala, India with respect to any such matters, and you agree to waive any and all objections to jurisdiction and to venue. The Bookmyanchor Services are controlled and offered by Bookmyanchor in the India and we make no representation that materials associated with the Bookmyanchor Services are appropriate or available for use in other locations, and accessing them from jurisdictions where the content is illegal is prohibited. Those who choose to use or access the Bookmyanchor Services from other jurisdictions do so at their own initiative and are responsible for compliance with local laws. 
			<br>
			You affirm that you are either more than 18 years of age, or an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into these terms, conditions, obligations, affirmations, representations, and warranties set forth in the Terms of Use, and to abide by and comply with the Terms of Use.
			<br>
			Our failure to exercise or enforce any right or provision of the Terms of Use will not operate as a waiver of such right or provision. If any provision of the Terms of Use is unlawful, void or unenforceable, that provision is deemed severable and does not affect the validity and enforceability of any remaining provisions.
			<br>If any provision of this Agreement is invalid or unenforceable under applicable law, it is, to that extent, deemed omitted and the remaining provisions will continue in full force and effect. This Agreement will bind and inure to the benefit of each party's permitted successors and assigns. This Agreement is personal to you and may not be transferred, assigned or delegated to anyone. Any attempt by you to assign, transfer or delegate this Agreement shall be null and void. This Agreement (including all documents expressly incorporated herein by reference, including but not limited to the Bookmyanchor engagement terms with its Anchor and Client, as applicable) constitutes the complete and exclusive agreement between Bookmyanchor and you with respect to the subject matter hereof and supersedes all prior oral or written understandings, communications or agreements not specifically incorporated herein.
			<br>
			The Terms herein are subject to prevailing laws and legal process, and nothing contained in this Agreement is in derogation of our right to comply with statutory requests or requirements relating to your use of the Bookmyanchor Service or information provided to or gathered by us with respect to such use.
			<br>
			This Agreement or any other communication in electronic form or printed shall be admissible in judicial or arbitration proceedings as if produced in printed form.
		</p>
		</div>
	</div>	
	<div class="col-md-12 container-fluid footer-dynamic-block">
		<?php
			include 'footer.php';
		?>
	</div>
	</body>
</html>
