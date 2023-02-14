<?php
//initilize the page
require_once("inc/init.php");
//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");
/*---------------- PHP Custom Scripts ---------
YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */
$page_title = "Coming Soon";
/* ---------------- END PHP Custom Scripts ------------- */
//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
$no_main_header = true;
$page_html_prop = array("id"=>"extr-page", "class"=>"animated fadeInDown");
include("inc/header.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
<header id="header">
	<!--<span id="logo"></span>-->
	<div id="logo-group">
		<span id="logo"> <img src="<?php echo ASSETS_URL; ?>/img/logo.png" alt="SmartAdmin"> </span>
		<!-- END AJAX-DROPDOWN -->
	</div>
	<span id="extr-page-header-space"> <a href="<?php echo APP_URL; ?>/" class="btn btn-danger">Back To Dashboard</a> </span>
</header>

<div id="main" role="main">
    	<!-- MAIN CONTENT -->
	<div id="content">
		<!-- row -->
		<div class="row">
			<!-- col -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="page-title txt-color-blueDark text-center well">
					<!-- PAGE HEADER -->
						Coming Soon<br>
						<small class="text-success"><strong>Our website is currently under construction</strong></small>
						<ul id="example" class="txt-color-blueDark">
					<li><span class="days">00</span><p class="days_text">Days</p></li>
					<li class="seperator">:</li>
					<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
					<li class="seperator">:</li>
					<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
					<li class="seperator">:</li>
					<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
					</ul>
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<?php
							$diff  = date_diff( date_create('2023-02-20'), date_create('') );
							$diff_a  = date_diff( date_create('2023-02-20'), date_create('2023-02-15') );

							$dt_waktu = (($diff->format('%a')/$diff_a->format('%a'))*100);
							$dt_waktus = (100-$dt_waktu);
							if($dt_waktus==0){$tmplangka="10";}else{$tmplangka=$dt_waktus;}
						?>				
						<div class="well no-padding">
							<div class="bar-holder">
								<div class="progress">
									<div class="progress-bar bg-color-redLight" data-transitiongoal="<?php echo $tmplangka; ?>"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4"></div>
					<br><br>									
				</h1>
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
</div>


<!-- ==========================CONTENT ENDS HERE ========================== -->
<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>
<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/jquery.countdown.min.js"></script>

<script type="text/javascript">
// DO NOT REMOVE : GLOBAL FUNCTIONS!
$(document).ready(function() {
	/*
	 * Autostart Carousel
	 */
	// Fill all progress bars with animation
	$('.progress-bar').progressbar({
		display_text : 'fill'
	});	

	var now = new Date();
	var day = now.getDate();
	var month = now.getMonth() + 1;
	var year = now.getFullYear() + 1;

	var nextyear = month + '/' + day + '/' + year + ' 07:07:07';
	var nextday = 02 + '/' + 20 + '/' + 2023 + ' 07:07:07';

	$('#example').countdown({
		date: nextday, // TODO Date format: 07/27/2017 17:00:00
		offset: +2, // TODO Your Timezone Offset
		day: 'Day',
		days: 'Days',
		hideOnComplete: true
	}, function (container) {
		alert('Done!');
	});	
})
</script>
<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>
