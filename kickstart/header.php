<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title><?php
		global $page, $paged;
		wp_title('|', true, 'right');
		bloginfo('name');
		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page())) { echo " | $site_description"; }
		if ( $paged >= 2 || $page >= 2 ) { echo ' | ' . sprintf('Page %s', max($paged, $page)); }
		?></title>
	<script>document.documentElement.className += " js";</script>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/vnd.microsoft.icon" /> 
	<?php wp_head(); ?>
</head>

<!--[if IE 8]><body <?php body_class('ie8'); ?>><![endif]-->
<!--[if IE 9]><body <?php body_class('ie9'); ?>><![endif]-->
<!--[if !IE]><!--><body <?php body_class(); ?>><!-- <![endif]-->


<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>