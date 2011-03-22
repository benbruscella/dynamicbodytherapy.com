<?php

// THIS IS THE DIFFERENT FIELDS
$options[] = array(	"name" => "General Settings",
					"type" => "heading");
						
$options[] = array(	"name" => "Theme Stylesheet",
					"desc" => "Please select your colour scheme here.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array(	"name" => "Use Gravatars?",
					"desc" => "Check this box if you wish to use <a href='http://www.gravatar.com'>Gravatars</a> for Author & Commenter profiles.",
					"id" => $shortname."_gravatar",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Custom Logo",
					"desc" => "Paste the full URL of your custom logo image, should you wish to replace our default logo.",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "text");					 							    

$options[] = array(	"name" => "Google Analytics",
					"desc" => "Please paste your Google Analytics (or other) tracking code here.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");		

$options[] = array(	"name" => "Feedburner RSS URL",
					"desc" => "Enter your Feedburner URL here.",
					"id" => $shortname."_feedburner_url",
					"std" => "",
					"type" => "text");	

$options[] = array(	"name" => "Front page layout",
					"type" => "heading");					

$options[] = array(	"name" => "Show categories in Menu",
					"desc" => "Check this to display categories instead of pages in your top navigation.",
					"id" => $shortname."_catmenu",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Exclude pages from menu",
					"desc" => "Enter a comma-separated list of the <a href'http://faq.wordpress.com/2008/05/29/how-to-find-page-id-numbers/'>page ID's</a> that you'd like to exclude from the main top navigation. (ie. 1,2,3,4)",
					"id" => $shortname."_menupages",
					"std" => "",
					"type" => "text");

$options[] = array(	"name" => "Intro text",
					"desc" => "Enter your intro text for use on the front page. HTML is allowed.",
					"id" => $shortname."_intro",
					"std" => "",
					"type" => "textarea");		

$options[] = array(	"name" => "Featured Slider Pages",
					"desc" => "Enter a comma-separated list of the <a href'http://faq.wordpress.com/2008/05/29/how-to-find-page-id-numbers/'>page ID's</a> that you'd like to display in the featured slider. (ie. 1,2,3,4)",
					"id" => $shortname."_featpages",
					"std" => "",
					"type" => "text");

$options[] = array(	"name" => "Exclude From Navigation",
					"desc" => "Check this box if you wish to exclude the slider pages from the main navigation.",
					"id" => $shortname."_ex_featpages",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Featured Slider Height",
					"desc" => "Enter the height of the featured slider (ie. 500). Default is 300.",
					"id" => $shortname."_featheight",
					"std" => "",
					"type" => "text");

$options[] = array(	"name" => "Enable Image Resizer?",
					"desc" => "Check this box if you wish to use the thumb.php image resizer on your featured slider. <br />Instructions for adding images to pages are found in the <a href='http://www.woothemes.com/support/theme-documentation/over-easy/'>Theme Documentation.</a> Please read <a href='http://www.woothemes.com/2008/10/troubleshooting-image-resizer-thumbphp/'>Troubleshooting Image Resizer</a> if your images do not resize properly.",
					"id" => $shortname."_resize",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Blog Settings",
					"type" => "heading");		

$options[] = array(	"name" => "Add Blog Link to Main Navigation?",
					"desc" => "If checked, this option will add a blog link to your main navigation next to the Home link.",
					"id" => $shortname."_addblog",
					"std" => "false",
					"type" => "checkbox");																									

$options[] = array( "name" => "Blog Permalink",
					"desc" => "Please enter the permalink to your blog parent category (i.e. /category/blog/). If you are not using <a href='http://codex.wordpress.org/Using_Permalinks'>Pretty Permalinks</a> then you can use (/?cat=X) where X is your blog category ID.",
					"id" => $shortname."_blogcat",
					"std" => "",
					"type" => "text");

$options[] = array(	"name" => "Show full post?",
					"desc" => "Check this to display the full post eg. use the_content() instead of the_excerpt().",
					"id" => $shortname."_the_content",
					"std" => "true",
					"type" => "checkbox");	
				
$options[] = array(	"name" => "Banner Ad Management (125x125)",
					"type" => "heading");

$options[] = array(	"name" => "Rotate banners?",
					"desc" => "Check this to randomly rotate the banner ads.",
					"id" => $shortname."_ads_rotate",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Banner Ad #1 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_1",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-1.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #1 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_1",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Banner Ad #2 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_2",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-2.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #2 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_2",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #3 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_3",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-3.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #3 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_3",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #4 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_4",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-4.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #4 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_4",
					"std" => "http://www.woothemes.com",
					"type" => "text");

?>