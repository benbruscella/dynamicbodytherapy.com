<?php 
function tpl_1232078367_1_1_14footerdefad7be4a07a3a2f835558de5b50a41f774_loader( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>

<?php ob_start(); ?>
		<div id="ft" class="yui-d0">
			<div class="wrapper">		
				<?php if ($ctx->hasSlot("footer_nav")): ; ?><?php echo $ctx->getSlot("footer_nav") ?><?php else: ; ?><span></span><?php endif; ?>
				<?php if ($ctx->hasSlot("footer")): ; ?><?php echo $ctx->getSlot("footer") ?><?php else: ; ?><span></span><?php endif; ?>
			</div><!--.wrapper-->
		</div><!--#ft -->
<?php $ctx->fillSlot("ft", ob_get_clean()); ?>

<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14footerdefad7be4a07a3a2f835558de5b50a41f774( $tpl, $ctx ) {
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>

<?php 
}

 ?><?php /* Generated by PHPTAL from /home/dynamicbt/www.dynamicbodytherapy.com/wp-content/themes/vanilla/blog-set/footer/footer-default.html */; ?>