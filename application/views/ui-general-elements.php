<?php
//initilize the page
require_once("inc/init.php");
//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");
/*---------------- PHP Custom Scripts ---------
YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */
$page_title = "General Elements";
/* ---------------- END PHP Custom Scripts ------------- */
//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");
//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["ui_elements"]["sub"]["general"]["active"] = true;
include("inc/nav.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs[$page_nav["ui_elements"]["title"]] = "";
		include("inc/ribbon.php");
	?>
	<!-- MAIN CONTENT -->
	<div id="content">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<?php
				echo '<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-'.$IconMain.'"></i>'.$page_title_main.'<span> <i class="fa-fw fa fa-angle-double-right"></i>'.$page_title.'</span></h1>';
				?>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				<ul id="sparks" class="">
					<li class="sparks-info">
						<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
						<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
							1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
						<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
						<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- widget grid -->
		<section id="widget-grid" class="">
			<!-- row -->
			<div class="row">
				<!-- NEW WIDGET START -->
				<article class="col-sm-12">
					<div class="alert alert-warning fade in">
						<button class="close" data-dismiss="alert">
							×
						</button>
						<i class="fa-fw fa fa-warning"></i>
						<strong>Warning</strong> Your monthly traffic is reaching limit.
					</div>
					<div class="alert alert-success fade in">
						<button class="close" data-dismiss="alert">
							×
						</button>
						<i class="fa-fw fa fa-check"></i>
						<strong>Success</strong> The page has been added.
					</div>
					<div class="alert alert-info fade in">
						<button class="close" data-dismiss="alert">
							×
						</button>
						<i class="fa-fw fa fa-info"></i>
						<strong>Info!</strong> You have 198 unread messages.
					</div>
					<div class="alert alert-danger fade in">
						<button class="close" data-dismiss="alert">
							×
						</button>
						<i class="fa-fw fa fa-times"></i>
						<strong>Error!</strong> The daily cronjob has failed.
					</div>
				</article>
				<!-- WIDGET END -->
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row">
				<!-- NEW WIDGET START -->
				<article class="col-sm-12">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-x" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-align-justify"></i> </span>
							<h2>Standard Progress Bars </h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<p class="alert alert-info no-margin">
									All progress bars contain a base class of
									<code>
										.progress
									</code>
									. Control the size of the progress bar with
									<code>
										.progress-xs
									</code>
									,
									<code>
										.progress-sm
									</code>
									,
									<code>
										.progress-lg
									</code>
									or leave as is for the default size.
								</p>
								<div class="row">
									<div class="col-sm-12">
										<h3>Transitional Progress Bars</h3>
										<p>
											<span class="label bg-color-darken txt-color-white">JS required</span> This nifty animated progress bars run on CSS combined with javascript
										</p>
										<p>
											You will simply need to add in the value
											<code>
												data-transitiongoal="25"
											</code>
											after the <strong>.progress-bar</strong> class
										</p>
										<div class="row">
											<div class="col-sm-6">
												<p>
													For right alignment add class
													<code>
														.progress .right
													</code>
												</p>
												<div class="well no-padding">
													<div class="bar-holder">
														<div class="progress right" rel="tooltip" data-original-title="25%" data-placement="top">
															<div class="progress-bar bg-color-teal" data-transitiongoal="25"></div>
														</div>
													</div>
													<div class="bar-holder">
														<div class="progress right">
															<div class="progress-bar bg-color-blueLight" data-transitiongoal="50"></div>
														</div>
													</div>
													<div class="bar-holder">
														<div class="progress right">
															<div class="progress-bar bg-color-blue" data-transitiongoal="75"></div>
														</div>
													</div>
													<div class="bar-holder">
														<div class="progress right">
															<div class="progress-bar bg-color-redLight" data-transitiongoal="100"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<p>
													The default is left aligned.
												</p>
												<div class="well no-padding">
													<div class="bar-holder">
														<div class="progress">
															<div class="progress-bar bg-color-teal" data-transitiongoal="25"></div>
														</div>
													</div>
													<div class="bar-holder">
														<div class="progress">
															<div class="progress-bar bg-color-blueLight" data-transitiongoal="50"></div>
														</div>
													</div>
													<div class="bar-holder">
														<div class="progress">
															<div class="progress-bar bg-color-blue" data-transitiongoal="75"></div>
														</div>
													</div>
													<div class="bar-holder">
														<div class="progress">
															<div class="progress-bar bg-color-redLight" data-transitiongoal="100"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr class="simple">
								<div class="row">
									<div class="col-sm-12">
										<h3><small>Transitional Progress Bars continued...</small></h3>
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-3">
												<p>
													Add an overlapping div to progress-bar with the base css of
													<code>
														.progress .vertical
													</code>
												</p>
												<div class="well no-padding">
													<ul class="vertical-bars">
														<li>
															<div class="progress vertical">
																<div class="progress-bar bg-color-teal" data-transitiongoal="25"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical">
																<div class="progress-bar bg-color-blueLight" data-transitiongoal="50"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical">
																<div class="progress-bar bg-color-blue" data-transitiongoal="75"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical">
																<div class="progress-bar bg-color-redLight" data-transitiongoal="100"></div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3">
												<p>
													Add an overlapping div to progress-bar with the base css of
													<code>
														.progress .vertical .bottom
													</code>
												</p>
												<div class="well no-padding">
													<ul class="vertical-bars">
														<li>
															<div class="progress vertical bottom">
																<div class="progress-bar bg-color-teal" data-transitiongoal="25"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical bottom">
																<div class="progress-bar bg-color-blueLight" data-transitiongoal="50"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical bottom">
																<div class="progress-bar bg-color-blue" data-transitiongoal="75"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical bottom">
																<div class="progress-bar bg-color-redLight" data-transitiongoal="100"></div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3">
												<p>
													Add an overlapping div to progress-bar with the base css of
													<code>
														.progress .vertical .wide-bar
													</code>
												</p>
												<div class="well no-padding">
													<ul class="vertical-bars">
														<li>
															<div class="progress vertical wide-bar">
																<div class="progress-bar bg-color-teal" data-transitiongoal="25"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical wide-bar">
																<div class="progress-bar bg-color-blueLight" data-transitiongoal="50"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical wide-bar">
																<div class="progress-bar bg-color-blue" data-transitiongoal="75"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical wide-bar">
																<div class="progress-bar bg-color-redLight" data-transitiongoal="100"></div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3">
												<p>
													Add an overlapping div to progress-bar with the base css of
													<code>
														.bottom .wide-bar
													</code>
												</p>
												<div class="well no-padding">
													<ul class="vertical-bars">
														<li>
															<div class="progress vertical bottom wide-bar">
																<div class="progress-bar bg-color-teal" data-transitiongoal="25"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical bottom wide-bar">
																<div class="progress-bar bg-color-blueLight" data-transitiongoal="50"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical bottom wide-bar">
																<div class="progress-bar bg-color-blue" data-transitiongoal="75"></div>
															</div>
														</li>
														<li>
															<div class="progress vertical bottom wide-bar">
																<div class="progress-bar bg-color-redLight" data-transitiongoal="100"></div>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<hr class="simple">
										<h3>Default Progress Bars</h3>
										<p>
											Micro progress bar <code>
												.progress-micro</code>
											with
											<code>
												.progress-bar-primary
											</code>
										</p>
										<div class="progress progress-micro">
											<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 44%;"></div>
										</div>
										<p>
											Extra small progress bar <code>
												.progress-xs</code>
											with
											<code>
												.bg-color-blue
											</code>
											<span class="txt-color-blue pull-right"><i class="fa fa-lg fa-check"></i></span>
										</p>
										<div class="progress progress-xs">
											<div class="progress-bar bg-color-blue" role="progressbar" style="width: 60%;"></div>
										</div>
										<p>
											Small progress bar <code>
												.progress-sm</code>
											with
											<code>
												.bg-color-greenLight
											</code>
											<span class="txt-color-green pull-right"><i class="fa fa-save"></i></span>
										</p>
										<div class="progress progress-sm">
											<div class="progress-bar bg-color-greenLight" role="progressbar" style="width: 40%"></div>
										</div>
										<p>
											Default progress bar with
											<code>
												.bg-color-redLight
											</code>
											<span class="txt-color-red pull-right"><i class="fa fa-lg fa-times"></i></span>
										</p>
										<div class="progress">
											<div class="progress-bar bg-color-redLight" role="progressbar" style="width: 60%"></div>
										</div>
										<p>
											Large progress bars <code>
												.progress-lg</code>
											with
											<code>
												.bg-color-blueLight
											</code>
											<span class="txt-color-blueLight pull-right"><i class="fa fa-2x fa-check"></i></span>
										</p>
										<div class="progress progress-lg">
											<div class="progress-bar bg-color-blueLight" role="progressbar" style="width: 80%"></div>
										</div>
										<hr class="simple">
										<h3>Stripped Progress Bars</h3>
										<p>
											Sriped Progress bars made with CSS3 gradients, by adding the
											<code>
												.progress-striped
											</code> class to the base class
										</p>
										<p>
											<span class="label label-info">Info!</span> Please be aware that this will not work in archaic browsers such as IE9 <span class="txt-color-purple pull-right"><i class="fa fa-warning"></i> 80% Complete</span>
										</p>
										<div class="progress">
											<div class="progress progress-striped">
												<div class="progress-bar bg-color-purple" role="progressbar" style="width: 77%"></div>
											</div>
										</div>
										<p>
											Activate and animate a progress bar by adding the class
											<code>
												.progress-striped .active
											</code>
										</p>
										<p>
											Dark progress bar with class
											<code>
												.bg-color-darken
											</code>
											<span class="txt-color-orange pull-right"><i class="fa fa-lg fa-times"></i></span>
										</p>
										<div class="progress progress-sm progress-striped active">
											<div class="progress-bar bg-color-darken"  role="progressbar" style="width: 45%"></div>
										</div>
										<hr class="simple">
										<h3>Stacking Progress Bars</h3>
										<p>
											Stack one progressbar on top of another by including all in one
											<code>
												div.progress
											</code>
											<span class="sparkline inline-block pull-right" data-sparkline-type='pie' data-sparkline-piecolor='["#71843F", "#C79121", "#A90329", "#ccc"]' data-sparkline-offset="90" data-sparkline-piesize="23px"> 35,20,10,35 </span>
										</p>
										<div class="progress progress-sm">
											<div class="progress-bar bg-color-greenLight" style="width: 35%"></div>
											<div class="progress-bar bg-color-yellow" style="width: 20%"></div>
											<div class="progress-bar bg-color-redLight" style="width: 10%"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- end widget body-->
						</div>
						<!-- end widget content -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row">
				<h2 class="row-seperator-header"><i class="fa fa-plus"></i> Customized Tabs </h2>
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget well" id="wid-id-3" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
							<h2>Default Tabs with border </h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<p>
									Tabs inside
									<code>
										.jarviswidget .well
									</code>
									(Bordered Tabs)
								</p>
								<hr class="simple">
								<ul id="myTab1" class="nav nav-tabs bordered">
									<li class="active">
										<a href="#s1" data-toggle="tab">Left Tab <span class="badge bg-color-blue txt-color-white">12</span></a>
									</li>
									<li>
										<a href="#s2" data-toggle="tab"><i class="fa fa-fw fa-lg fa-gear"></i> Tab Item 2</a>
									</li>
									<li class="dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#s3" data-toggle="tab">@fat</a>
											</li>
											<li>
												<a href="#s4" data-toggle="tab">@mdo</a>
											</li>
										</ul>
									</li>
									<li class="pull-right">
										<a href="javascript:void(0);">
										<div class="sparkline txt-color-pinkDark text-align-right" data-sparkline-height="18px" data-sparkline-width="90px" data-sparkline-barwidth="7">
											5,10,6,7,4,3
										</div> </a>
									</li>
								</ul>
								<div id="myTabContent1" class="tab-content padding-10">
									<div class="tab-pane fade in active" id="s1">
										<p>
											I have six locks on my door all in a row. When I go out, I lock every other one. I figure no matter how long somebody stands there picking the locks, they are always locking three.
										</p>
									</div>
									<div class="tab-pane fade" id="s2">
										<p>
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
										</p>
									</div>
									<div class="tab-pane fade" id="s3">
										<p>
											Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
										</p>
									</div>
									<div class="tab-pane fade" id="s4">
										<p>
											Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
										</p>
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-5" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<h2>Tabs left </h2>
							<div class="widget-toolbar hidden-phone">
								<div class="smart-form">
									<label class="toggle">
										<input type="checkbox" id="demo-switch-to-pills" name="checkbox-toggle">
										<i data-swchon-text="TRUE" data-swchoff-text="FALSE"></i>Switch Navs / Pills</label>
								</div>
							</div>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="tabs-left">
									<ul class="nav nav-tabs tabs-left" id="demo-pill-nav">
										<li class="active">
											<a href="#tab-r1" data-toggle="tab"><span class="badge bg-color-blue txt-color-white">12</span> Item 1 </a>
										</li>
										<li>
											<a href="#tab-r2" data-toggle="tab"><span class="badge bg-color-blueDark txt-color-white">3</span> Item 2</a>
										</li>
										<li>
											<a href="#tab-r3" data-toggle="tab"><span class="badge bg-color-greenLight txt-color-white">0</span> Item 3</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab-r1">
											<p>
												Dear Math, please grow up and solve your own problems, I'm tired of solving them for you.
											</p>
											<p>
												They say that love is more important than money, but have you ever tried to pay your bills with a hug?
											</p>
										</div>
										<div class="tab-pane" id="tab-r2">
											<p>
												Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
											</p>
										</div>
										<div class="tab-pane" id="tab-r3">
											<p>
												Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-7" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<ul class="nav nav-tabs pull-left in">
								<li class="active">
									<a data-toggle="tab" href="#hr1"> <i class="fa fa-lg fa-arrow-circle-o-down"></i> <span class="hidden-mobile hidden-tablet"> Bottom Tabs </span> </a>
								</li>
								<li>
									<a data-toggle="tab" href="#hr2"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Top Tabs <span class="label bg-color-blue txt-color-white"> label <i class="fa fa-exclamation"></i> </span> </span> </a>
								</li>
							</ul>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="tab-content">
									<div class="tab-pane active" id="hr1">
										<div class="tabbable tabs-below">
											<div class="tab-content padding-10">
												<div class="tab-pane active" id="AA">
													<p>
														The broccoli says 'I look like a small tree', the mushroom says 'I look like an umbrella', the walnut says 'I look like a brain', and the banana says 'Can we please change the subject?'
													</p>
												</div>
												<div class="tab-pane" id="BB">
													<p>
														Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
													</p>
												</div>
												<div class="tab-pane" id="CC">
													<p>
														Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
													</p>
												</div>
											</div>
											<ul class="nav nav-tabs">
												<li class="active">
													<a data-toggle="tab" href="#AA">Tab 1</a>
												</li>
												<li>
													<a data-toggle="tab" href="#BB">Tab 2</a>
												</li>
												<li>
													<a data-toggle="tab" href="#CC">Tab 3</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="tab-pane" id="hr2">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#iss1" data-toggle="tab">Item 1</a>
											</li>
											<li>
												<a href="#iss2" data-toggle="tab">Item 2</a>
											</li>
											<li>
												<a href="#iss3" data-toggle="tab">Item 3</a>
											</li>
										</ul>
										<div class="tab-content padding-10">
											<div class="tab-pane active" id="iss1">
												<p>
													Three monkeys escaped from the zoo, one was caught watching TV, the other playing hockey, and the third one was caught reading this quote!
												</p>
											</div>
											<div class="tab-pane fade" id="iss2">
												<p>
													Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
												</p>
											</div>
											<div class="tab-pane fade" id="iss3">
												<p>
													Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget well" id="wid-id-4" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
							<h2>My Data </h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<p>
									Tabs inside well and pulled right
									<code>
										.tabs-pull-right
									</code>
									(Bordered Tabs)
								</p>
								<hr class="simple">
								<ul id="myTab3" class="nav nav-tabs tabs-pull-right bordered">
									<li class="active">
										<a href="#l1" data-toggle="tab">Tab Item 1 <span class="badge bg-color-pinkDark txt-color-white">99</span></a>
									</li>
									<li class="pull-right">
										<a href="#l2" data-toggle="tab">Tab Item 2</a>
									</li>
									<li class="dropdown pull-left">
										<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lg fa-gear"></i> <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#l3" data-toggle="tab">@fat</a>
											</li>
											<li>
												<a href="#l4" data-toggle="tab">@mdo</a>
											</li>
										</ul>
									</li>
								</ul>
								<div id="myTabContent3" class="tab-content padding-10">
									<div class="tab-pane fade in active" id="l1">
										<p>
											My therapist told me the way to achieve true inner peace is to finish what I start. So far I’ve finished two bags of M&Ms and a chocolate cake. I feel better already.
										</p>
									</div>
									<div class="tab-pane fade" id="l2">
										<p>
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
										</p>
									</div>
									<div class="tab-pane fade" id="l3">
										<p>
											Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
										</p>
									</div>
									<div class="tab-pane fade" id="l4">
										<p>
											Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
										</p>
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-6" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<h2>Tabs right </h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="tabs-right">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab1" data-toggle="tab">Item 1 <span class="badge bg-color-blue txt-color-white">12</span></a>
										</li>
										<li>
											<a href="#tab2" data-toggle="tab">Item 2 <span class="badge bg-color-blueDark txt-color-white">3</span></a>
										</li>
										<li>
											<a href="#tab3" data-toggle="tab">Item 3 <span class="badge bg-color-greenLight txt-color-white">3</span></a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab1">
											<p>
												TEAM WORK: Having somebody else you can blame it on.
												<br>
												HARDWARE: The part of a computer you can kick when there are software problems.
												<br>
												IMPATIENT: Somebody who is waiting in a hurry.
												<br>
											</p>
										</div>
										<div class="tab-pane" id="tab2">
											<p>
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
											</p>
										</div>
										<div class="tab-pane" id="tab3">
											<p>
												Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-8" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<h2>Header Tabs Right</h2>
							<ul class="nav nav-tabs pull-right in">
								<li class="active">
									<a data-toggle="tab" href="#hb1"> <i class="fa fa-lg fa-arrow-circle-o-down"></i> <span class="hidden-mobile hidden-tablet"> Bottom Tabs right </span> </a>
								</li>
								<li>
									<a data-toggle="tab" href="#hb2"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Top Tabs right <span class="label bg-color-blue txt-color-white"> label <i class="fa fa-exclamation"></i> </span> </span> </a>
								</li>
							</ul>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="tab-content">
									<div class="tab-pane active" id="hb1">
										<div class="tabbable tabs-below">
											<div class="tab-content padding-10">
												<div class="tab-pane active" id="A1">
													<p>
														When I stare at the sky, I see you. When I stare out into the ocean, I see you. When I'm looking at the moon, I see you. Geez! Would you move aside, you're constantly getting in my way!
													</p>
												</div>
												<div class="tab-pane" id="B1">
													<p>
														Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
													</p>
												</div>
												<div class="tab-pane" id="C1">
													<p>
														Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
													</p>
												</div>
											</div>
											<ul class="nav nav-tabs">
												<li class="active pull-right">
													<a data-toggle="tab" href="#A1">Tab 1</a>
												</li>
												<li class="pull-right">
													<a data-toggle="tab" href="#B1">Tab 2</a>
												</li>
												<li class="pull-right">
													<a data-toggle="tab" href="#C1">Tab 3</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="tab-pane" id="hb2">
										<ul id="internal-tab-1" class="nav nav-tabs tabs-pull-right">
											<li class="active">
												<a href="#is1" data-toggle="tab">Item 1</a>
											</li>
											<li>
												<a href="#is2" data-toggle="tab">Item 2</a>
											</li>
											<li>
												<a href="#is3" data-toggle="tab">Item 3</a>
											</li>
										</ul>
										<div class="tab-content padding-10">
											<div class="tab-pane active" id="is1">
												<p>
													I love everyone! I love to be around some people, I love to stay away from others, and some I'd just love to punch right in the face!
												</p>
											</div>
											<div class="tab-pane fade" id="is2">
												<p>
													Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
												</p>
											</div>
											<div class="tab-pane fade" id="is3">
												<p>
													Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
			</div>
			<!-- end row -->
			<!-- start row -->
			<div class="row">
				<h2 class="row-seperator-header"><i class="fa fa-th-list"></i> Accordions </h2>
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget well transparent" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
							<h2>Accordions </h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="panel-group smart-accordion-default" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i> Collapsible Group Item #1 </a></h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body no-padding">
												<table class="table table-bordered table-condensed">
													<thead>
														<tr>
															<th>Column name</th>
															<th>Column name</th>
															<th>Column name</th>
															<th>Column name</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i> Collapsible Group Item #2 </a></h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i> Collapsible Group Item #3 </a></h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-10" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-list-alt"></i> </span>
							<h2>Inside a widget </h2>
							<div class="widget-toolbar hidden-phone">
								<div class="smart-form">
									<label class="checkbox">
										<input type="checkbox" name="checkbox">
										<i></i>Add Padding</label>
								</div>
							</div>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body no-padding">
								<div class="panel-group smart-accordion-default" id="accordion-2">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Collapsible Group Item #1 </a></h4>
										</div>
										<div id="collapseOne-1" class="panel-collapse collapse in">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Collapsible Group Item #2 </a></h4>
										</div>
										<div id="collapseTwo-1" class="panel-collapse collapse">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Collapsible Group Item #3 </a></h4>
										</div>
										<div id="collapseThree-1" class="panel-collapse collapse">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
			</div>
			<!-- end row -->
			<!-- start row -->
			<div class="row">
				<h2 class="row-seperator-header"><i class="fa fa-reorder"></i> Default Nav Bars </h2>
				<article class="col-sm-12">
					<div class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#">Brand</a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="#">Link</a>
									</li>
									<li>
										<a href="#">Link</a>
									</li>
									<li class="dropdown dropdown-large">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Large Dropdown <b class="caret"></b></a>
										<ul class="dropdown-menu dropdown-menu-large row">
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">
														Glyphicons
													</li>
													<li>
														<a href="javascript:void(0);">Available glyphs</a>
													</li>
													<li class="disabled">
														<a href="javascript:void(0);">How to use</a>
													</li>
													<li>
														<a href="javascript:void(0);">Examples</a>
													</li>
													<li class="divider"></li>
													<li class="dropdown-header">
														Dropdowns
													</li>
													<li>
														<a href="javascript:void(0);">Example</a>
													</li>
													<li>
														<a href="javascript:void(0);">Aligninment options</a>
													</li>
													<li>
														<a href="javascript:void(0);">Headers</a>
													</li>
													<li>
														<a href="javascript:void(0);">Disabled menu items</a>
													</li>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">
														Button groups
													</li>
													<li>
														<a href="javascript:void(0);">Basic example</a>
													</li>
													<li>
														<a href="javascript:void(0);">Button toolbar</a>
													</li>
													<li>
														<a href="javascript:void(0);">Sizing</a>
													</li>
													<li>
														<a href="javascript:void(0);">Nesting</a>
													</li>
													<li>
														<a href="javascript:void(0);">Vertical variation</a>
													</li>
													<li class="divider"></li>
													<li class="dropdown-header">
														Button dropdowns
													</li>
													<li>
														<a href="javascript:void(0);">Single button dropdowns</a>
													</li>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">
														Input groups
													</li>
													<li>
														<a href="javascript:void(0);">Basic example</a>
													</li>
													<li>
														<a href="javascript:void(0);">Sizing</a>
													</li>
													<li>
														<a href="javascript:void(0);">Checkboxes and radio addons</a>
													</li>
													<li class="divider"></li>
													<li class="dropdown-header">
														Navs
													</li>
													<li>
														<a href="javascript:void(0);">Tabs</a>
													</li>
													<li>
														<a href="javascript:void(0);">Pills</a>
													</li>
													<li>
														<a href="javascript:void(0);">Justified</a>
													</li>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">
														Navbar
													</li>
													<li>
														<a href="javascript:void(0);">Default navbar</a>
													</li>
													<li>
														<a href="javascript:void(0);">Buttons</a>
													</li>
													<li>
														<a href="javascript:void(0);">Text</a>
													</li>
													<li>
														<a href="javascript:void(0);">Non-nav links</a>
													</li>
													<li>
														<a href="javascript:void(0);">Component alignment</a>
													</li>
													<li>
														<a href="javascript:void(0);">Fixed to top</a>
													</li>
													<li>
														<a href="javascript:void(0);">Fixed to bottom</a>
													</li>
													<li>
														<a href="javascript:void(0);">Static top</a>
													</li>
													<li>
														<a href="javascript:void(0);">Inverted navbar</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
								<form class="navbar-form navbar-left" role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search">
									</div>
									<button type="submit" class="btn btn-default">
										Submit
									</button>
								</form>
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="#">Link</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">Action</a>
											</li>
											<li>
												<a href="#">Another action</a>
											</li>
											<li>
												<a href="#">Something else here</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">Separated link</a>
											</li>
										</ul>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
					</div>
					<div class="navbar navbar-inverse">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Brand</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="javascript:void(0);">Link</a>
									</li>
									<li>
										<a href="javascript:void(0);">Link</a>
									</li>
								</ul>
								<form class="navbar-form navbar-right" role="search">
									<div class="form-group">
										<input class="form-control" placeholder="Search" type="text">
									</div>
									<button class="btn btn-primary" type="submit">
										Submit
									</button>
								</form>
						</div><!-- /.navbar-collapse -->
					</div>
				</article>
			</div>
			<!-- end row -->
			<!-- start row -->
			<div class="row">
				<br>
				<br>
				<h2 class="row-seperator-header"><i class="fa fa-tag"></i> Labels and Badges </h2>
				<div class="col-sm-12">
					<!-- well -->
					<div class="well">
						<!-- row -->
						<div class="row">
							<!-- col -->
							<div class="col-sm-12">
								<p class="alert alert-info">
									<i class="fa fa-info"></i> Did you know you can add more than just the basic colors to customize your badge? <strong>Learn more about color options modifiers on the <a href="<?php echo APP_URL; ?>/typography.php">Typography page</a>! </strong>
								</p>
								<!-- row -->
								<div class="row">
									<div class="col-md-6">
										<p>
											Add any of the below mentioned modifier classes to change the appearance of a label.
										</p>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th style="width:50%">Classes</th>
													<th style="width:50%">Labels</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
													<code>
														.label-default
													</code></td>
													<td><span class="label label-default">Default</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.label-primary
													</code></td>
													<td><span class="label label-primary">Primary</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.label-success
													</code></td>
													<td><span class="label label-success">Success</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.label-info
													</code></td>
													<td><span class="label label-info">Info</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.label-warning
													</code></td>
													<td><span class="label label-warning">Warning</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.label-danger
													</code></td>
													<td><span class="label label-danger">Danger</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-6">
										<p>
											Add any of the below mentioned modifier classes to change the appearance of a badge.
										</p>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th style="width:50%">Classes</th>
													<th style="width:50%">Badges</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>No modifiers</td>
													<td><span class="badge">42</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.bg-color-darken
													</code></td>
													<td><span class="badge bg-color-darken">1</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.bg-color-greenLight
													</code></td>
													<td><span class="badge bg-color-greenLight">22</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.bg-color-blueLight
													</code></td>
													<td><span class="badge bg-color-blueLight">30</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.bg-color-orange
													</code></td>
													<td><span class="badge bg-color-orange">412</span></td>
												</tr>
												<tr>
													<td>
													<code>
														.bg-color-red
													</code></td>
													<td><span class="badge bg-color-red">999</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- end row -->
							</div>
							<!-- end col -->
						</div>
						<!-- end row -->
					</div>
					<!-- end well -->
				</div>
			</div>
			<!-- end row -->
			<!-- start row -->
			<div class="row">
				<h2 class="row-seperator-header"><i class="fa fa-comments"></i> Block Messages </h2>
				<div class="col-sm-12">
					<div class="alert alert-block alert-warning">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<h4 class="alert-heading">Warning!</h4>
						Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
					</div>
					<div class="alert alert-success alert-block">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<h4 class="alert-heading">Success!</h4>
						Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
					</div>
					<div class="alert alert-info alert-block">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<h4 class="alert-heading">Info!</h4>
						Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
					</div>
					<div class="alert alert-danger alert-block">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<h4 class="alert-heading">Error!</h4>
						Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
						<p class="text-align-left">
							<br>
							<a href="javascript:void(0);" class="btn btn-sm btn-default"><strong>Action Button</strong></a>
						</p>
					</div>
				</div>
			</div>
			<!-- end row-->
			<!-- start row -->
			<div class="row">
				<h2 class="row-seperator-header"><i class="glyphicon glyphicon-picture"></i> Carousel Slide / Fade </h2>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6">
							<!-- well -->
							<div class="well">
								<h3>Carousel <code>
									.slide</code></h3>
								<p>
									Default sliding carousel with base class of <code>
										.carousel .slide</code>
								</p>
								<div id="myCarousel-2" class="carousel slide">
									<ol class="carousel-indicators">
										<li data-target="#myCarousel-2" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel-2" data-slide-to="1" class=""></li>
										<li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
									</ol>
									<div class="carousel-inner">
										<!-- Slide 1 -->
										<div class="item active">
											<img src="<?php echo ASSETS_URL; ?>/img/demo/m3.jpg" alt="">
											<div class="carousel-caption caption-right">
												<h4>Title 1</h4>
												<p>
													Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
												</p>
												<br>
												<a href="javascript:void(0);" class="btn btn-info btn-sm">Read more</a>
											</div>
										</div>
										<!-- Slide 2 -->
										<div class="item">
											<img src="<?php echo ASSETS_URL; ?>/img/demo/m1.jpg" alt="">
											<div class="carousel-caption caption-left">
												<h4>Title 2</h4>
												<p>
													Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
												</p>
												<br>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm">Read more</a>
											</div>
										</div>
										<!-- Slide 3 -->
										<div class="item">
											<img src="<?php echo ASSETS_URL; ?>/img/demo/m2.jpg" alt="">
											<div class="carousel-caption">
												<h4>A very long thumbnail title here to fill the space</h4>
												<br>
											</div>
										</div>
									</div>
									<a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
									<a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
								</div>
							</div>
							<!-- end well-->
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6">
							<!-- well -->
							<div class="well">
								<h3>Carousel <code>
									.fade</code></h3>
								<p>
									To make the carasoul fade, you can use the class <code>
										.carousel .fade</code>
								</p>
								<div id="myCarousel" class="carousel fade">
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1" class=""></li>
										<li data-target="#myCarousel" data-slide-to="2" class=""></li>
									</ol>
									<div class="carousel-inner">
										<!-- Slide 1 -->
										<div class="item active">
											<img src="<?php echo ASSETS_URL; ?>/img/demo/m1.jpg" alt="">
											<div class="carousel-caption caption-right">
												<h4>Title 1</h4>
												<p>
													Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
												</p>
												<br>
												<a href="javascript:void(0);" class="btn btn-info btn-sm">Read more</a>
											</div>
										</div>
										<!-- Slide 2 -->
										<div class="item">
											<img src="<?php echo ASSETS_URL; ?>/img/demo/m2.jpg" alt="">
											<div class="carousel-caption caption-left">
												<h4>Title 2</h4>
												<p>
													Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
												</p>
												<br>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm">Read more</a>
											</div>
										</div>
										<!-- Slide 3 -->
										<div class="item">
											<img src="<?php echo ASSETS_URL; ?>/img/demo/m3.jpg" alt="">
											<div class="carousel-caption">
												<h4>A very long thumbnail title here to fill the space</h4>
												<br>
											</div>
										</div>
									</div>
									<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
								</div>
							</div>
							<!-- end well -->
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
			<!-- start row -->
			<div class="row">
				<h2 class="row-seperator-header"><i class="fa fa-warning"></i> Alerts and Notifications </h2>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6">
							<!-- well -->
							<div class="well">
								<h3>Bootstrap Modal</h3>
								<h5>Static Example</h5>
								<p>
									A rendered modal with header, body, and set of actions in the footer.
								</p>
								<div class="modal-dialog demo-modal">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
												×
											</button>
											<h4 class="modal-title">Modal title</h4>
										</div>
										<div class="modal-body">
											<p>
												One fine body…
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">
												Close
											</button>
											<button type="button" class="btn btn-primary">
												Save changes
											</button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
								<h5>Live Demo</h5>
								<p>
									Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.
								</p>
								<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
									Launch demo modal
								</button>
								<h3 class="hidden-mobile">Options</h3>
								<div class="table-responsive">
									<table class="table table-bordered table-striped hidden-mobile">
										<thead>
											<tr>
												<th>Name</th>
												<th>type</th>
												<th>default</th>
												<th>description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>backdrop</td>
												<td>boolean or the string
												<code>
													'static'
												</code></td>
												<td>true</td>
												<td>Includes a modal-backdrop element. Alternatively, specify
												<code>
													static
												</code> for a backdrop which doesn't close the modal on click.</td>
											</tr>
											<tr>
												<td>keyboard</td>
												<td>boolean</td>
												<td>true</td>
												<td>Closes the modal when escape key is pressed</td>
											</tr>
											<tr>
												<td>show</td>
												<td>boolean</td>
												<td>true</td>
												<td>Shows the modal when initialized.</td>
											</tr>
											<tr>
												<td>remote</td>
												<td>path</td>
												<td>false</td>
												<td>
												<p>
													If a remote URL is provided, content will be loaded via jQuery's
													<code>
														load
													</code>
													method and injected into the root of the modal element. If you're using the data-api, you may alternatively use the
													<code>
														href
													</code>
													attribute to specify the remote source. An example of this is shown below:
												</p></td>
											</tr>
											<tr>
												<td colspan="4">									<pre>
				<code class="html"><span class="nt">&lt;a</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">href=</span><span class="s">"remote.html"</span> <span class="na">data-target=</span><span class="s">"#modal"</span><span class="nt">&gt;</span>
				Click me<span class="nt">&lt;/a&gt;</span></code>
															</pre></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end well-->
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6">
							<!-- well -->
							<div class="well">
								<h3>Smart Notifications <small>with sound</small></h3>
								<h5>Big box <small>(Static Example)</small></h5>
								<p>
									Clutter free dynamic alert box, easy to configure and setup!
								</p>
								<p>
									<span class="label label-info"><i class="fa fa-music"></i> Sound Enabled</span>
								</p>
								<div class="text-center">
									<img src="<?php echo ASSETS_URL; ?>/img/demo/demo-smartbig-alert.png" alt="demo" class="img-responsive">
								</div>
								<h5>Live Demo</h5>
								<p class="note">
									<span class="label bg-color-darken txt-color-white">INFO!</span> Messages are tabbale and does not overpopulate the user screen. Sounds can also be disabled if not needed
								</p>
								<ul class="demo-btns">
									<li>
										<a href="#" id="eg1" class="btn btn-primary"> <i class="fa fa-warning"></i> Example 1 </a>
									</li>
									<li>
										<a href="#" id="eg2" class="btn btn-primary"> <i class="fa fa-bell"></i> Example 2 </a>
									</li>
									<li>
										<a href="#" id="eg3" class="btn btn-primary"> <i class="fa fa-shield"></i> Example 3 </a>
									</li>
									<li>
										<a href="#" id="eg4" class="btn btn-primary"> <i class="fa fa-check"></i> Example 4 </a>
									</li>
								</ul>
								<h5>Small box alert</h5>
								<ul class="demo-btns">
									<li>
										<button type="button" id="eg5" class="btn btn-default">
											With button
										</button>
									</li>
									<li>
										<button type="button" id="eg6" class="btn btn-default">
											With Icon
										</button>
									</li>
								</ul>
								<p class="note">
									Easily customize the alerts to any colors of your choice, and add any icons from the theme library with animation!
								</p>
								<h5><small>Extra Small Box </small></h5>
								<ul class="demo-btns">
									<li>
										<button type="button" id="eg7" class="btn btn-default">
											<i class="fa fa-thumbs-up"></i> Extra Small Alert
										</button>
									</li>
								</ul>
								<p class="note">
									Go even tinier with smaller attention messages!
								</p>
							</div>
							<!-- end well -->
							<!-- well -->
							<div class="well">
								<h3>Smart Alert <small>with sound</small></h3>
								<h5 class="text-success">With Callback and Buttons <small>(Dynamic Example)</small></h5>
								<ul class="demo-btns">
									<li>
										<a href="#" id="smart-mod-eg1" class="btn btn-success"> Callback ()</a>
									</li>
									<li>
										<a href="#" id="smart-mod-eg3" class="btn btn-success"> Many Buttons </a>
									</li>
								</ul>
								<h5 class="text-primary">With Input and Select</h5>
								<ul class="demo-btns">
									<li>
										<a href="#" id="smart-mod-eg2" class="btn btn-primary"> With Input </a>
									</li>
									<li>
										<a href="#" id="smart-mod-eg4" class="btn btn-primary"> With Select </a>
									</li>
								</ul>
								<h5>Log me in example</h5>
								<ul class="demo-btns">
									<li>
										<a href="#" id="smart-mod-eg5" class="btn btn-danger"> Login me in </a>
									</li>
								</ul>
							</div>
							<!-- end well -->
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
			<!-- start row -->
			<div class="row">
				<h2 class="row-seperator-header"><i class="fa fa-question"></i> Tooltips and Popovers </h2>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6">
							<div class="well">
								<h3>Tooltips</h3>
								<p>
									Tip your users with a small tooltip. Nifty helpful information can be disaplayed using this very simple and yet effictive component. Display pure <strong>HTML Content</strong>, <strong> Images</strong> and <strong>Icons</strong>
								</p>
								<br>
								<ul class="demo-btns text-center">
									<li>
										<a href="javascript:void(0);" class="btn btn-default btn-lg" rel="tooltip" data-placement="top" data-original-title="<h1><b>One</b> <em>Really</em> big tip!</h1>" data-html="true">Big Tip</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default btn-lg" rel="tooltip" data-placement="top" data-original-title="<i class='fa fa-check fa-3x text-success'></i> <i class='fa fa-times fa-3x text-danger'></i>" data-html="true">has Icon</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default btn-lg" rel="tooltip" data-placement="top" data-original-title="<img src='<?php echo ASSETS_URL; ?>/img/avatars/sunny.png' alt='me' class='online'>" data-html="true">also Image</a>
									</li>
								</ul>
								<ul class="demo-btns text-center">
									<li>
										<a href="javascript:void(0);" class="btn btn-default" rel="tooltip" data-placement="left" data-original-title="Tooltip Left"><i class="fa fa-arrow-left"></i> Tooltip Left</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default" rel="tooltip" data-placement="top" data-original-title="Tooltip Top"><i class="fa fa-arrow-up"></i> Tooltip Top</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default" rel="tooltip" data-placement="bottom" data-original-title="Tooltip Bottom"><i class="fa fa-arrow-down"></i> Tooltip Bottom</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default" rel="tooltip" data-placement="right" data-original-title="<i class='fa fa-check text-success'></i> Tooltip Right" data-html="true"><i class="fa fa-arrow-right"></i> Tooltip Right</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6">
							<div class="well">
								<h3>Popovers</h3>
								<p>
									Popovers are a cool way to express compressed information to the user, neatly and quickly. You can generate all kinds of content within the popover component. Including <strong>Forms</strong>, <strong>Tabs</strong>, <strong>Images</strong> and even <strong>Google map</strong>!
								</p>
								<br>
								<ul class="demo-btns text-center">
									<li>
										<a href="javascript:void(0);" class="btn btn-default btn-lg" rel="popover-hover" data-placement="top" data-original-title="Popover activated on hover" data-content="Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."><strong>On</strong> <i>Hover</i></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default btn-lg" rel="popover" data-placement="top" data-original-title="<h4>Tabs inside popover</h4>" data-content="<ul id='popup-tab' class='nav nav-tabs bordered'><li class='active'><a href='#pop-1' data-toggle='tab'>Active Tab </a></li><li><a href='#pop-2' data-toggle='tab'>Tab 2</a></li></ul><div id='popup-tab-content' class='tab-content padding-10'><div class='tab-pane fade in active' id='pop-1'><p>I have six locks on my door all in a row. When I go out, I lock every other one. I figure no matter how long somebody stands there picking the locks, they are always locking three.</p></div><div class='tab-pane fade' id='pop-2'><p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. wes anderson artisan four loko farm-to-table craft beer twee.</p></div></div>" data-html="true"><strong>Active</strong> <i>Content</i></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default btn-lg" rel="popover" data-placement="top" data-original-title="<i class='fa fa-fw fa-pencil'></i> Form inside popover" data-content="<form action='' style='min-width:170px'><div class='checkbox'><label><input type='checkbox' class='checkbox style-0' checked='checked'><span>Read</span></label></div><div class='checkbox'><label><input type='checkbox' class='checkbox style-0'><span>Write</span></label></div><div class='checkbox'><label><input type='checkbox' class='checkbox style-0'><span>Execute</span></label></div><div class='form-actions'><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-sm' type='submit'>SAVE</button></div></div></div></form>" data-html="true"><strong>File</strong> <i>Access</i></a>
									</li>
								</ul>
								<ul class="demo-btns text-center">
									<li>
										<a href="javascript:void(0);" class="btn btn-default" rel="popover" data-placement="left" data-original-title="Popover Left" data-content="Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."><i class="fa fa-arrow-left"></i> <strong>Popover</strong> <i>Left</i></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default" rel="popover" data-placement="top" data-original-title="Popover Up" data-content="Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."><i class="fa fa-arrow-up"></i> <strong>Popover</strong> <i>Up</i></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default" rel="popover" data-placement="bottom" data-original-title="Popover Down" data-content="Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."><i class="fa fa-arrow-down"></i> <strong>Popover</strong> <i>Down</i></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-default" rel="popover" data-placement="right" data-original-title="Popover Right" data-content="Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."><i class="fa fa-arrow-right"></i> <strong>Popover</strong> <i>Right</i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
			<!-- start row -->
			<div class="row">
				<h2 class="row-seperator-header"><i class="fa fa-square-o"></i> Containers, Media and Pagination</h2>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="well">
						<h3>Jumbotron <small>Gets your user attention!</small></h3>
						<div class="jumbotron">
							<h1>Hello, world!</h1>
							<p>
								This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
							</p>
							<p>
								<a class="btn btn-primary btn-lg" role="button">Learn more</a>
							</p>
						</div>
						<h3>Wells <small>Notice the well sizes</small></h3>
						<div class="well well-lg">
							Large well
							<br>
							<code>
								.well .well-lg</code>
						</div>
						<div class="well ">
							Default well
							<br>
							<code>
								.well</code>
						</div>
						<div class="well well-sm well-light">
							Small well with light background
							<br>
							<code>
								.well .well-sm .well-light</code>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="well well-sm bg-color-darken txt-color-white text-center">
									<h5>Well with background</h5>
									<code>
										.bg-color-darken</code>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="well well-sm bg-color-teal txt-color-white text-center">
									<h5>Well with background</h5>
									<code>
										.bg-color-teal</code>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="well well-sm bg-color-pinkDark txt-color-white text-center">
									<h5>Well with background</h5>
									<code>
										.bg-color-pinkDark</code>
								</div>
							</div>
						</div>
						<p>
							Learn more about other colors that you can use for .well by going to <a href="<?php echo APP_URL; ?>/typography.php"> typography page</a>
						</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="well">
						<h3>Media</h3>
						<ul class="media-list">
							<li class="media">
								<a class="pull-left" href="javascript:void(0);"> <img class="media-object" alt="64x64" src="<?php echo ASSETS_URL; ?>/img/demo/64x64.png"> </a>
								<div class="media-body">
									<h4 class="media-heading">Media heading</h4>
									<p>
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</p>
									<!-- Nested media object -->
									<div class="media">
										<a class="pull-left" href="javascript:void(0);"> <img class="media-object" alt="64x64" src="<?php echo ASSETS_URL; ?>/img/demo/64x64.png"> </a>
										<div class="media-body">
											<h4 class="media-heading">Nested media heading</h4>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											<!-- Nested media object -->
											<div class="media">
												<a class="pull-left" href="javascript:void(0);"> <img class="media-object" alt="64x64" src="<?php echo ASSETS_URL; ?>/img/demo/64x64.png"> </a>
												<div class="media-body">
													<h4 class="media-heading">Nested media heading</h4>
													Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
												</div>
											</div>
										</div>
									</div>
									<!-- Nested media object -->
									<div class="media">
										<a class="pull-left" href="javascript:void(0);"> <img class="media-object" alt="64x64" src="<?php echo ASSETS_URL; ?>/img/demo/64x64.png"> </a>
										<div class="media-body">
											<h4 class="media-heading">Nested media heading</h4>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
										</div>
									</div>
								</div>
							</li>
							<li class="media">
								<a class="pull-left" href="javascript:void(0);"> <img class="media-object" alt="64x64" src="<?php echo ASSETS_URL; ?>/img/demo/64x64.png"> </a>
								<div class="media-body">
									<h4 class="media-heading">Media heading</h4>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
								</div>
							</li>
						</ul>
					</div>
					<div class="well well-light">
						<h3>Pagination <small>two different styles</small></h3>
						<div class="text-center">
							<ul class="pagination pagination-lg">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-chevron-left"></i></a>
								</li>
								<li class="active">
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li>
									<a href="javascript:void(0);">3</a>
								</li>
								<li>
									<a href="javascript:void(0);">4</a>
								</li>
								<li>
									<a href="javascript:void(0);">5</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-chevron-right"></i></a>
								</li>
							</ul>
							&nbsp; &nbsp;
							<ul class="pagination pagination-alt pagination-lg">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li>
									<a href="javascript:void(0);">3</a>
								</li>
								<li class="active">
									<a href="javascript:void(0);">4</a>
								</li>
								<li>
									<a href="javascript:void(0);">5</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
								</li>
							</ul>
						</div>
						<div class="text-center">
							<ul class="pagination">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-arrow-left"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);">1</a>
								</li>
								<li class="active">
									<a href="javascript:void(0);">2</a>
								</li>
								<li>
									<a href="javascript:void(0);">3</a>
								</li>
								<li>
									<a href="javascript:void(0);">4</a>
								</li>
								<li>
									<a href="javascript:void(0);">5</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-arrow-right"></i></a>
								</li>
							</ul>
							&nbsp; &nbsp;
							<ul class="pagination pagination-alt">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li>
									<a href="javascript:void(0);">3</a>
								</li>
								<li class="active">
									<a href="javascript:void(0);">4</a>
								</li>
								<li>
									<a href="javascript:void(0);">5</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
								</li>
							</ul>
						</div>
						<div class="text-center">
							<ul class="pagination pagination-sm">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li class="active">
									<a href="javascript:void(0);">3</a>
								</li>
								<li>
									<a href="javascript:void(0);">4</a>
								</li>
								<li>
									<a href="javascript:void(0);">5</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
								</li>
							</ul>
							&nbsp; &nbsp;
							<ul class="pagination pagination-sm pagination-alt">
								<li>
									<a href="javascript:void(0);">«</a>
								</li>
								<li>
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li class="active">
									<a href="javascript:void(0);">3</a>
								</li>
								<li>
									<a href="javascript:void(0);">4</a>
								</li>
								<li>
									<a href="javascript:void(0);">5</a>
								</li>
								<li>
									<a href="javascript:void(0);">»</a>
								</li>
							</ul>
						</div>
						<div style="width:200px; margin:0 auto">
							<ul class="pager">
								<li class="previous disabled">
									<a href="javascript:void(0);">&larr; Older</a>
								</li>
								<li class="next">
									<a href="javascript:void(0);">Newer &rarr;</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
		</section>
		<!-- end widget grid -->
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">Article Post</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Title" required />
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Content" rows="5" required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="category"> Category</label>
									<select class="form-control" id="category">
										<option>Articles</option>
										<option>Tutorials</option>
										<option>Freebies</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="tags"> Tags</label>
									<input type="text" class="form-control" id="tags" placeholder="Tags" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="well well-sm well-primary">
									<form class="form form-inline " role="form">
										<div class="form-group">
											<input type="text" class="form-control" value="" placeholder="Date" required />
										</div>
										<div class="form-group">
											<select class="form-control">
												<option>Draft</option>
												<option>Published</option>
											</select>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-success btn-sm">
												<span class="glyphicon glyphicon-floppy-disk"></span> Save
											</button>
											<button type="button" class="btn btn-default btn-sm">
												<span class="glyphicon glyphicon-eye-open"></span> Preview
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<button type="button" class="btn btn-primary">
							Post Article
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->
<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->
<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>
<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script type="text/javascript">
// DO NOT REMOVE : GLOBAL FUNCTIONS!
$(document).ready(function() {
	/*
	 * Autostart Carousel
	 */
	$('.carousel.slide').carousel({
		interval : 3000,
		cycle : true
	});
	$('.carousel.fade').carousel({
		interval : 3000,
		cycle : true
	});
	// Fill all progress bars with animation
	$('.progress-bar').progressbar({
		display_text : 'fill'
	});
	/*
	 * Smart Notifications
	 */
	$('#eg1').click(function(e) {
		$.bigBox({
			title : "Big Information box",
			content : "This message will dissapear in 6 seconds!",
			color : "#C46A69",
			//timeout: 6000,
			icon : "fa fa-warning shake animated",
			number : "1",
			timeout : 6000
		});
		e.preventDefault();
	})
	$('#eg2').click(function(e) {
		$.bigBox({
			title : "Big Information box",
			content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
			color : "#3276B1",
			//timeout: 8000,
			icon : "fa fa-bell swing animated",
			number : "2"
		});
		e.preventDefault();
	})
	$('#eg3').click(function(e) {
		$.bigBox({
			title : "Shield is up and running!",
			content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
			color : "#C79121",
			//timeout: 8000,
			icon : "fa fa-shield fadeInLeft animated",
			number : "3"
		});
		e.preventDefault();
	})
	$('#eg4').click(function(e) {
		$.bigBox({
			title : "Success Message Example",
			content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
			color : "#739E73",
			//timeout: 8000,
			icon : "fa fa-check",
			number : "4"
		}, function() {
			closedthis();
		});
		e.preventDefault();
	})
	$('#eg5').click(function() {
		$.smallBox({
			title : "Ding Dong!",
			content : "Someone's at the door...shall one get it sir? <p class='text-align-right'><a href='javascript:void(0);' class='btn btn-primary btn-sm'>Yes</a> <a href='javascript:void(0);' class='btn btn-danger btn-sm'>No</a></p>",
			color : "#296191",
			//timeout: 8000,
			icon : "fa fa-bell swing animated"
		});
	});
	$('#eg6').click(function() {
		$.smallBox({
			title : "Big Information box",
			content : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
			color : "#5384AF",
			//timeout: 8000,
			icon : "fa fa-bell"
		});
	})
	$('#eg7').click(function() {
		$.smallBox({
			title : "James Simmons liked your comment",
			content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
			color : "#296191",
			iconSmall : "fa fa-thumbs-up bounce animated",
			timeout : 4000
		});
	})
	function closedthis() {
		$.smallBox({
			title : "Great! You just closed that last alert!",
			content : "This message will be gone in 5 seconds!",
			color : "#739E73",
			iconSmall : "fa fa-cloud",
			timeout : 5000
		});
	}
	/*
	* SmartAlerts
	*/
	// With Callback
	$("#smart-mod-eg1").click(function(e) {
		$.SmartMessageBox({
			title : "Smart Alert!",
			content : "This is a confirmation box. Can be programmed for button callback",
			buttons : '[No][Yes]'
		}, function(ButtonPressed) {
			if (ButtonPressed === "Yes") {
				$.smallBox({
					title : "Callback function",
					content : "<i class='fa fa-clock-o'></i> <i>You pressed Yes...</i>",
					color : "#659265",
					iconSmall : "fa fa-check fa-2x fadeInRight animated",
					timeout : 4000
				});
			}
			if (ButtonPressed === "No") {
				$.smallBox({
					title : "Callback function",
					content : "<i class='fa fa-clock-o'></i> <i>You pressed No...</i>",
					color : "#C46A69",
					iconSmall : "fa fa-times fa-2x fadeInRight animated",
					timeout : 4000
				});
			}
		});
		e.preventDefault();
	})
	// With Input
	$("#smart-mod-eg2").click(function(e) {
		$.SmartMessageBox({
			title : "Smart Alert: Input",
			content : "Please enter your user name",
			buttons : "[Accept]",
			input : "text",
			placeholder : "Enter your user name"
		}, function(ButtonPress, Value) {
			alert(ButtonPress + " " + Value);
		});
		e.preventDefault();
	})
	// With Buttons
	$("#smart-mod-eg3").click(function(e) {
		$.SmartMessageBox({
			title : "Smart Notification: Buttons",
			content : "Lots of buttons to go...",
			buttons : '[Need?][You][Do][Buttons][Many][How]'
		});
		e.preventDefault();
	})
	// With Select
	$("#smart-mod-eg4").click(function(e) {
		$.SmartMessageBox({
			title : "Smart Alert: Select",
			content : "You can even create a group of options.",
			buttons : "[Done]",
			input : "select",
			options : "[Costa Rica][United States][Autralia][Spain]"
		}, function(ButtonPress, Value) {
			alert(ButtonPress + " " + Value);
		});
		e.preventDefault();
	});
	// With Login
	$("#smart-mod-eg5").click(function(e) {
		$.SmartMessageBox({
			title : "Login form",
			content : "Please enter your user name",
			buttons : "[Cancel][Accept]",
			input : "text",
			placeholder : "Enter your user name"
		}, function(ButtonPress, Value) {
			if (ButtonPress == "Cancel") {
				alert("Why did you cancel that? :(");
				return 0;
			}
			Value1 = Value.toUpperCase();
			ValueOriginal = Value;
			$.SmartMessageBox({
				title : "Hey! <strong>" + Value1 + ",</strong>",
				content : "And now please provide your password:",
				buttons : "[Login]",
				input : "password",
				placeholder : "Password"
			}, function(ButtonPress, Value) {
				alert("Username: " + ValueOriginal + " and your password is: " + Value);
			});
		});
		e.preventDefault();
	});			
})
</script>
<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>
