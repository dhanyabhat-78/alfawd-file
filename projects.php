<?php include('head.php'); include('menu.php');?>
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
<section class="projects-alfawad-home sec-pad">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
    <div class="text-headding four">
        <h2 class="text-center">Our industrial portfolio is <span>a robust </span> and <span> engineering-driven </span> showcase that specializes in highlighting a wide range of executed projects for clients</h2>
<a href="contact.php" class="black-btn-big">get a  quote</a>
    </div></div>
</div>
</div>
</section>
<!---projects---->
<section class="projects-inner-section">

<div class="row justify-content-end ">
				<div class="col-md-6">
                    <img src="assets/images/innrpages/projects.png" class="w-100">
</div>
<div class="col-md-6 g-0">
<div class="project-inner-rihgtwrap">
 <img src="assets/images/innrpages/project1.png" class="w-100">
 <div class="pir-one one">
<h6>We have  satisfied clients</h6>
<h3>300+ </h3>
</div></div>
<div class="project-inner-rihgtwrap one">

 <div class="pir-one two">
<h6>Our on-going projects are</h6>
<h3>38 + </h3>
</div>
 <img src="assets/images/innrpages/project1.png" class="w-100">
</div>
</div>

</div>
</div>
</section>
<section class="lets-work sec-pad">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 class="text-center">Let's Work</h1>
<p class="text-center">We turn technical engineering, robust equipment, and safety-driven execution into projects that align with the right standards, strengthen your site, build lasting infrastructure, and drive measurable industrial growth.</p>
<a href="contact.php" class="black-btn-big">get a  quote</a>
</div>

</div>
</div>
</section>
<!-- Enquiry Form Section -->
    <section class="enquiry-section sec-pad">
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
	<!---our clients--->
	<section class="cleintss-serv-inner-section sec-pad pb-0">
<div class="container-largee-one">
    <div class="text-headding"><h2>Our Partners</h2></div>

		<div class="swiper serv-inner-clinets-slider">
			<div class="swiper-wrapper">
				<div class=" swiper-slide ">
					<div class="client-inner-wrap">VC- 10064913 <img src="assets/images/clients/1.jpg"> </div>
				</div>
			
			<div class=" swiper-slide ">
				<div class="client-inner-wrap">VC-508551 <img src="assets/images/clients/2.jpg"> </div>
			</div>
	
		<div class=" swiper-slide ">
			<div class="client-inner-wrap">VC-5017989 <img src="assets/images/clients/3.jpg"> </div>
		</div>
		<div class=" swiper-slide ">
			<div class="client-inner-wrap">VC- 162782 <img src="assets/images/clients/4.jpg"> </div>
		</div>
	
		<div class=" swiper-slide ">
			<div class="client-inner-wrap"> VC- 3520 <img src="assets/images/clients/5.jpg"> </div>
	
		</div>
		<div class=" swiper-slide ">
			<div class="client-inner-wrap"> VC-3603866 <img src="assets/images/clients/6.jpg"> </div>
		</div>
	
	</div></div>
	</div></div>
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