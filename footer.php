			<footer id="footer">
				<div class="container container-lg">
					<div class="row py-5">
						<div class="col text-center">

							<?php

								$defaults = array(
									'container' => false,
									'theme_location' => 'footer-social-media-menu',
									'menu_class' => 'footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1'
								);
								wp_nav_menu($defaults);

							?>

						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container container-lg py-2">
						<div class="row py-4">
							<div class="col-12 text-center d-flex align-items-center justify-content-center mb-4 mb-lg-0 pt-4 pt-lg-0">
								<p>&copy; Copyright <?php the_time( 'Y' ); ?>. All Rights Reserved | Dominic Cartwright</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<?php wp_footer(); ?>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
