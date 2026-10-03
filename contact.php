<?php include('head.php'); include('menu.php'); ?>

<div class="blogs-page-wrapper">

	<!-- Hero / Breadcrumb Section -->
	<section class="slider-home-alfawad breadcrumb-part-innerpages">
		<div class="slider-part"> <img src="assets/images/breadcrumb/1.png" class="w-100 ">
			<div class="slider-content">
				<div class="container">
					<div class="row slider-row align-items-end">
						<div class="col-md-5">
							<div class="slider-content-left">
								<h6>ALFAWAD
Engineering & Construction</h6>
								<h2><span>Build your biggest </span><br>projects with us</h2></div>

						</div>
						<div class="col-md-4">
							<div class="slider-content-right">
								<p>Leading construction establishment with<span>  ISO 9001:2015 </span>  and ISO 140001:2015 Quality and Environmental System.</p> 

							
								<a href="about.php" class="btn-main-white">Explore More</a> 
								<a href="contact.php" class="btn-main-transparent">Reach Out</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
/*--- Contact Form PHP Handler ---*/
$contact_success = false;
$contact_error   = false;

if (isset($_POST['contact_submit'])) {
	$ct_name    = htmlspecialchars(trim($_POST['ct_name'] ?? ''));
	$ct_surname = htmlspecialchars(trim($_POST['ct_surname'] ?? ''));
	$ct_email   = htmlspecialchars(trim($_POST['ct_email'] ?? ''));
	$ct_number  = htmlspecialchars(trim($_POST['ct_number'] ?? ''));
	$ct_message = htmlspecialchars(trim($_POST['ct_message'] ?? ''));

	if (!empty($ct_name) && !empty($ct_surname) && !empty($ct_email) && !empty($ct_number) && !empty($ct_message)) {
		/*
		--- Uncomment to send email ---
		$to      = "info@alfawad.com";
		$subject = "New Contact Message from $ct_name $ct_surname";
		$body    = "Name: $ct_name $ct_surname\n\nEmail: $ct_email\nNumber: $ct_number\nMessage:\n$ct_message";
		$headers = "From: noreply@alfawad.com";
		mail($to, $subject, $body, $headers);
		*/
		$contact_success = true;
	} else {
		$contact_error = true;
	}
}
?>

<div class="contact-page-wrapper">

	<!---breadcrumb trail--->
	<div class="container-onee">
		<div class="contact-breadcrumb">
			<span><a href="index.php">Home</a></span>
			<span class="contact-breadcrumb-sep">/</span>
			<span class="contact-breadcrumb-current">Get In Touch</span>
		</div>
	</div>

	<!---contact main section--->
	<section class="contact-main-sec">
		<div class="container-onee">
			<div class="row contact-main-row">

				<!---left col: heading + description + form--->
				<div class="col-lg-5 col-md-12">
					<div class="contact-left-wrap">

						<div class="contact-heading-wrap">
							<h1 class="contact-main-h1"><span class="contact-h1-black">GET IN</span> <span class="contact-h1-grey">TOUCH</span></h1>
							<p class="contact-desc">Reach out to our dedicated engineering and support team today to discuss your upcoming industrial build or facility maintenance requirements. </p>
						</div>

						<!---success/error alerts--->
						<?php if ($contact_success): ?>
							<div class="contact-alert-success">✓ Your message has been sent successfully. We'll get back to you soon!</div>
						<?php endif; ?>
						<?php if ($contact_error): ?>
							<div class="contact-alert-error">✕ Please fill in all fields before submitting.</div>
						<?php endif; ?>

						<form action="" method="POST" class="contact-form">
							<div class="contact-form-group">
								<label for="ct_name">NAME</label>
								<input type="text" id="ct_name" name="ct_name" placeholder="Your Full Name" value="<?php echo isset($_POST['ct_name']) ? htmlspecialchars($_POST['ct_name']) : ''; ?>" required>
							</div>

							<div class="contact-form-group">
								<label for="ct_surname">SURNAME</label>
								<input type="text" id="ct_surname" name="ct_surname" placeholder="Your Surname" value="<?php echo isset($_POST['ct_surname']) ? htmlspecialchars($_POST['ct_surname']) : ''; ?>" required>
							</div>
                            <div class="contact-form-group">
								<label for="ct_email">Email</label>
								<input type="email" id="ct_email" name="ct_email" placeholder="you@example.com" value="<?php echo isset($_POST['ct_email']) ? htmlspecialchars($_POST['ct_email']) : ''; ?>" required>
							</div>
							<div class="contact-form-group">
								<label for="ct_number">Number</label>
								<input type="text" id="ct_number" name="ct_number" placeholder="Your Phone Number" value="<?php echo isset($_POST['ct_number']) ? htmlspecialchars($_POST['ct_number']) : ''; ?>" required>
							</div>
							<div class="contact-form-group">
								<label for="ct_message">MESSAGE</label>
								<textarea id="ct_message" name="ct_message" rows="5" placeholder="Type your message here"><?php echo isset($_POST['ct_message']) ? htmlspecialchars($_POST['ct_message']) : ''; ?></textarea>
							</div>

							<div class="contact-form-submit-row">
								<button type="submit" name="contact_submit" class="contact-submit-btn">Reach Us</button>
							</div>
						</form>

					</div>
				</div>

				<!---right col: google maps embed--->
				<div class="col-lg-7 col-md-12">
					<div class="contact-map-wrap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3554.6447770386653!2d49.655229275228!3d27.0097844765895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e35a05d808d1873%3A0x5adc15cf89a90bf!2sMecca%20St%2C%20Jubail%20City%20Center%2C%20Al%20Jubayl%2035514%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1790894082893!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
					</div>
					
				</div>

			</div>
		</div>
	</section>

