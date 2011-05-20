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
  <link href="<?php bloginfo('template_directory') ?>/print.css" rel="stylesheet" media="print" type="text/css" />
  <script>document.documentElement.className += " js";</script>
  <script src="<?php bloginfo('template_directory') ?>/js/html5.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery-1.6.1.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/domscript.js"></script>
  <meta name="robots" content="index, follow" />
  <?php wp_head() ?>
</head>

<!--[if lt IE 7]><body <?php body_class('ie7 ie6'); ?>><![endif]-->
<!--[if IE 7]><body <?php body_class('ie7'); ?>><![endif]-->
<!--[if gt IE 7]><body <?php body_class(); ?>><![endif]-->
<!--[if !IE]><!--><body <?php body_class(); ?>><!-- <![endif]-->


