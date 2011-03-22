<?php get_header(); ?>

	<div id="columns">
		<div id="centercol">
			<div class="box">
				<div class="top"></div>
				<div class="spacer">

					<?php if(have_posts()) : ?>
					
					<?php while(have_posts()) : the_post() ?>
        
                    <div id="post-<?php the_ID(); ?>" class="post">
    
						<?php $category = get_the_category(); // To show only 1 Category ?>            
                        <div class="btn-cat"><span class="btn-general"><?php the_category(","); ?></span></div>
                        
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <div class="date"><?php the_time('F j, Y'); ?> <?php comments_popup_link( 'No comments yet', '1 comment', '% comments'); ?></div>
                        
						<?php if ( get_option('woo_the_content') == "true" ) { the_content('<div class="btn-continue">Continue Reading</div>'); } else { the_excerpt(); ?>
                        <div class="btn-continue"><a href="<?php the_permalink() ?>">Continue Reading</a></div>
                        <?php } ?>
                    	<div class="fix"></div>
                    </div>
                    <!--/post-->                            
        
                    <?php endwhile; ?>
        
					<div class="btn-arr fl"><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div class="btn-arr fr"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					<br class="fix" />
        
                    <?php endif; ?>
                
				</div>
				<!--/spacer -->
				<div class="bot"></div>
			</div>
			<!--/box -->
		</div>
		<!--/centercol -->

<?php get_sidebar(); ?>

		<br class="fix" />
	</div>
	<!--/columns -->

<?php get_footer(); ?>