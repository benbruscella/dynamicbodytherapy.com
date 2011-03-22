<?php
	// Split the featured pages from the options, and put in an array
	$featpages = get_option('woo_featpages');
	$featarr=split(",",$featpages);
	$featarr = array_diff($featarr, array(""));
?>

<div class="box5">
    <div class="top"></div>
    <div class="spacer">
        <div class="btn-arr2" <?php if ( get_option('woo_featheight') != "") { ?>style="padding-top: <?php echo (get_option('woo_featheight') / 2); ?>px"<?php } ?>><a href="javascript:stepcarousel.stepBy('mygallery', -1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/arr-left.gif" alt="Back" /></a></div>
                
        <div class="wrapper">

			<div id="mygallery" class="stepcarousel" <?php if ( get_option('woo_featheight') != "") { ?>style="height: <?php echo get_option('woo_featheight');  ?>px"<?php } ?>>

				<div class="belt">
        
                    <?php foreach ( $featarr as $featitem ) { ?>
                    
                    <?php query_posts('page_id=' . $featitem); ?>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		        					
        
                
                	<div class="panel">
                    
                    	<?php if (!get_post_meta($post->ID, "image", true)) : // Show full size if page doesn't contain image in custom field ?>

                        	<div class="post">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>

                        <?php else : ?>
                         
                        <div class="col4 post">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                        <!--/col4 -->
                        <div class="col5">
                        
                            <?php woo_get_image('image',get_option('woo_image_width'),get_option('woo_image_height')); ?> 
                                                
                        </div>
                        
                        <?php endif; ?>
                        
                        <br class="fix" />

					</div>
                    
					<?php endwhile; endif; ?>
                    
                    <?php } ?>
				</div>

			</div>

        </div>
        <!--/wrapper -->
       
        <div class="btn-arr2 fr" <?php if ( get_option('woo_featheight') != "") { ?>style="padding-top: <?php echo (get_option('woo_featheight') / 2); ?>px"<?php } ?>><a href="javascript:stepcarousel.stepBy('mygallery', 1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/arr-right.gif" alt="Forward" /></a></div>
        <br class="fix" />
    </div>
    <!--/spacer -->
    <div class="bot"></div>
</div>
<!--/box5 -->