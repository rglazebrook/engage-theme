<?php 
get_header(); 
$mainMargin = get_field('bottom_margin');

$featured_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full')[0]; 
   
?>

	<main role="main" class="<?php if ( $mainMargin ) { echo 'bottom-margin'; } ?>">

		<header class="page-title" style="background-image: url(<?php echo $featured_img; ?>);">
			<div class="mobile-image visible-xs" style="background-image: url(<?php echo $featured_img; ?>);"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 <?php echo get_field('page_title_alignment'); ?>">
						<h1>Blog</h1>
					</div>
				</div>
			</div>
		</header>

		<!-- section -->
		<section class="container home-loop">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
