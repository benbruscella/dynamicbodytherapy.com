<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.compressed.css" type="text/css" media="screen" />
<script src="<?php bloginfo('template_url'); ?>/script/global.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	// preload all images found in stylesheet (this preloads the coda popup)
	$.preloadCssImages();
	// wp-coda wordpress gallery magic
	$(".gallery a").fancybox({
		'hideOnContentClick': true
	});
	// header navigation fade-in/fade-out
	$('.fadeThis').append('<span class="hover"></span>').each(function () {
		var $span = $('> span.hover', this).css('opacity', 0);
		$(this).hover(function () {
			$span.stop().fadeTo(250, 1);
		}, function () {
			$span.stop().fadeTo(250, 0);
		});
	});
});

</script>
<?php wp_head(); ?>
</head>
<body>

<div id="header">
	<h1><span><?php bloginfo('name'); ?></span></h1>
	<h2><span><?php bloginfo('description'); ?></span></h2>
</div>
