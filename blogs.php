<?php include('head.php'); include('menu.php'); ?>

<div class="blogs-page-wrapper">

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

	<!-- Section 1: Our Team Is Here -->
	<section class="blog-team-intro-sec">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="blog-team-intro-content">
						<h1 class="blog-team-main-heading">OUR EXPERTISE IS HERE</h1>
						<div class="blog-team-paragraphs">
							<p>Our industrial blog provides detailed insights into modern construction, heavy equipment deployment, and comprehensive plant maintenance across Saudi Arabia. We share expert knowledge regarding rigorous safety standards, technical workforce management, and efficient mechanical execution on site. Explore our regular updates to discover how strategic engineering practices ensure absolute reliability and project success.</p>
							<p>Our technical team continually evaluates the newest methodologies in civil engineering, shutdown logistics, and robust temporary facility management. We discuss proven strategies concerning hazard prevention protocols, material supply chain optimization, and sustainable coastal mangrove plantations. Read our latest articles to understand how rigorous operational oversight guarantees maximum structural integrity and compliance.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 2: Transform Brands Through Creativity -->
	<section class="blog-creativity-sec sec-pad">
		<div class="container">
			<div class="row align-items-start">
				<!-- Left Column: Team Image + 3 Paragraphs -->
				<div class="col-lg-5 col-md-6 mb-4 mb-md-0">
					<div class="blog-cr-left">
						<div class="blog-cr-img-box">
							<img src="assets/images/blogs/team_people.jpg" alt="Our Creative Team" class="w-100 blog-rounded-img">
						</div>
						<div class="blog-cr-left-text">
							<p>We build robust structural facilities for plants, corporations, and expanding industrial sites, blending engineering with proactive safety to help operations stand out in the industrial sector.</p>
							<p>
Our expertise lies in executing structurally sound, safety-focused construction that drives reliability and growth. At ALFAWAD, we are passionate about helping sites differentiate themselves and thrive in the ever-evolving industrial landscape.</p>
							<p>Our expertise lies in delivering mechanically sound, compliance-driven executions that drive reliability and progress. At ALFAWAD, we are passionate about helping projects differentiate themselves and thrive in the ever-demanding industrial landscape.</p>
						</div>
					</div>
				</div>

				<!-- Right Column: Heading + Subtitle + Dark Glowing Card -->
				<div class="col-lg-7 col-md-6">
					<div class="blog-cr-right">
						<div class="text-headding">
							<h2 class="blog-cr-title">Build industries through engineering</h2>
						</div>
						<p class="blog-cr-subtitle">
ALFAWAD is a premier industrial construction establishment committed to executing projects through innovative engineering and robust manpower solutions.</p>
						
						<div class="blog-glow-card">
							<img src="assets/images/blogs/yellow_glow.jpg" alt="Innovative Art" class="w-100 blog-glow-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Enquiry Form Section -->
    <section class="enquiry-section sec-pad pt-0">
        <div class="container">
            <div class="row justify-content-end ">
                <div class="col-md-9">
                    <div class="enquiry-row">
                        <!-- Left Content -->
                        <div class="enquiry-left">
                            <div>
                                <h2 class="enquiry-heading">Let's discuss your project</h2>
                                <p class="enquiry-desc"> Reach out to our dedicated support team to discuss your upcoming industrial build. </p>
                            </div>
                            <div class="enquiry-features">
                                <ul>
                                    <li><span class="check-icon">✓</span> Rapid response times .</li>
                                    <li><span class="check-icon">✓</span> Customized quotes</li>
                                    <li><span class="check-icon">✓</span> Best</li>
                                </ul>
                                <ul>
                                    <li><span class="check-icon">✓</span> Transparent pricing</li>
                                    <li><span class="check-icon">✓</span> Priority support</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Right Form -->
                        <div class="enquiry-right">
                            <form action="" method="POST" class="enquiry-form">
                                <?php
// PHP form handling
if (isset($_POST['submit'])) {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name  = htmlspecialchars($_POST['last_name']);
    $email      = htmlspecialchars($_POST['email']);
    $number     = htmlspecialchars($_POST['number']);
    $address    = htmlspecialchars($_POST['address']);
    $company    = htmlspecialchars($_POST['company']);
    $message    = htmlspecialchars($_POST['message']);
    
    // You can process the form here (e.g., send email, save to database)
    // Example: send email
    /*
    $to = "info@alfawad.com";
    $subject = "New Enquiry from $first_name $last_name";
    $body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nNumber: $number\nAddress: $address\nCompany: $company\nMessage: $message";
    $headers = "From: $email";
    mail($to, $subject, $body, $headers);
    */
    echo "<script>alert('Thank you! Your enquiry has been submitted.');</script>";
}
?>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" id="first_name" name="first_name" placeholder="First name" required> 
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" id="last_name" name="last_name" placeholder="Last name" required> 
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" placeholder="you@company.com" required> 
                                        </div>
                                        <div class="form-group">
                                            <label for="number">Number</label>
                                            <input type="text" id="number" name="number" placeholder="Phone number"> 
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" name="address" placeholder="Your address"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" id="company" name="company" placeholder="Company name"> 
                                        </div>
                                    </div>
                                    <div class="form-row full-width">
                                        <div class="form-group">
                                            <label for="message">Message <span class="optional">(optional)</span></label>
                                            <textarea id="message" name="message" rows="4" placeholder="How can we help you?"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="enquiry-btn">Talk to us</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- Section 4: 4 Services Cards Row -->
	<section class="blog-cards-grid-sec ">
			<div class="row g-4">
				<!-- Card 1: Packaging design text box -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="blog-card-box blog-card-light">
						<div class="blog-card-content-top">
							<h3 class="blog-card-title">Maximizing Site Uptime Through  Equipment Maintenance </h3>
						</div>
						<div class="blog-card-content-bottom">
							<p class="blog-card-para">We maintain uninterrupted progress, maximize operational efficiency </p>
							<a href="#" class="blog-card-link">Learn More</a>
						</div>
					</div>
				</div>

				<!-- Card 2: Disco Fashion Image -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="blog-card-box blog-card-img-box">
						<img src="assets/images/innrpages/blog-sub.png" alt="" class="w-100 blog-card-img">
					</div>
				</div>

				<!-- Card 3: Video production text box -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="blog-card-box blog-card-light">
						<div class="blog-card-content-top">
							<h3 class="blog-card-title">Safety Protocols in  Construction in  Construction</h3>
						</div>
						<div class="blog-card-content-bottom">
							<p class="blog-card-para">Implementing strict hazard prevention protocols for protecting the workforce.</p>
							<a href="#" class="blog-card-link">Learn More</a>
						</div>
					</div>
				</div>

				<!-- Card 4: Blue Abstract 3D Image -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="blog-card-box blog-card-img-box">
						<img src="assets/images/innrpages/blog-sub.png" alt="" class="w-100 blog-card-img">
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