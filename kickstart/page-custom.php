<?php
/*
Template Name: Some Brilliant Name
*/
?>

<?php the_post(); ?>
<?php get_header(); ?>

<div <?php post_class(); ?>>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>