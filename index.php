<?php include_once $_SERVER['DOCUMENT_ROOT'].'/includes/ux_template_php_upgrade/vars.php'; ?>
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
#language-container-wrapper {
	display:inline-block;
}
#language-box-wrapper {
	display:inline-block;
	width:100%;
	margin-bottom: 10px;
}
#ux-page-rating {
	display:none;
}
#content { margin-top:40px;}
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
<?php include  $templatePath.'header4.php'; ?>
<?php include  $templatePath.'content-no-nav-begin.php'; 	/* content begin*/ ?>


<div class="website-main" >

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
			<div class="dol-container" id="announcement-div" >
				<div  class="ux-content-wrapper">
					<div class="msg-box">
						<?php include $domainLabor."/includes/messages/homepage.inc" ?> 
					</div>
					<div id="announcement-messages-div">
						<?php include $domainLabor."/includes/messages/homepage-announcements.inc" ?> 
					</div>
				</div>	
			</div>
			<div style="float:right" class="gov-widget-outter" id="gov-widget-outter">
					<div class="gov-widget" id="gov-widget-iframe-wrapper">
							<?php 
									// code for widget. watch out for mismatched quotes.
									$iframeCode = '<iframe id="govMessageBox-NoScript" src="http://www.governor.ny.gov/sites/default/themes/governor/govwidget.php" title="Governor Andrew M. Cuomo website" target="_none" width="250px" height="375px" scrolling="no" frameborder="0" border="0"><p>Your browser does not support iframes.</p></iframe>';
							?>
							<noscript>
									<?php // noscript fallback for gov widget ?>
									<?=$iframeCode ?>
							</iframe>
							</noscript>
					</div>
					<script>
							<?php // script insert the widget into div section ?>
							// over lay div 
							overdiv = document.createElement("div");
							overdiv.id = "govWidgetLoad";
							document.getElementById( 'gov-widget-outter' ).appendChild( overdiv );
							overdiv.innerHTML = '<img src="images/loading.gif" style="margin: 175px auto 0 auto; display:block" />';
							// insert iframe
							document.getElementById( 'gov-widget-iframe-wrapper' ).innerHTML = '<?=$iframeCode ?>';
					</script>
			</div>
		</div>
	</div>
</div>

<?php /* content end */
	include $templatePath.'footer1.php'; 
?>
<script>
	$(document).ready(function() {
		ux.load("expandables");
		
		//fade in gov widget
		$('#govMessageBox').ready( function () {
			$("#govWidgetLoad").delay(1000).fadeOut(1000)
		});
	
	}); 
</script>
<?php include $templatePath.'footer2.php'; ?>
