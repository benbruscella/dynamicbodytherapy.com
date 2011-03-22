<?php 
function tpl_1232078367_1_1_14homehtmld8d0e4e1a310ddcf840a987f37c45318_page( $tpl, $ctx ) {
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">') ;
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>

<?php 
$ctx = $tpl->pushContext() ;
$ctx->file = vanilla_get_template('hooks.html') ;
/* All the 'hook' slots. */ ;
$ctx->pushSlots() ;
?><?php $tpl->executeMacro(''.$ctx->file.'/loader'); ?><?php 
$ctx->popSlots() ;
$ctx = $tpl->popContext() ;
?>
<?php 
$ctx = $tpl->pushContext() ;
$ctx->file = vanilla_get_template('header/' . $ctx->vanilla['header']['tpl_file']) ;
/* All the header slots. */ ;
$ctx->pushSlots() ;
?><?php $tpl->executeMacro(''.$ctx->file.'/loader'); ?><?php 
$ctx->popSlots() ;
$ctx = $tpl->popContext() ;
?>
<?php 
$ctx = $tpl->pushContext() ;
$ctx->file = vanilla_get_template('loop/' . $ctx->vanilla['loop']['tpl_file']) ;
/* All the loop slots. */ ;
$ctx->pushSlots() ;
?><?php $tpl->executeMacro(''.$ctx->file.'/loader'); ?><?php 
$ctx->popSlots() ;
$ctx = $tpl->popContext() ;
?>
<?php 
$ctx = $tpl->pushContext() ;
$ctx->file = vanilla_get_template('misc/nav-posts.html') ;
/* The nav_posts slot. */ ;
$ctx->pushSlots() ;
?><?php $tpl->executeMacro(''.$ctx->file.'/loader'); ?><?php 
$ctx->popSlots() ;
$ctx = $tpl->popContext() ;
?>
<?php 
$ctx = $tpl->pushContext() ;
$ctx->file = vanilla_get_template('vanilla-utility.html') ;
/* All the utility block slots. */ ;
$ctx->pushSlots() ;
?><?php $tpl->executeMacro(''.$ctx->file.'/loader'); ?><?php 
$ctx->popSlots() ;
$ctx = $tpl->popContext() ;
?>
<?php 
$ctx = $tpl->pushContext() ;
$ctx->file = vanilla_get_template('footer/' . $ctx->vanilla['footer']['tpl_file']) ;
/* All the footer slots. */ ;
$ctx->pushSlots() ;
?><?php $tpl->executeMacro(''.$ctx->file.'/loader'); ?><?php 
$ctx->popSlots() ;
$ctx = $tpl->popContext() ;
?>

<?php $ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'); ?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- have to put language back in here. -->
<head profile="http://gmpg.org/xfn/11">
	<?php if ($ctx->hasSlot("head")): ; ?><?php echo $ctx->getSlot("head") ?><?php else: ; ?><span></span><?php endif; ?>
</head>
<body class="<?php echo phptal_escape(phptal_path($ctx->vanilla, 'page/body_class', true), ENT_QUOTES, 'UTF-8');?>">

	<?php if ($ctx->hasSlot("before_page")): ; ?><?php echo $ctx->getSlot("before_page") ?><?php else: ; ?><span></span><?php endif; ?>

	<div id="page">
	
		<?php if ($ctx->hasSlot("before_hd")): ; ?><?php echo $ctx->getSlot("before_hd") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php if ($ctx->hasSlot("hd")): ; ?><?php echo $ctx->getSlot("hd") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php if ($ctx->hasSlot("sub_header")): ; ?><?php echo $ctx->getSlot("sub_header") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php if ($ctx->hasSlot("before_bd")): ; ?><?php echo $ctx->getSlot("before_bd") ?><?php else: ; ?><span></span><?php endif; ?>
		
		<div id="bd" class="<?php echo phptal_escape(phptal_path($ctx->vanilla, 'page/bd_class', true), ENT_QUOTES, 'UTF-8');?> hfeed">

			<?php if ($ctx->hasSlot("breadcrumbs")): ; ?><?php echo $ctx->getSlot("breadcrumbs") ?><?php else: ; ?><span></span><?php endif; ?>
				
			<?php 
$ctx = $tpl->pushContext() ;
$ctx->file = vanilla_get_template('vanilla-grid.html') ;
$ctx->pushSlots() ;
ob_start() ;
?>
					<?php if ($ctx->hasSlot("content_top")): ; ?><?php echo $ctx->getSlot("content_top") ?><?php else: ; ?><span></span><?php endif; ?>
					<?php if ($ctx->hasSlot("loop")): ; ?><?php echo $ctx->getSlot("loop") ?><?php else: ; ?><span></span><?php endif; ?>
					<?php if ($ctx->hasSlot("nav_posts")): ; ?><?php echo $ctx->getSlot("nav_posts") ?><?php else: ; ?><span></span><?php endif; ?>
					<?php if ($ctx->hasSlot("content_bottom")): ; ?><?php echo $ctx->getSlot("content_bottom") ?><?php else: ; ?><span></span><?php endif; ?>
				<?php $ctx->fillSlot("content", ob_get_clean()); ?><?php $tpl->executeMacro(''.$ctx->file.'/vanilla_grid'); ?><?php 
$ctx->popSlots() ;
$ctx = $tpl->popContext() ;
?>
			
		</div><!-- #bd-->
		
		<?php if ($ctx->hasSlot("utility")): ; ?><?php echo $ctx->getSlot("utility") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php if ($ctx->hasSlot("before_ft")): ; ?><?php echo $ctx->getSlot("before_ft") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php if ($ctx->hasSlot("ft")): ; ?><?php echo $ctx->getSlot("ft") ?><?php else: ; ?><span></span><?php endif; ?>
		<?php if ($ctx->hasSlot("after_ft")): ; ?><?php echo $ctx->getSlot("after_ft") ?><?php else: ; ?><span></span><?php endif; ?>
		
	</div><!--#page-->
	
	<?php if ($ctx->hasSlot("after_page")): ; ?><?php echo $ctx->getSlot("after_page") ?><?php else: ; ?><span></span><?php endif; ?>
	<?php if ($ctx->hasSlot("wp_footer")): ; ?><?php echo $ctx->getSlot("wp_footer") ?><?php else: ; ?><span></span><?php endif; ?>

</body>
</html>

<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14homehtmld8d0e4e1a310ddcf840a987f37c45318( $tpl, $ctx ) {
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>



<?php 
$ctx->pushSlots() ;
tpl_1232078367_1_1_14homehtmld8d0e4e1a310ddcf840a987f37c45318_page($tpl, $ctx) ;
$ctx->popSlots() ;

}

?><?php /* Generated by PHPTAL from /home/dynamicbt/www.dynamicbodytherapy.com/wp-content/themes/vanilla/blog-set/posts/home.html */; ?>