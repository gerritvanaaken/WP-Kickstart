<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
	<div <?php post_class(); ?>>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
<?php else : ?>
	<h2>Couldn’t find any articles!</h2>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>