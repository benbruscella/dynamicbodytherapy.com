<?php get_header(); ?>

    <!-- Intro Text -->
	<div class="box4">
		<div class="top"></div>
		<div class="spacer">
			<span class="intro"><?php echo stripslashes(get_option('woo_intro')); ?></span>
		</div>
		<!--/spacer -->
		<div class="bot"></div>
	</div>
	<!--/box4 -->
    
    <!-- Featured Slider -->
    <?php include(TEMPLATEPATH . '/includes/featured.php'); ?>

    <!-- Bottom Widgets -->
	<?php if ( function_exists('dynamic_sidebar') && (is_active_sidebar(5) || is_active_sidebar(6) || is_active_sidebar(7)) ) : // Don't show on the front page ?>
    
	<div id="columns">
		<div class="col6">
			<?php dynamic_sidebar(5); ?>		           
		</div>
		<!--/col6 -->
		<div class="col6">
			<?php dynamic_sidebar(6);  ?>		           
		</div>
		<!--/col6 -->
		<div class="col6 last">
			<?php dynamic_sidebar(7);  ?>		           
		</div>
		<!--/col6 -->
		<br class="fix" />
	</div>
	<!--/columns -->
    
    <?php endif; ?>

<?php get_footer(); ?>    
      