<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<title><?php
		global $page, $paged;
		wp_title('|', true, 'right');
		bloginfo('name');
		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page())) { echo " | $site_description"; }
		if ( $paged >= 2 || $page >= 2 ) { echo ' | ' . sprintf('Page %s', max($paged, $page)); }
		?></title>
	<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?php bloginfo('template_directory') ?>/css/print.css" rel="stylesheet" media="print" type="text/css" />
	<script>document.documentElement.className += " js";</script>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" type="image/vnd.microsoft.icon" /> 
	<?php wp_head() ?>
</head>

<!--[if lt IE 7]><body <?php body_class('ie7 ie6'); ?>><![endif]-->
<!--[if IE 7]><body <?php body_class('ie7'); ?>><![endif]-->
<!--[if gt IE 7]><body <?php body_class(); ?>><![endif]-->
<!--[if !IE]><!--><body <?php body_class(); ?>><!-- <![endif]-->


