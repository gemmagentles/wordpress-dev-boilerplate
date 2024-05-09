<?php /* Template Name: Example Page Template */ get_header(); ?>

<main role="main">
	<div class="banner-image__wrapper">
		<?php if ( get_field( 'banner_image' ) ) : ?>
			<img class="banner-image" src="<?php the_field( 'banner_image' ); ?>" />
		<?php endif ?>
	</div>
</main>

<?php get_footer(); ?>
