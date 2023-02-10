<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Beranda" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"home" => array(
		"title" => "Beranda",
		"icon" => "fa-home",
		"url" => APP_URL
	),	
	"dashboard" => array(
		"title" => "Dashboard",
		"icon" => "fa-home",
		"sub" => array(
			"analytics" => array(
				"title" => "Analytics Dashboard",
				"url" => APP_URL."/dashboard/dashboard_analytics"
			),
			"marketing" => array(
				"title" => "Marketing Dashboard",
				"url" => APP_URL."/dashboard/dashboard_marketing"
			),
			"social" => array(
				"title" => "Social Wall",
				"url" => APP_URL."/dashboard/dashboard_social"
			)
		)
	),
	"smartint" => array(
		"title" => "SmartAdmin Intel",
		"icon" => "fa-cube txt-color-blue",
		"sub" => array(
			"layouts" => array(
				"title" => "App Layouts",
				"icon" => "fa-gear",
				"url" => APP_URL."/smartint/smartint_layouts"
			),
		    "skins" => array(
		        "title" => "Prebuilt Skins",
		        "icon" => "fa-picture-o",
		        "url" => APP_URL."/smartint/smartint_skins"
		    ),			
		    "applayout" => array(
		        "title" => "App Settings",
		        "icon" => "fa-cube",
		        "url" => APP_URL."/smartint/smartint_applayout"
		    ),
		    "difver" => array(
		        "title" => "Different Versions",
		        "icon" => "fa-cube",
		        "url" => APP_URL."/smartint/smartint_difver"
		    )
		)
	),
	"outlook" => array(
		"title" => "Outlook",
		"icon" => "fa-inbox",
		"url" => APP_URL."/inbox/inbox",
		"label_htm" => '<span class="badge pull-right inbox-badge margin-right-13">14</span>'
	),
	"graphs" => array(
		"title" => "Graphs",
		"icon" => "fa-bar-chart-o",
		"sub" => array(
			"flot" => array(
				"title" => "Flot Chart",
				"url" => APP_URL."/graphs/graph_flot"
			),
			"morris" => array(
				"title" => "Morris Charts",
				"url" => APP_URL."/graphs/graph_morris"
			),
			"sparklines" => array(
				"title" => "Sparklines",
				"url" => APP_URL."/graphs/graph_sparkline_charts"
			),
			"easypie" => array(
				"title" => "EasyPieCharts",
				"url" => APP_URL."/graphs/graph_easypie_charts"
			),
			"dygraphs" => array(
				"title" => "Dygraphs",
				"url" => APP_URL."/graphs/graph_dygraphs",
			),
			"chartjs" => array(
				"title" => "Chart.js",
				"url" => APP_URL."/graphs/graph_chartjs"
			),
			"highchart" => array(
				"title" => "HighchartTable",
				"url" => APP_URL."/graphs/graph_hchartable",
				"label_htm" => ' <span class="badge pull-right inbox-badge bg-color-yellow">new</span>'
			)
		)
	),
	"tables" => array(
		"title" => "Tables",
		"icon" => "fa-table",
		"sub" => array(
			"normal" => array(
				"title" => "Normal Tables",
				"url" => APP_URL."/tables/table_normal"
			),
			"data" => array(
				"title" => "Data Tables",
				"url" => APP_URL."/tables/table_datatables",
				"label_htm" => ' <span class="badge inbox-badge bg-color-greenLight">responsive</span>'
			),
			"jqgrid" => array(
				"title" => "Jquery Grid",
				"url" => APP_URL."/tables/table_jqgrid"
			)
		)
	),
	"forms" => array(
		"title" => "Forms",
		"icon" => "fa-pencil-square-o",
		"sub" => array(
			"smart_elements" => array(
				"title" => "Smart Form Elements",
				"url" => APP_URL."/forms/form_elements"
			),
            "smart_layout" => array(
				"title" => "Smart Form Layouts",
				"url" => APP_URL."/forms/form_layout"
			),
            "smart_validation" => array(
				"title" => "Smart Form Validation",
				"url" => APP_URL."/forms/form_validation"
			),
            "bootstrap_forms" => array(
				"title" => "Bootstrap Form Elements",
				"url" => APP_URL."/forms/form_bootstrap_forms"
			),
            "form_plugins" => array(
				"title" => "Form Plugins",
				"url" => APP_URL."/forms/form_plugins"
			),
            "wizards" => array(
				"title" => "Wizards",
				"url" => APP_URL."/forms/form_wizard"
			),
            "bootstrap_editors" => array(
				"title" => "Bootstrap Editors",
				"url" => APP_URL."/forms/form_other_editors"
			),
            "dropzone" => array(
				"title" => "Dropzone",
				"url" => APP_URL."/forms/form_dropzone"
			),
			"imagecrop" => array(
				"title" => "Image Cropping",
				"url" => APP_URL."/forms/form_image_editor"
			),
			"ck_editor" => array(
				"title" => "CK Editor",
				"url" => APP_URL."/forms/form_ckeditor"
			)
		)
	),
    "ui_elements" => array(
        "title" => "UI Elements",
        "icon" => "fa-desktop",
        "sub" => array(
            "general" => array(
                "title" => "General Elements",
                "url" => APP_URL."/elements/ui_general_elements"
            ),
            "buttons" => array(
                "title" => "Buttons",
                "url" => APP_URL."/elements/ui_buttons"
            ),
            "icons" => array(
                "title" => "Icons",
                "sub" => array(
                    "fa" => array(
                        "title" => "Font Awesome",
                        "icon" => "fa-plane",
                        "url" => APP_URL."/elements/ui_icon_fa"
                    ),
                    "glyph" => array(
                        "title" => "Glyph Icons",
                        "icon" => "fa-plane",
                        "url" => APP_URL."/elements/ui_icon_glyph"
                    ),
                    "flags" => array(
                        "title" => "Flags",
                        "icon" => "fa-flag",
                        "url" => APP_URL."/elements/ui_icon_flags"
                    )
                )
            ),
            "grid" => array(
                "title" => "Grid",
                "url" => APP_URL."/elements/ui_grid"
            ),
            "tree_view" => array(
                "title" => "Tree View",
                "url" => APP_URL."/elements/ui_treeview"
            ),
            "nestable_lists" => array(
                "title" => "Nestable Lists",
                "url" => APP_URL."/elements/ui_nestable_list"
            ),
            "jquery_ui" => array(
                "title" => "jQuery UI",
                "url" => APP_URL."/elements/ui_jqui"
            ),
            "typo" => array(
				"title" => "Typography",
				"url" => APP_URL."/elements/ui_typography"
			),
			"nav6" => array(
				"title" => "Six Level Menu",
				"sub" => array(
					"second_lvl" => array(
						"title" => "Item #2",
						"icon" => "fa-folder-open",
						"sub" => array(
							"third_lvl" => array(
								"title" => "Sub #2.1",
								"icon" => "fa-folder-open",
								"sub" => array(
									"file" => array(
										"title" => "Item #2.1.1",
										"icon" => "fa-file-text"
									),
									"fourth_lvl" => array(
										"title" => "Expand",
										"icon" => "fa-plus",
										"sub" => array(
											"file" => array(
												"title" => "File",
												"icon" => "fa-file-text"
											),
											"fifth_lvl" => array(
												"title" => "Delete",
												"icon" => "fa-trash-o"
											)
										)
									)
								)
							)
						)
					),
					"folder" => array(
						"title" => "Item #3",
						"icon" => "fa-folder-open",
						"sub" => array(
							"third_lvl" => array(
								"title" => "Sub #3.1",
								"icon" => "fa-folder-open",
								"sub" => array(
									"file1" => array(
										"title" => "File",
										"icon" => "fa-file-text"
									),
									"file2" => array(
										"title" => "File",
										"icon" => "fa-file-text"
									)
								)
							)
						)
					),
					"disabled" => array(
						"title" => "Item #4 (disabled)",
						"class" => "inactive",
						"icon" => "fa-folder-open"
					)
				)
			),
        )
    ),
    "widgets" => array(
		"title" => "Widgets",
		"url" => APP_URL."/widget/widgets",
		"icon" => "fa-list-alt"
	),
	"cool" => array(
		"title" => "Cool Features!",
		"icon" => "fa-cloud",
		"icon_badge" => "3",
		"sub" => array(
			"cal" => array(
				"title" => "Calendar",
				"url" => APP_URL."/cool/cool_calendar",
				"icon" => "fa-calendar"
			),
			"gmap_skins" => array(
				"title" => "GMap Skins",
				"url" => APP_URL."/cool/cool_gmap_xml",
				"icon" => "fa-map-marker",
		        "label_htm" => '<span class="badge bg-color-greenLight pull-right inbox-badge">9</span>'
			)
		)

	),
	"views" => array(
		"title" => "App Views",
		"icon" => "fa-puzzle-piece",
		"sub" => array(
			"projects" => array(
				"title" => "Projects",
				"icon" => "fa fa-file-text-o",
				"url" => APP_URL."/appviews/views_projects"
			),
			"blog" => array(
				"title" => "Blog",
				"icon" => "fa fa-paragraph",
				"url" => APP_URL."/appviews/views_blog"
			),
			"gallery" => array(
				"title" => "Gallery",
				"icon" => "fa fa-picture-o",
				"url" => APP_URL."/appviews/views_gallery"
			),
			"forum" => array(
				"title" => "Forum Layout",
				"icon" => "fa fa-comments",
				"sub" => array(
					"general" => array(
						"title" => "General View",
						"url" => APP_URL."/appviews/views_forum"
					),
					"topic" => array(
						"title" => "Topic View",
						"url" => APP_URL."/appviews/views_forum_topic"
					),
					"post" => array(
						"title" => "Post View",
						"url" => APP_URL."/appviews/views_forum_post"
					),
				)
			),
			"profile" => array(
				"title" => "Profile",
				"icon" => "fa fa-group",
				"url" => APP_URL."/appviews/views_profile"
			),
			"timeline" => array(
				"title" => "Timeline",
				"icon" => "fa fa-clock-o",
				"url" => APP_URL."/appviews/views_timeline"
			),
			"search" => array(
				"title" => "Search Page",
				"icon" => "fa fa-search",
				"url" => APP_URL."/appviews/views_search"
			),
		)
	),
	"ecommerce" => array(
		"title" => "E-Commerce",
		"icon" => "fa-shopping-cart",
		"sub" => array(
			"orders" => array(
				"title" => "Orders",
				"url" => APP_URL."/ecommerce/ecommerce_orders"
			),
			"prod-view" => array(
				"title" => "Products View",
				"url" => APP_URL."/ecommerce/ecommerce_products_view"
			),
			"prod-detail" => array(
				"title" => "Products Detail",
				"url" => APP_URL."/ecommerce/ecommerce_products_detail"
			)
		)
	),
	"misc" => array(
		"title" => "Miscellaneous",
		"icon" => "fa-windows",
		"sub" => array(
            "pricing_tables" => array(
				"title" => "Pricing Tables",
				"url" => APP_URL."/miscellaneous/misc_pricing_table"
			),
            "invoice" => array(
				"title" => "Invoice",
				"url" => APP_URL."/miscellaneous/misc_invoice"
			),
            "login" => array(
				"title" => "Login",
				"url" => APP_URL."/miscellaneous/misc_login"
			),
            "register" => array(
				"title" => "Register",
				"url" => APP_URL."/miscellaneous/misc_register"
			),
			"forgot" => array(
				"title" => "Forgot Password",
				"url" => APP_URL."/miscellaneous/misc_forgotpassword"
			),
            "lock" => array(
				"title" => "Locked Screen",
				"url" => APP_URL."/miscellaneous/misc_lock"
			),
            "email_template" => array(
				"title" => "Email Template",
				"url" => APP_URL."/miscellaneous/misc_email_template"
			),			
            "err_404" => array(
				"title" => "Error 404",
				"url" => APP_URL."/miscellaneous/misc_error404"
			),
            "err_500" => array(
				"title" => "Error 500",
				"url" => APP_URL."/miscellaneous/misc_error500"
			),
			"blank" => array(
				"title" => "Blank Page",
				"url" => APP_URL."/miscellaneous/misc_blank_"
			)
		)
	),
	"smartchat" => array(
		"title" => "Smart Chat API <sup>beta</sup>",
		"icon" => "fa fa-lg fa-fw fa-comment-o",
		"icon_badge" => array(
			'content' => '!',
			'class' => 'bg-color-pink flash animated'
		),
		"li_class" => array("chat-users", "top-menu-invisible"),
		"sub" => '
			<div class="display-users">
				<input class="form-control chat-user-filter" placeholder="Filter" type="text">
				
			  	<a href="#" class="usr" 
				  	data-chat-id="cha1" 
				  	data-chat-fname="Sadi" 
				  	data-chat-lname="Orlaf" 
				  	data-chat-status="busy" 
				  	data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" 
				  	data-chat-alertshow="true" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/5.png\' alt=\'Sadi Orlaf\'>
							<div class=\'usr-card-content\'>
								<h3>Sadi Orlaf</h3>
								<p>Marketing Executive</p>
							</div>
						</div>
					"> 
				  	<i></i>Sadi Orlaf
			  	</a>
			
				<a href="#" class="usr" 
				  	data-chat-id="cha2" 
				  	data-chat-fname="Jessica" 
				  	data-chat-lname="Dolof" 
				  	data-chat-status="online" 
				  	data-chat-alertmsg="" 
				  	data-chat-alertshow="false" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/1.png\' alt=\'Jessica Dolof\'>
							<div class=\'usr-card-content\'>
								<h3>Jessica Dolof</h3>
								<p>Sales Administrator</p>
							</div>
						</div>
					"> 
				  	<i></i>Jessica Dolof
				</a>
		
				<a href="#" class="usr" 
				  	data-chat-id="cha3" 
				  	data-chat-fname="Zekarburg" 
				  	data-chat-lname="Almandalie" 
				  	data-chat-status="online" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/3.png\' alt=\'Zekarburg Almandalie\'>
							<div class=\'usr-card-content\'>
								<h3>Zekarburg Almandalie</h3>
								<p>Sales Admin</p>
							</div>
						</div>
					"> 
				  	<i></i>Zekarburg Almandalie
				</a>
				
				<a href="#" class="usr" 
				  	data-chat-id="cha4" 
				  	data-chat-fname="Barley" 
				  	data-chat-lname="Krazurkth" 
				  	data-chat-status="away" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/4.png\' alt=\'Barley Krazurkth\'>
							<div class=\'usr-card-content\'>
								<h3>Barley Krazurkth</h3>
								<p>Sales Director</p>
							</div>
						</div>
					"> 
				  	<i></i>Barley Krazurkth
				</a>
			
				<a href="#" class="usr offline" 
				  	data-chat-id="cha5" 
				  	data-chat-fname="Farhana" 
				  	data-chat-lname="Amrin" 
				  	data-chat-status="incognito" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/female.png\' alt=\'Farhana Amrin\'>
							<div class=\'usr-card-content\'>
								<h3>Farhana Amrin</h3>
								<p>Support Admin <small><i class=\'fa fa-music\'></i> Playing Beethoven Classics</small></p>
							</div>
						</div>
					"> 
				  	<i></i>Farhana Amrin (offline)
				</a>
		
				<a href="#" class="usr offline" 
					data-chat-id="cha6" 
				  	data-chat-fname="Lezley" 
				  	data-chat-lname="Jacob" 
				  	data-chat-status="incognito" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/male.png\' alt=\'Lezley Jacob\'>
							<div class=\'usr-card-content\'>
								<h3>Lezley Jacob</h3>
								<p>Sales Director</p>
							</div>
						</div>
					"> 
				  	<i></i>Lezley Jacob (offline)
				</a>

				<a href="'.APP_URL.'/miscellaneous/misc_chat" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>
			</div>'
	)
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>
