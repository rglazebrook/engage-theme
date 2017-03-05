<?php 

get_header(); 
$mainMargin = get_field('bottom_margin');

?>

	<main role="main" class="<?php if ( $mainMargin ) { echo 'bottom-margin'; } ?>">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<header class="page-title" <?php if ( has_post_thumbnail() ) : ?> style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);" <?php endif; ?>>
			<div class="mobile-image visible-xs" <?php if ( has_post_thumbnail() ) : ?> style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);"<?php endif; ?>></div>
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



			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->

		<?php endwhile; ?>
		<?php endif; ?>

	</main>


<?php get_footer(); ?>
