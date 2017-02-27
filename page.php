<?php 

get_header(); 
$mainMargin = get_field('bottom_margin');

?>

	<main role="main" class="<?php if ( $mainMargin ) { echo 'bottom-margin'; } ?>">

		<header class="page-title" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">
			<div class="mobile-image visible-xs" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 <?php echo get_field('page_title_alignment'); ?>">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</header>

		<!-- section -->
		<section class="container">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
