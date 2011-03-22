<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title>
<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
</title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
<![endif]-->

<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
   
</head>

<body>
  
<div id="page">

	<div id="header">
    	
        <div id="logo">
            <h1>
            	<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>">
            		<img src="<?php if ( get_option('woo_logo') ) { echo get_option('woo_logo') . '" style="margin-top:0px;"'; } else { bloginfo('template_directory'); ?>/<?php woo_style_path(); ?>/logo-trans.png"<?php } ?> alt="<?php bloginfo('name'); ?>" />
                </a>
            </h1>
        </div>

		<div id="nav1">
			<ul>
                <li <?php if ( is_home() ) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); ?>/"><span>Home</span></a></li>
				<?php if ( get_option('woo_addblog') == "true" ) { ?>
                <li <?php if ( is_category() || is_search() || is_single() || is_tag() || is_search() || is_archive() ) { ?> class="current_page_item" <?php } ?>>
                	<a href="<?php echo get_option('home'); echo get_option('woo_blogcat'); ?>" title="Blog"><span>Blog</span></a>
                    <?php if (get_option('woo_catmenu') == "true") { ?><ul><?php wp_list_categories('title_li=&child_of='.get_option('woo_blog_cat_id') ); ?></ul><?php } ?>
                </li>
				<?php } ?>				
				<?php woo_show_menu( get_option('woo_menupages') ); ?>
			</ul>
		</div>
		<!--/nav1-->
        
	</div>
	<!--/header -->
    