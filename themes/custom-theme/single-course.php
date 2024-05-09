<?php get_header(); ?>

	<main role="main">
		<div class="intro-panel__wrapper">
			<h1 class="intro-panel__heading"><?php the_field( 'intro_panel_heading' ); ?></h1>
			<p class="intro-panel__paragraph"><?php the_field( 'intro_panel_paragraph' ); ?></p>
		</div>
	</main>

<?php get_footer(); ?>
