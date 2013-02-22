<?php include_once $_SERVER['DOCUMENT_ROOT'].'/includes/ux_template_php/vars.php'; ?>
<?php include  $templatePath.'doctype.php'; ?>
<title>New York State Department of Labor</title>
<?php include 'main-sub-common-header.inc' ?>
<link rel="stylesheet" type="text/css" href="/includes/language-widget/css/language-style.css">

<style>
#gov-name {
	display:block;
	clear: both;
	float: right;
	margin-top: 3px;
	height: 10px;
}
#gov-name ul{
	list-style: none;
}
#gov-name ul li {
	float: left;
	display:inline;
	color: #FFFFFF;
	font-size: 10px;
	margin-right: 3px;
}
#gov-name ul li a {
	color: #FFFFFF;
	font-size: 10px;
	text-decoration: none;
}
#gov-name ul li a:hover {
	color: #C9E0EC;
}
#gov-name-link {
	padding-right: 2px;
}
#language-box-wrapper {
	display:inline-block;
	width:100%;
	margin-bottom: 10px;
}
#ux-page-rating {
	display:none;
}
#govWidgetLoad{
	background:#fff; 
	height:380px; 
	width: 250px; 
	float:none; 
	position:absolute; 
	right: 0px; 
}

</style>
<?php include  $templatePath.'header1.php'; ?>
<?php include  $templatePath.'skip-to-nav.php' ?>
<?php include  $templatePath.'header2.php'; ?>
<?php include  $templatePath.'header3.php'; ?>
<?php include  $templatePath.'app-menu.php'; ?>
<?php include  $templatePath.'app-search.php'; ?>
						<div id="gov-name" class="notranslate">
							<ul>
								<li><a id="gov-name-link" href="http://governor.ny.gov" class="ext_track" onclick="_gaq.push(['_trackEvent', 'external_links', 'http://governor.ny.gov', 'http://governor.ny.gov']);_gaq.push(['_trackEvent', 'gov', 'governor', 'governor']);">Andrew M. Cuomo, <em>Governor</em></a> |</li>
								<li><span id="commis-name-link">Peter M. Rivera, <em>Commissioner</em></span></li>
							</ul>
						</div>
<?php include  $templatePath.'header4.php'; 
	/* content begin*/
?>
<div class="website-main">

	<!--
		<div class="grid_4 alpha">
			<a href="individuals.php" class="persona individuals"><span class="ux-hide-508">Individuals</span></a>
		</div>
		<div class="grid_4">
			<a href="businesses.php" class="persona businesses"><span class="ux-hide-508">Businesses</span></a>
		</div>
		<div class="grid_4">
			<a href="research.php" class="persona research"><span class="ux-hide-508">Government &amp; Research</span></a>
		</div>
		<div class="grid_4 omega">
			<div class="small-items-container">
				<a class="small-items get-assistance" href="/unemploymentassistance.shtm"><span class="ux-hide-508">Get Unemployment Assistance</span></a>
			</div>
			<div class="small-items-container">
				<a class="small-items search-for-job" href="/careerservices/CareerServicesIndex.shtm"><span class="ux-hide-508">Find a Job</span></a>
			</div>
			<div class="bottom-promo-button">
				<a class="promo-button" href="http://labor.ny.gov/ui/claimantinfo/UIBenefitsCalculator.shtm"><span class="ux-hide-508">Unemployment Insurance Benefits Calculator</span></a>
			</div>
		</div>
	-->
	<!-- Start of Persona Widget -->
<?php 
	$widgetChoice = "";
	if(isset($_COOKIE['persona']) && !empty($_COOKIE['persona'])) {
		$widgetChoice = htmlspecialchars($_COOKIE["persona"]);
	}
	//}else{
	//setCookie( "persona", '',time() + (86400* 7) );
	//}
	
	$sCSS_widgetSelected = "selected-tab";
	$widgetTabJobseekers = '';
	$widgetTabBusinesses = '';
	$widgetTabCommunity = '';
	$widgetTabPrograms = '';
	$widgetPanelJobseekers = 'display:none;';
	$widgetPanelBusinesses = 'display:none;';
	$widgetPanelCommunity = 'display:none;';
	$widgetPanelPrograms = 'display:none;';
	
	
	switch ($widgetChoice)
	{
	case "jobseekers":
		$widgetTabJobseekers = $sCSS_widgetSelected;
		$widgetPanelJobseekers = 'display:block;';
		break;
	case "businesses":
		$widgetTabBusinesses = $sCSS_widgetSelected;
		$widgetPanelBusinesses = 'display:block;';
		break;
	case "community":
		$widgetTabCommunity = $sCSS_widgetSelected;
		$widgetPanelCommunity = 'display:block;';
		break;
	case "programs":
		$widgetTabPrograms = $sCSS_widgetSelected; 
		$widgetPanelPrograms = 'display:block;';
		break;		
	default:
		$widgetTabJobseekers = $sCSS_widgetSelected;
		$widgetPanelJobseekers = 'display:block;';
	}
