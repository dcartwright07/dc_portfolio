<?php get_header(); ?>

<div role="main" class="main">

	<div class="container pt-lg-5">

		<div class="row py-4 mb-2">
			<div class="col-md-7 order-2">
				<div class="overflow-hidden">
					<h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Dominic Cartwright</h2>
				</div>
				<div class="overflow-hidden mb-3">
					<p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Web Designer/Developer</p>
				</div>
				<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">I am a Web Designer/Developer. I graduated from Taylor University with a Bachelor's Degree in Computer Science & Digital Media. Even though I studied a wide variety of topics in my field, I decided to focus on Web Design and Development.</p>
				<!-- <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p> -->
				<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
				<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
					<div class="col-lg-6">
						<a href="/contact" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
						<a href="https://drive.google.com/open?id=1VCWlEDGBqqH7EzM7c1T3zFOG3ra1eriE" target="_blank" class="btn btn-modern btn-primary mt-3">R&eacute;sum&eacute; (PDF)</a>
					</div>
					<div class="col-sm-6 text-lg-right my-4 my-lg-0">
						<strong class="text-uppercase text-1 mr-3 text-dark">Connect</strong>
						<ul class="social-icons float-lg-right">
							<li class="social-icons-facebook">
								<a href="https://www.facebook.com/nicholas.cartwright1" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="social-icons-twitter">
								<a href="https://twitter.com/nickcartwri12" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="social-icons-linkedin">
								<a href="https://www.linkedin.com/in/dominic-cartwright/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
							</li>
							<li class="social-icons-googleplus">
								<a href="https://plus.google.com/u/0/100775024449756134308/posts" target="_blank" title="Google+"><i class="fab fa-google-plus"></i></a>
							</li>
							<li class="social-icons-github">
								<a href="https://github.com/dcartwright07" target="_blank" title="Linkedin"><i class="fab fa-github"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
				<img src="/wp-content/uploads/2019/08/about-me.jpg" class="img-fluid mb-2" alt="Profile picture of Dominic Cartwright">
			</div>
		</div>
	</div>

	<?php

		get_template_part('partials/content', 'experience');
		get_template_part('partials/content', 'skills');
		// get_template_part('partials/content', 'recommendations');
		get_template_part('partials/content', 'education');

	?>

</div>

<?php get_footer(); ?>