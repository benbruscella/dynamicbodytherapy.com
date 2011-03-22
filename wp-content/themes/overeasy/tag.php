<?php get_header(); ?>

	<div id="columns">
		<div id="centercol">
			<div class="box">
				<div class="top"></div>
				<div class="spacer">

                <h3><em>Tag Archive |</em> "<?php single_tag_title("", true); ?>"</h3>        
                        
					<?php if(have_posts()) : ?>
					
					<?php while(have_posts()) : the_post() ?>
        
                    <div id="post-<?php the_ID(); ?>" class="post">
    
						<?php $category = get_the_category(); // To show only 1 Category ?>            
                        <div class="btn-cat"><span class="btn-general"><?php the_category(","); ?></span></div>
                        
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <div class="date"><?php the_time('F j, Y'); ?> <?php comments_popup_link( 'No comments yet', '1 comment', '% comments'); ?></div>
                        
                        <?php the_excerpt(); ?>
                        <div class="btn-continue"><a href="<?php the_permalink() ?>">Continue Reading</a></div>
                    
                    </div>
                    <!--/post-->                            
        
                    <?php endwhile; ?>

					<br class="fix" />
        
                    <?php else: ?>
                    
                    <p>Nothing posts found.</p>
                    
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