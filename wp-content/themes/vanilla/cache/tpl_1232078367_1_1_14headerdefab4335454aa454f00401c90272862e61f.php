<?php 
function tpl_1232078367_1_1_14headerdefab4335454aa454f00401c90272862e61f_loader( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>

<?php ob_start(); ?>
	<title><?php echo phptal_escape(hybrid_document_title(), ENT_QUOTES, 'UTF-8') ?></title>
	<meta http-equiv="Content-Type" content="<?php echo phptal_escape(phptal_path($ctx->vanilla, 'header/content_type', true), ENT_QUOTES, 'UTF-8');?>"/>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo phptal_escape(phptal_path($ctx->vanilla, 'header/stylesheet_url', true), ENT_QUOTES, 'UTF-8');?>"/>
	<link rel="stylesheet" type="text/css" media="screen, print, handheld" href="<?php echo phptal_escape(phptal_path($ctx->vanilla, 'header/template_url', true), ENT_QUOTES, 'UTF-8');?>css/typography.css"/>
	<?php echo phptal_path($ctx->vanilla, 'header/ie_cond_stylesheet', true) ?>
	<?php if ($ctx->hasSlot("hybrid_head")): ; ?><?php echo $ctx->getSlot("hybrid_head") ?><?php else: ; ?><span></span><?php endif; ?>
	<?php if ($ctx->hasSlot("wp_head")): ; ?><?php echo $ctx->getSlot("wp_head") ?><?php else: ; ?><span></span><?php endif; ?>
<?php $ctx->fillSlot("head", ob_get_clean()); ?>


<?php ob_start(); ?>
		<div id="hd" class="yui-d0">
			<div class="wrapper">
				<?php if ($ctx->hasSlot("header_nav")): ; ?><?php echo $ctx->getSlot("header_nav") ?><?php else: ; ?><span></span><?php endif; ?>
				<?php if ($ctx->hasSlot("header")): ; ?><?php echo $ctx->getSlot("header") ?><?php else: ; ?><span></span><?php endif; ?>
				<?php if ($ctx->hasSlot("main_menu")): ; ?><?php echo $ctx->getSlot("main_menu") ?><?php else: ; ?><span></span><?php endif; ?>
			</div><!-- .wrapper -->
		</div><!-- #hd -->
<?php $ctx->fillSlot("hd", ob_get_clean()); ?>


<?php ob_start(); ?>
		<div id="sub-header" class="yui-d0">
			<div class="wrapper">
				<?php if ($ctx->hasSlot("sub_menu")): ; ?><?php echo $ctx->getSlot("sub_menu") ?><?php else: ; ?><span></span><?php endif; ?>
			</div><!-- .wrapper -->
		</div><!--#sub-header-->
<?php $ctx->fillSlot("sub_header", ob_get_clean()); ?>
		
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14headerdefab4335454aa454f00401c90272862e61f( $tpl, $ctx ) {
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>

<?php 
}

 ?><?php /* Generated by PHPTAL from /home/dynamicbt/www.dynamicbodytherapy.com/wp-content/themes/vanilla/blog-set/header/header-default.html */; ?>