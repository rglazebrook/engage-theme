<?php get_header(); ?>

	<main role="main" class="bottom-margin">
		<!-- section -->
		<section class="container">

			<h1 class="text-green"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
