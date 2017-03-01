<?php 
	if (have_posts()): while (have_posts()) : the_post(); 
	$hasThumb = has_post_thumbnail();
?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('loop-post'); ?>>

		<!-- post thumbnail -->
		<?php if ( $hasThumb ) : ?>
			<div class="col-xs-2 col-sm-3">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('square-medium'); ?>
				</a>
			</div>
		<?php endif; ?>
		<!-- /post thumbnail -->
		
		<div class="<?php echo $hasThumb ? 'col-xs-10 col-sm-9' : 'col-xs-12' ; ?>">
			<!-- post title -->
			<h2 class="link-orange">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<!-- post details -->
			<div class="post-meta">
				<span class="date"><?php the_time('F j, Y'); ?></span> - 
				<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			</div>
			<!-- /post details -->

			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2 class="text-orange"><?php _e( 'Sorry, there&rsquo;s nothing here yet.', 'html5blank' ); ?></h2>
		<p>Check back soon!</p>
	</article>
	<!-- /article -->

<?php endif; ?>
