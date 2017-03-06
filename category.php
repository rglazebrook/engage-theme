<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container">

			<h1><?php single_cat_title(); _e( ' Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
