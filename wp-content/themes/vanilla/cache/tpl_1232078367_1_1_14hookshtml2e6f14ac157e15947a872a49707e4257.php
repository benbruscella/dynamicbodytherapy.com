<?php 
function tpl_1232078367_1_1_14hookshtml2e6f14ac157e15947a872a49707e4257_loader( $tpl, $ctx ) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>
	<?php ob_start(); ?>
		<!-- hook: hybrid_head -->
		<?php echo phptal_escape(hybrid_head(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("hybrid_head", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: wp_head -->
		<?php echo phptal_escape(wp_head(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("wp_head", ob_get_clean()); ?>


	<?php ob_start(); ?>
		<!-- hook: before_page -->
		<?php echo phptal_escape(vanilla_before_page(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("before_page", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: before_hd -->
		<?php echo phptal_escape(vanilla_before_hd(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("before_hd", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: before_bd -->
		<?php echo phptal_escape(vanilla_before_bd(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("before_bd", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: before_ft -->
		<?php echo phptal_escape(vanilla_before_ft(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("before_ft", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: after_ft -->
		<?php echo phptal_escape(vanilla_after_ft(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("after_ft", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: after_page -->
		<?php echo phptal_escape(vanilla_after_page(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("after_page", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: wp_footer -->
		<?php echo phptal_escape(wp_footer(), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("wp_footer", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: header_nav -->
		<?php echo phptal_escape(vanilla_widget_block('Header Nav'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("header_nav", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: header -->
		<?php echo phptal_escape(vanilla_widget_block('Header'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("header", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: main_menu -->
		<?php echo phptal_escape(vanilla_widget_block('Main Menu'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("main_menu", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: main_menu -->
		<?php echo phptal_escape(vanilla_widget_block('Sub Menu'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("sub_menu", ob_get_clean()); ?>


	<?php ob_start(); ?>
		<!-- hook: breadcrumbs -->
		<?php echo phptal_escape(vanilla_widget_block('Breadcrumbs'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("breadcrumbs", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: content_top -->
		<?php echo phptal_escape(vanilla_widget_block('Content Top'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("content_top", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: content_middle -->
		<?php echo phptal_escape(vanilla_widget_block('Content Middle'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("content_middle", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: content_bottom -->
		<?php echo phptal_escape(vanilla_widget_block('Content Bottom'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("content_bottom", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: primary_sidebar -->
		<?php echo phptal_escape(vanilla_widget_block('Primary Sidebar'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("primary_sidebar", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: secondary_sidebar -->
		<?php echo phptal_escape(vanilla_widget_block('Secondary Sidebar'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("secondary_sidebar", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: footer_nav -->
		<?php echo phptal_escape(vanilla_widget_block('Footer Nav'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("footer_nav", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: footer -->
		<?php echo phptal_escape(vanilla_widget_block('Footer'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("footer", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: utility_1 -->
		<?php echo phptal_escape(vanilla_widget_block('Utility 1'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("utility_1", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: utility_2 -->
		<?php echo phptal_escape(vanilla_widget_block('Utility 2'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("utility_2", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: utility_3 -->
		<?php echo phptal_escape(vanilla_widget_block('Utility 3'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("utility_3", ob_get_clean()); ?>
	
	
	<?php ob_start(); ?>
		<!-- hook: utility_4 -->
		<?php echo phptal_escape(vanilla_widget_block('Utility 4'), ENT_QUOTES, 'UTF-8');?>
	<?php $ctx->fillSlot("utility_4", ob_get_clean()); ?>
	
<?php 
}

 ?><?php 
function tpl_1232078367_1_1_14hookshtml2e6f14ac157e15947a872a49707e4257( $tpl, $ctx ) {
$glb = $tpl->getGlobalContext() ;
$_translator = $tpl->getTranslator() ;
?>

<?php 
}

 ?><?php /* Generated by PHPTAL from /home/dynamicbt/www.dynamicbodytherapy.com/wp-content/themes/vanilla/blog-set/hooks.html */; ?>