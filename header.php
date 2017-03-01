<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-128.png" sizes="128x128" />
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon.ico" rel="shortcut icon">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

 
 		<style>
       <?php 

        $mobileAlign = get_field( 'mobile_title_image_alignment' );
        $tabletAlign = get_field( 'tablet_title_image_alignment' );

        // Since they have defaults, if one is set, I feel comfortable assuming both are set.
        if ( $mobileAlign ) : 

        ?>

			.mobile-image {
				background-position: <?php echo $mobileAlign; ?> !important;
			}

			.page-title {
				background-position: <?php echo $tabletAlign; ?> !important;
			}

        <?php endif; ?>
		</style>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- desktop header -->
			<header class="header clear" role="banner">

				<div class="utility-nav hidden-xs hidden-sm">
					<div class="container text-right">
						<?php utility_nav(); ?>
						<?php get_search_form(); ?>
					</div>
				</div>

				<div class="main-bar hidden-xs hidden-sm">
					<div class="container">

						<div class="row">
							<div class="col-sm-3">
								<a href="<?php echo home_url(); ?>" class="logo-link">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal-600.png" alt="Engage Autism" class="logo-img">
								</a>								
							</div>
							<div class="primary-nav col-sm-9 text-right">
								<?php primary_nav(); ?>
							</div>
						</div>

					</div> 
				</div>

			</header>
			<!-- /desktop header -->

			<!-- mobile header -->
			<header class="mobile-header hidden-md hidden-lg">
				<div class="visible-contents">
					<div class="logo-container">
						<a href="<?php echo home_url(); ?>" class="logo-link">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal-600.png" alt="Engage Autism" class="logo-img">
						</a>								
					</div>
					<i class="glyphicon glyphicon-menu-hamburger"></i>					
				</div>
				<div class="hidden-contents">
					<div class="logo-container">
						<a href="<?php echo home_url(); ?>" class="logo-link">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal-600.png" alt="Engage Autism" class="logo-img">
						</a>								
					</div>
					<div class="form-container">
						<?php get_search_form(); ?>
					</div>
					<div class="primary-nav">
						<?php primary_nav(); ?>
					</div>
					<div class="utility-nav">
						<?php utility_nav(); ?>
					</div>
				</div>				
			</header>
			<!-- /mobile header -->