?>
	
	<div class="grid_16 alpha omega widgets margin-top margin-bottom-none">
			<div class="persona-widget">
				<ul class="widget-tab-list">
					<li id="jobseekers-widget-tab" class="persona-tab <?=$widgetTabJobseekers ?> ">
						<a href="/main/individuals.php" data-tab="jobseekers"><span class="ux-hide-508">Job Seekers &amp; Employees</span></a>
					</li>
					<li id="businesses-widget-tab" class="persona-tab  <?=$widgetTabBusinesses ?> ">
						<a href="/main/businesses.php" data-tab="businesses"><span class="ux-hide-508">Businesses &amp; Employers</span></a>
					</li>
					<li id="community-widget-tab" class="persona-tab <?=$widgetTabCommunity ?> ">
						<a href="/main/research.php" data-tab="community"><span class="ux-hide-508">Community &amp; Workforce Partners</span></a>
					</li>
					<li id="programs-widget-tab" class="persona-tab <?=$widgetTabPrograms ?> ">
						<a href="/main/other-information.php" data-tab="programs"><span class="ux-hide-508">Programs &amp; Services</span></a>
					</li>
				</ul>
				<div class="widget-container-wrapper">
					<div id="jobseekers-container" class="persona-container" style="<?=$widgetPanelJobseekers ?>">
						<div> 
							<div class="clearfix">
								<div class="widget-panel-wrapper">
									<div>
										<a href="/careerservices/CareerServicesIndex.shtm"><img src="images/find-a-job.jpg" alt="Find a Job"><!-- <img src="/css/apps/css/images/find-a-job.jpg"> --></a>
										<div class="widget-content-wrapper">
											<ul>
												<li><a href="/workforcenypartners/osview.asp">One-Stop Career Centers</a></li>
												<li><a href="/careerservices/planyourcareer/planningyourcareerindex.shtm">Career Development</a></li>
												<li><a href="/careerservices/findajob/jobfairrecruitmentsindex.shtm">Career Fairs and Recruitments</a></li>
												<li><a href="/apprenticeship/general/registration.shtm">Apprenticeship</a></li>
												<li><a href="/vets/vetintropage.shtm">Veterans</a></li>
												<li><a href="/youth">Youth Information Portal</a></li>
											</ul>
										</div>
									</div>
									<div class="widget-content-wrapper">
										<ul>
											<li><a href="/workerprotection/laborstandards/labor_standards.shtm">Labor Standards</a></li>
											<li><a href="/workerprotection/laborstandards/workprot/minwage.shtm">Minimum Wage</a></li>
											<li><a href="/workerprotection/laborstandards/workprot/wphmpg.shtm">Working Papers</a></li>
										</ul>
									</div>
								</div>
								<div class="widget-panel-wrapper">
									<div>
										<a href="/unemploymentassistance.shtm"><img src="images/get-assistance.jpg" alt="Unemployment Assistance"><!-- <img src="/css/apps/css/images/get-assistance.jpg"> --></a>
										<div class="widget-content-wrapper">
											<ul>
												<li><a href="/ui/how_to_file_claim.shtm">How to File a Claim</a></li>
												<li><a href="https://ui.labor.state.ny.us/UBC/home.do?FF_LOCALE=1">File a Claim</a></li>
												<li><a href="https://ui.labor.state.ny.us/UBC/home.do?FF_LOCALE=1">Claim Weekly Benefits</a></li>
												<li><a href="/ui/claimantinfo/importantnews.shtm">Tax Form 1099G</a></li>
												<li><a href="/ui/claimantinfo/ExtendedBenefits.shtm">Extended Benefits</a></li>
												<li><a href="/ui/claimantinfo/UIBenefitsCalculator.shtm">Benefits Calculator</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>						
							<div class="more-resources" style="height:0px;">
								<a class="button next icon-right" href="/main/jobseekers-and-employees.asp">More Resources</a>
							</div>
						</div>
					</div>
					<div id="businesses-container" class="persona-container" style="<?=$widgetPanelBusinesses ?>">
						<div> 
							<div class="clearfix">
								<div class="widget-panel-wrapper">
									<div>
										<div class="widget-content-wrapper">
											<h3 style="font-size: 14px; letter-spacing: -1px;">Managing Your Workforce</h3>
											<ul>
												<li><a href="/businessservices/services/perm.shtm">Place a Job Order</a></li>
												<li><a href="/businessservices/ojt.shtm">Hiring Incentives</a></li>
												<li><a href="/formsdocs/wp/ellsformsandpublications.shtm">Employment Laws</a></li>
												<li><a href="/workerprotection/laborstandards/workprot/lshmpg.shtm">Labor Standards</a></li>
											</ul>
											<h3 style="font-size: 14px;">Business Opportunities</h3>
											<ul>
												<li><a href="/businessservices/funding.shtm">Funding Opportunities</a></li>
												<li><a href="/apprenticeship/appsponsor.shtm">Apprenticeship</a></li>
												<li><a href="https://applications.labor.ny.gov/ETPL/">Eligible Training Providers</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="widget-panel-wrapper">
									<div>
										<h3 style="font-size: 14px; margin-left: 12px; letter-spacing: -1px; margin-top: 20px;">Unemployment Insurance</h3>
										<div class="widget-important-message">
											<a href="/legal/construction-industry-fair-play-act.shtm">New Requirements for Construction Employers</a>
										</div>
										<div class="widget-content-wrapper">
											<ul style="margin-left: -10px;">
												<li><a href="/ui/employer.shtm">Employer Overview of Unemployment Insurance</li>
												<li><a href="/ui/employerinfo/EmployerHomePageLanding.shtm">My Unemployment<br> Insurance Account</a>
													<ul>
														<li>View your current and last three year's tax rates</li>
														<li>See your profile information</li>
														<li>Check your active addresses</li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>						
							<div class="more-resources">
								<a class="button next icon-right" href="/main/businesses-and-employers.asp ">More Resources</a>
							</div>
						</div>
					</div>
					<div id="community-container" class="persona-container" style="<?=$widgetPanelCommunity ?>">
						<div> 
							<div class="clearfix">
								<div class="widget-panel-wrapper">
									<div>
										<div class="widget-content-wrapper">
											<h3 style="font-size: 14px;">Public Work</h3>
											<ul>
												<li><a href="http://wpp.labor.state.ny.us/wpp/publicViewPWChanges.do?method=showIt">Article 8 - Construction</a></li>
												<li><a href="http://wpp.labor.state.ny.us/wpp/publicViewPWChangesArt9.do?method=showIt">Article 9 - Building Services</a></li>
												<li><a href="/workerprotection/publicwork/PWDebarmentInformation.shtm">Debarred List</a></li>
											</ul>
											<h3 style="font-size: 14px;">Labor Statistics</h3>
											<ul>
												<li><a href="/stats/green/index.shtm">Green Jobs Survey</a></li>
												<li><a href="/stats/pressreleases/pruistat.shtm">Monthly Statistics<br> Press Release</a></li>
												<li><a href="/stats/pressreleases/prlaus.shtm">Monthly Unemployment Rate Press Release</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="widget-panel-wrapper">
									<div>
										<div class="widget-content-wrapper">
											<h3 style="font-size: 14px;" >Workforce Investment</h3>
											<ul>
												<li><a href="https://applications.labor.ny.gov/ETPL/">Eligible Training Provider List</a></li>
												<li><a href="/businessservices/funding.shtm">Funding Opportunities</a></li>
												<li><a href="/workforcenypartners/lwia.shtm">Local Workforce <br>Investment Boards</a></li>
												<li><a href="/workforce/swib/SWIBAbout.shtm">State Workforce <br>Investment Board</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>						
							<div class="more-resources">
								<a class="button next icon-right" href="/main/community-and-workforce-partners.asp ">More Resources</a>
							</div>
						</div>				
					</div>
						<div id="programs-container" class="persona-container" style="<?=$widgetPanelPrograms ?>">
							<div> 
								<div class="clearfix">
									<div class="widget-panel-wrapper">
										<div>
											<div class="widget-content-wrapper">
												<h3 style="font-size: 14px;">Programs/Initiatives</h3>
												<ul>
													<li><a href="/apprenticeship/general/registration.shtm">Apprenticeship</a></li>
													<li><a href="http://www.careerzone.ny.gov">CareerZone</a></li>
													<li><a href="http://www.greencareersny.com/">Green Jobs</a></li>
													<li><a href="https://jobzone.ny.gov/jobseeker/login.do?url=%2Fjobseeker%2Fportfolio%2Findex.jsp">JobZone</a></li>
													<li><a href="http://ridesafeny.com/">Ride Safe NY</a></li>
													<li><a href="/ui/employerinfo/shared-work-program.shtm">Shared Work</a></li>
													<li><a href="/youth">Youth Portal</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-panel-wrapper">
										<div>
											<div class="widget-content-wrapper">
												<h3 style="font-size: 14px;">Services</h3>
												<ul>
													<li><a href="/businessservices/landing.shtm">Business Services</a></li>
													<li><a href="/dews-index.shtm">Career Services</a></li>
													<li><a href="/equal-opportunity/index.shtm">Equal Opportunity</a></li>
													<li><a href="/immigrants/index.shtm">Immigrant Policies</a></li>
													<li><a href="/legal/index.html">Legal Information</a></li>
													<li><a href="/stats/index.shtm">Labor Statistics</a></li>
													<li><a href="/ui/faq.shtm">Unemployment Insurance</a></li>
													<li><a href="/workerprotection/wp_index.shtm">Worker Protection</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>						
								<div class="more-resources">
									<a class="button next icon-right" href="/main/programs-and-services.asp ">More Resources</a>
								</div>
							</div>					
						</div>
				</div>	
			</div>
			<div style="float:right" class="gov-widget-outter" id="gov-widget-outter">
				<div class="gov-widget" style="height:375px;" id="gov-widget-iframe-wrapper">
					<noscript>
					<iframe id="govMessageBox-NoScript" src="http://www.governor.ny.gov/sites/default/themes/governor/govwidget.php" title="Governor Andrew M. Cuomo website" target="_none" width="250px" height="375px" scrolling="no"><p>Your browser does not support iframes.</p>
					</iframe>
					</noscript>
				</div>
				<script>
					overdiv = document.createElement("div");
					overdiv.id = "govWidgetLoad";
					document.getElementById( 'gov-widget-outter' ).appendChild( overdiv );
					overdiv.innerHTML = '<img src="images/loading.gif" style="margin: 175px auto 0 auto; display:block" />';
					
					document.getElementById( 'gov-widget-iframe-wrapper' ).innerHTML = '<iframe id="govMessageBox" src="http://www.governor.ny.gov/sites/default/themes/governor/govwidget.php" title="Governor Andrew M. Cuomo website" target="_none" width="250px" height="375px" scrolling="no"><p>Your browser does not support iframes.</p>';
				</script>

			</div>
		</div>
	<!-- End of Persona Widget -->
	
	<div class="grid_16 alpha omega ux-form-wrapper margin-top-none">
		<div class="grid_4 alpha">
			<div class="grid_4 alpha omega">
			<div id="language-box-wrapper"><?php include $domainLabor."/includes/language-widget/language-widget.inc" ?></div>
			</div>
			<div class="grid_4 alpha omega margin-top">
				<!--
				promo
				-->
			</div>
		</div>
		<div class="grid_12 omega">
			<div class="announcement-div dol-container">
				<div class="ux-content-wrapper">
					<div class="msg-box">
						<?php include $domainLabor."/includes/messages/homepage.inc" ?> 
					</div>
					<h2 class="h4 announcement-title">Area Unemployment Rates</h2>
					<p>
						The State Labor Department is your source for employment data in every region of the state. You'll find information broken down by major metropolitan areas as well as by county. Read the <a href="http://labor.ny.gov/stats/pressreleases/prlaus.shtm">latest report on area unemployment rates</a>.
					</p>
					<h2 class="h4 announcement-title">Statewide Jobs Data</h2>
					<p>
						What is the current unemployment rate in New York State? What industries gained the most jobs in the past month? You will find that information and more in our <a href="http://labor.ny.gov/stats/pressreleases/pruistat.shtm">latest job numbers report</a>. 
					</p>
				</div>	
			</div>
		</div>
	</div>
</div>

<?php /* content end */
	include $templatePath.'footer1.php'; 
?>

<script src="internet-homepage.js"></script>
<script>
	$(document).ready(function() {
		ux.load("expandables");
	});
</script>
<?php include $templatePath.'footer2.php'; ?>
