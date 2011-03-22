<?php get_header(); ?>
<?php query_posts('post_type=page&order=asc'); ?>		

<div id="page">
	<div id="slider">	
		<ul class="navigation">
<?php while (have_posts()) : the_post(); ?>
			<li><a href="#<?=$post->post_name?>"><span><?php the_title(); ?></span></a></li>
<?php endwhile;?>
		</ul>
		
		<div class="scrollButtons scrollMeLeft"><a><span>previous</span></a></div>
		
		<div class="scroll">
			<div class="scrollContainer">
<?php while (have_posts()) : the_post(); ?>
				<div class="panel" id="<?=$post->post_name?>">
					<h3><?php the_title(); ?></h3> 
					<?php the_content(); ?> 
				</div>
<?php endwhile;?>
			</div>
		</div>
		
		<div class="scrollButtons scrollMeRight"><a><span>next</span></a></div>
		
	</div>
</div>

<?php get_footer(); ?>
