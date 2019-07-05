<div class="container py-4">

	<div class="row mb-5">
		<div class="col">

			<form id="contactForm" class="contact-form-recaptcha-v3" action="php/contact-form-recaptcha-v3.php" method="POST">
				<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
					<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
				</div>

				<div class="form-row">
					<div class="form-group col-lg-6">
						<label class="required font-weight-bold text-dark text-2">Full Name</label>
						<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
					</div>
					<div class="form-group col-lg-6">
						<label class="required font-weight-bold text-dark text-2">Email Address</label>
						<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<label class="font-weight-bold text-dark text-2">Subject</label>
						<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<label class="required font-weight-bold text-dark text-2">Message</label>
						<textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
					</div>
				</div>
			</form>

		</div>
	</div>
	<div class="row mb-5">
		<div class="col-lg-4">

			<div class="overflow-hidden mb-3">
				<h4 class="pt-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200" data-plugin-options="{'accY': -200}">Get in <strong>Touch</strong></h4>
			</div>
			<div class="overflow-hidden mb-3">
				<p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400" data-plugin-options="{'accY': -200}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius.</p>
			</div>
			<div class="overflow-hidden">
				<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600" data-plugin-options="{'accY': -200}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius.</p>
			</div>

		</div>
		<div class="col-lg-4 offset-lg-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">

			<h4 class="pt-5">Our <strong>Office</strong></h4>
			<ul class="list list-icons list-icons-style-3 mt-2">
				<li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> 1234 Street Name, City Name</li>
				<li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong> (123) 456-789</li>
				<li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
			</ul>

		</div>
		<div class="col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" data-plugin-options="{'accY': -200}">

			<h4 class="pt-5">Business <strong>Hours</strong></h4>
			<ul class="list list-icons list-dark mt-2">
				<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
				<li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
				<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
			</ul>

		</div>
	</div>

</div>