</div>

	<section class="contact-info-section" aria-label="Alfawad contact details">
		<div class="container-onee">
			<div class="contact-info-heading">
				<div>
					<span>CONNECT WITH ALFAWAD</span>
					<h2>Contact details</h2>
				</div>
			</div>
			<div class="contact-info-grid">
				<div class="contact-info-item contact-info-address">
					<span class="contact-info-label">OFFICE</span>
					<p>P.O. Box 10778 / Postal Code 31951 - Jubail,<br>Makka Street, Jubail</p>
				</div>
				<div class="contact-info-item">
					<span class="contact-info-label">PHONE</span>
					<a href="tel:+966133448720">+966 (013) 344 8720</a>
					<a href="tel:+966545929456">+966 545 929 456</a>
				</div>
				<div class="contact-info-item">
					<span class="contact-info-label">EMAIL </span>
					<a href="mailto:info@alfawad.com">info@alfawad.com</a>
					<!--<a href="https://www.alfawad.com" target="_blank" rel="noopener noreferrer">www.alfawad.com</a>-->
				</div>
			</div>
			<div class="contact-info-social">
				<span>Follow us for more</span>
				<div class="contact-info-social-links">
					<a href="https://www.facebook.com/profile.php?id=100040968829809#" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="tji-facebook" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/in/alfawad-engineering-399330a8" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="tji-linkedin" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/alfawadksa/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="tji-instagram" aria-hidden="true"></i></a>
					<a href="https://x.com/AlfawadKsa" target="_blank" rel="noopener noreferrer" aria-label="X"><i class="tji-x-twitter" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!--cta-->
	<section class="cta">
		<div class="container">
			<div class="row cta-row justify-content-center align-items-end">
				<div class="col-md-7">
					<div class="text-headding">
						<h2 class="white">Experience a Thriving <br>Career Journey</h2>
<p>Join a trusted company committed to professionalism, integrity, and ethical business practices.</p>
<h5>Build Your Career. Shape the Future.</h5>
					</div>
				</div>
				<div class="col-md-3"> <a href="" class="btn-main-white">Explore Oppurtunities <i class="tji-arrow-right"></i></a> </div> 
			</div>
		</div>
</section>
			<?php include('footer.php');?>

<?php include('footer.php'); ?>