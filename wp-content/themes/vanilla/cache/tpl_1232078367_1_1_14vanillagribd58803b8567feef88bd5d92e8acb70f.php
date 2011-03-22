<?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_outer_multi_col( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<!-- macro: vanilla_grid_outer_multi_col -->
	<div class="yui-main">
		<div class="yui-b">
			<div class="<?php echo phptal_escape(phptal_path($ctx->vanilla, 'page/nesting', true), ENT_QUOTES, 'UTF-8');?>">
				<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_top($tpl, $ctx) ;
$ctx->popSlots() ;
?>
				<?php $__att_class = phptal_escape((in_array($ctx->vanilla['page']['nesting'], array('yui-gc', 'yui-ge'))) ? 'yui-u first' : 'yui-u', ENT_QUOTES, 'UTF-8'); ?><div id="content" class="<?php echo $__att_class ?>">
					<?php if ($ctx->hasSlot("content")): ; ?><?php echo $ctx->getSlot("content") ?><?php else: ; ?><span></span><?php endif; ?>
				</div><!-- .yui-u -->
				<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_middle($tpl, $ctx) ;
$ctx->popSlots() ;
?>
			</div><!-- .yui-g -->
		</div><!-- .yui-b -->
	</div><!-- #yui-main -->
	<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_bottom($tpl, $ctx) ;
$ctx->popSlots() ;
?>
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_outer_single_col( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<!-- macro: vanilla_grid_outer_single_col -->
	<div class="yui-main">
		<div class="yui-b">
			<div id="content" class="yui-g">
				<?php if ($ctx->hasSlot("content")): ; ?><?php echo $ctx->getSlot("content") ?><?php else: ; ?><span></span><?php endif; ?>
				<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_middle($tpl, $ctx) ;
$ctx->popSlots() ;
?>
			</div><!-- .yui-g -->
		</div><!-- .yui-b -->
	</div><!-- #yui-main -->
	<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_bottom($tpl, $ctx) ;
$ctx->popSlots() ;
?>
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_inner_multi_col( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<!-- macro: vanilla_grid_inner_multi_col -->
	<div class="<?php echo phptal_escape(phptal_path($ctx->vanilla, 'page/nesting', true), ENT_QUOTES, 'UTF-8');?>">
		<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_top($tpl, $ctx) ;
$ctx->popSlots() ;
?>
		<?php $__att_class = phptal_escape((in_array($ctx->vanilla['page']['nesting'], array('yui-gc', 'yui-ge'))) ? 'yui-u first' : 'yui-u', ENT_QUOTES, 'UTF-8'); ?><div id="content" class="<?php echo $__att_class ?>">
			<?php if ($ctx->hasSlot("content")): ; ?><?php echo $ctx->getSlot("content") ?><?php else: ; ?><span></span><?php endif; ?>
		</div><!-- .yui-u first -->
		<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_middle($tpl, $ctx) ;
$ctx->popSlots() ;
?>
	</div><!-- .yui-g -->
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_inner_single_col( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<!-- macro: vanilla_grid_inner_single_col -->
	<div id="content" class="yui-g">
		<?php if ($ctx->hasSlot("content")): ; ?><?php echo $ctx->getSlot("content") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_middle($tpl, $ctx) ;
$ctx->popSlots() ;
?>
	</div><!-- .yui-g -->			
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_bottom( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<!-- macro: vanilla_grid_sidebars_bottom -->
	<?php if ($ctx->vanilla['page']['nesting'] == 'yui-g'): ; ?>
		<div class="yui-b sidebar sidebar-outer">
			<?php if ($ctx->hasSlot("primary_sidebar")): ; ?><?php echo $ctx->getSlot("primary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
			<?php if ($ctx->hasSlot("secondary_sidebar")): ; ?><?php echo $ctx->getSlot("secondary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
		</div><!-- .yui-b -->
	<?php endif; ?>
	<?php if (in_array($ctx->vanilla['page']['template'], array('yui-t1', 'yui-t2', 'yui-t3'))): ; ?>
		<div class="yui-b sidebar sidebar-outer">
			<?php if ($ctx->hasSlot("primary_sidebar")): ; ?><?php echo $ctx->getSlot("primary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
		</div><!-- .yui-b -->
	<?php endif; ?>
	<?php if (! in_array($ctx->vanilla['page']['template'], array('yui-t1', 'yui-t2', 'yui-t3'))): ; ?>
		<div class="yui-b sidebar sidebar-outer">
			<?php if ($ctx->vanilla['page']['nesting'] != 'yui-g'): ; ?>
				<?php if ($ctx->hasSlot("secondary_sidebar")): ; ?><?php echo $ctx->getSlot("secondary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
			<?php endif; ?>
		</div><!-- .yui-b -->
	<?php endif; ?>
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_middle( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<!-- macro: vanilla_grid_sidebars_middle -->
	<?php if (in_array($ctx->vanilla['page']['nesting'], array('yui-gc', 'yui-ge'))): ; ?>
		<div class="yui-u sidebar sidebar-inner">
		<?php if (in_array($ctx->vanilla['page']['template'], array('yui-t1', 'yui-t2', 'yui-t3'))): ; ?>
			<?php if ($ctx->hasSlot("secondary_sidebar")): ; ?><?php echo $ctx->getSlot("secondary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php endif; ?>
		<?php if (! in_array($ctx->vanilla['page']['template'], array('yui-t1', 'yui-t2', 'yui-t3'))): ; ?>
			<?php if ($ctx->hasSlot("primary_sidebar")): ; ?><?php echo $ctx->getSlot("primary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php endif; ?>
		<?php if ($ctx->vanilla['page']['template'] == 'yui-t7'): ; ?>
			<?php if ($ctx->hasSlot("secondary_sidebar")): ; ?><?php echo $ctx->getSlot("secondary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php endif; ?>
		</div><!-- .yui-u -->
	<?php endif; ?>
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_sidebars_top( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<!-- macro: vanilla_grid_sidebars_top -->
	<?php if (in_array($ctx->vanilla['page']['nesting'], array('yui-gd', 'yui-gf'))): ; ?>
		<?php if (in_array($ctx->vanilla['page']['template'], array('yui-t1', 'yui-t2', 'yui-t3'))): ; ?>
			<div class="yui-u first sidebar sidebar-inner">
				<?php if ($ctx->hasSlot("secondary_sidebar")): ; ?><?php echo $ctx->getSlot("secondary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
			</div><!-- .yui-u first -->
		<?php endif; ?>
		<?php if (! in_array($ctx->vanilla['page']['template'], array('yui-t1', 'yui-t2', 'yui-t3'))): ; ?>
			<div class="yui-u first sidebar sidebar-outer">
				<?php if ($ctx->hasSlot("primary_sidebar")): ; ?><?php echo $ctx->getSlot("primary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
			</div><!-- .yui-u first -->
		<?php endif; ?>
		<?php if ($ctx->vanilla['page']['template'] == 'yui-t7'): ; ?>
			<div class="yui-u first sidebar sidebar-outer">
				<?php if ($ctx->hasSlot("secondary_sidebar")): ; ?><?php echo $ctx->getSlot("secondary_sidebar") ?><?php else: ; ?><span></span><?php endif; ?>
			</div><!-- .yui-u first -->
		<?php endif; ?>
	<?php endif; ?>
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<!-- macro: vanilla_grid -->
	<?php if ($ctx->vanilla['page']['template'] != 'yui-t7'): ; ?>
		<?php if ($ctx->vanilla['page']['nesting'] == 'yui-g'): ; ?>
			<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_outer_single_col($tpl, $ctx) ;
$ctx->popSlots() ;
?>
		<?php endif; ?>
		<?php if ($ctx->vanilla['page']['nesting'] != 'yui-g'): ; ?>
			<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_outer_multi_col($tpl, $ctx) ;
$ctx->popSlots() ;
?>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($ctx->vanilla['page']['template'] == 'yui-t7'): ; ?>
		<?php if ($ctx->vanilla['page']['nesting'] == 'yui-g'): ; ?>
			<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_inner_single_col($tpl, $ctx) ;
$ctx->popSlots() ;
?>
		<?php endif; ?>
		<?php if ($ctx->vanilla['page']['nesting'] != 'yui-g'): ; ?>
			<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f_vanilla_grid_inner_multi_col($tpl, $ctx) ;
$ctx->popSlots() ;
?>
		<?php endif; ?>
	<?php endif; ?>
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14vanillagribd58803b8567feef88bd5d92e8acb70f( $tpl, $ctx ) {
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>





























<?php 
}

 ?><?php /* Generated by PHPTAL from /home/dynamicbt/www.dynamicbodytherapy.com/wp-content/themes/vanilla/blog-set/vanilla-grid.html */; ?>