<?php include_once $_SERVER['DOCUMENT_ROOT'].'/includes/ux_template_php_upgrade/vars.php'; ?>
<?php include  $templatePath.'doctype.php'; ?>
<title>New York State Department of Labor</title>
<?php include 'main-sub-common-header.inc' ?>
<style>
</style>
<?php include  $templatePath.'header1.php'; ?>
<?php include  $templatePath.'skip-to-nav.php' ?>
<?php include  $templatePath.'header2.php'; ?>
<?php include  $templatePath.'header3.php'; ?>
<?php include  $templatePath.'app-menu.php'; ?>
<?php include  $templatePath.'app-search.php'; ?>
<?php include  $templatePath.'header4.php'; ?>
				<div id="ux-breadcrumbs" class="grid_16 clearfix">
					<ul>
						<li>
							<a href="http://labor.ny.gov">Home</a>
						</li>
						<li>
							Businesses
						</li>
					</ul>
				</div>
<?php include  $templatePath.'content-no-nav-begin.php'; 	/* content begin*/ ?>
<h2>Businesses</h2>
<div class="website-main">
	<div class="msg-box">
		<?php include $domainLabor."/includes/messages/businesses.inc"; ?>
	</div>				
	<div class="grid_16 alpha omega subpage-links">
		<?php include $domainLabor."/includes/labor_menu/global-menu-businesses.inc" ?>			
	</div>


</div>
<?php /* content end */
	include $templatePath.'footer1.php'; 
?>
<script>
$(document).ready(function() {
	$( '.website-main div.outer-sub-nav>nav>ul>li>a').on('click', function(e) {
		e.preventDefault();
	});
});
</script>
<?php include $templatePath.'footer2.php'; ?>

