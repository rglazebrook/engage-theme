<?php 
	global $post;
	$post_slug=$post->post_name;
?>

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<?php if ( get_post_type() == 'page' ): ?>

				<div class="footer-services">
					<div class="container-fluid text-center">
						<div class="row">

							<div class="col-sm-6 bg-green text-white">

								<?php if ( $post_slug == 'children-services' ) : ?>
									<h2>Adult Services</h2>
									<p><a href="<?php echo home_url(); ?>/adult-services/" class="btn btn-inverse">Learn About Adult Services</a></p>
								<?php else : ?>
									<h2>Children Services</h2>
									<p><a href="<?php echo home_url(); ?>/children-services/" class="btn btn-inverse">Learn About Children Services</a></p>
								<?php endif; ?>

							</div>
							<div class="col-sm-6 bg-brown text-orange">

								<?php if ( $post_slug == 'children-services' || $post_slug == 'adult-services' ) : ?>
									<h2>Support Us</h2>
									<p><a href="<?php echo home_url(); ?>/donate/" class="btn btn-primary">Support Now</a></p>
								<?php else : ?>
									<h2>Adult Services</h2>
									<p><a href="<?php echo home_url(); ?>/adult-services/" class="btn btn-primary">Learn About Adult Services</a></p>
								<?php endif; ?>

							</div>

						</div>
					</div>
				</div>

				<?php endif; ?>
				
				<div class="contact container">
					<div class="row">
						<div class="col-sm-7 col-sm-push-5">
							<h2 class="h1 text-center text-orange">Get in Touch</h2>
							<form action="#" class="contact-form form-horizontal">
								<div class="form-group">
									<div class="col-md-3 control-label">I'm interested in:</div>
									<label class="col-md-3 control-label radio">
										<input type="radio" name="contact-interest" value="Autism Services"> Autism Services
									</label>
									<label class="col-md-3 control-label radio">
										<input type="radio" name="contact-interest" value="Careers"> Careers
									</label>
									<label class="col-md-3 control-label radio">
										<input type="radio" name="contact-interest" value="Farm Products"> Farm Products
									</label>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<input type="text" name="contact-name" class="form-control" placeholder="Name">
									</div>
									<div class="col-md-6">
										<input type="email" name="contact-email" class="form-control" placeholder="Email Address">
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-12">
										<textarea name="contact-message" id="" cols="30" rows="10" class="form-control" placeholder="Leave your message..."></textarea>
									</div>
								</div>
								<div class="form-group text-center">
									<button type="submit" class="btn btn-primary">Send</button>
								</div>
							</form>
						</div>
						<div class="col-sm-4 col-sm-pull-8 text-center">
							<a href="<?php echo home_url(); ?>" class="logo-link">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-vertical-500.png" alt="Engage Autism" class="logo-img">
							</a>
							<h2>
								<a href="tel:18882288476">888-228-8476</a>
							</h2>
							<form action="#" class="email-form">
								<div class="form-group">
									<label for="email-address"><h3 class="text-green">Sign Up For Our Emails</h3></label>
									<input type="email" name="email-address" placeholder="Email Address" class="form-control">
								</div>
							</form>
						</div>
					</div>
					<div class="footer-links text-center">
						<div class="container">
							<?php footer_nav(); ?>
						</div>
					</div>
				</div>

				<div class="social-bar">
					<div class="container">
						<?php social_nav(); ?>					
					</div>
				</div>
				
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		// (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		// (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		// l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		// ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		// ga('send', 'pageview');
		</script>

	</body>
</html>
