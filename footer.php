<footer class="alfawad-footer-homepage">
	<div class="container">
		<div class="row footer-row">
			<div class="col-md-4">
        <div class="footer-left">
      <img src="assets/images/header.svg" class="footer-logo" alt="Alfawad Logo">
				<p> Industry best solution across the kingdom.</p>
				<!--email-->
				<div class="form-input ">
					<div class="form-input-inner">
						<input type="email" name="cfEmail2" placeholder="Enter email" />
						<button class="submit">Submit </button>
					</div>
				</div></div></div>
				<div class="col-md-8">
					<div class="footer-right">
						<div class="first-flex">
							<h4>Explore</h4>
							<ul class="list-footer-items">
								<li><a href="about.php">Overview</a></li>
								<li> <a href="projects.php">Project</a></li>
								<li><a href="clients.php">Clients</a></li>
								<li><a href="blogs.php" >Blog</a></li>
							</ul>
						</div>
						<div class="first-flex">
							<h4>Resources</h4>
							<ul class="list-footer-items">
								  <li><a href="whychooseus.php">Why Choose Us</a></li>
                      <li><a href="ceo-message.php">CEO Message</a></li>
                      <li><a href="quality-policy.php">Quality Policy</a></li>
                      <li><a href="hse-safety.php">HSE Policy</a></li>
							</ul>
						</div>
						<div class="first-flex">
							<h4>Contact</h4>
							<ul class="list-footer-items">
								<li>our stories</li>
								<li>affilicatities</li>
								<li>explore</li>
							</ul>
						</div>
						<div class="first-flex">
							<h4>Socials</h4>
							<ul class="list-footer-items">
								<li><a href="https://www.instagram.com/alfawadksa/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
								<li><a href="https://www.facebook.com/profile.php?id=100040968829809#" target="_blank" rel="noopener noreferrer">Facebook</a></li>
								<li><a href="https://x.com/AlfawadKsa" target="_blank" rel="noopener noreferrer">Twitter</a></li>
								<li><a href="https://www.linkedin.com/in/alfawad-engineering-399330a8" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
      <div class="row footer-bottom">
        <div class="col-md-6">
          <p>© 2026 Alfawad. All rights reserved.</p>
        </div>
        <div class="col-md-6">
          <ul class="footer-bottom-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
</div>
</footer>
</div>
</div>
<!-- JS here -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/gsap-scroll-trigger.min.js"></script>
<script src="assets/js/gsap-scroll-smoother.js"></script>
<script src="assets/js/gsap-scroll-to-plugin.min.js"></script>
<script src="assets/js/gsap-split-text.min.js"></script>
<script src="assets/js/gsap-custom-easc.min.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/magiccursor.js"></script>
<script src="assets/js/venobox.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/three.js"></script>
<script src="assets/js/hover-effect.umd.js"></script>
<script src="assets/js/webgl.js"></script>
<script src="assets/js/mangnific-popup.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/vanilla-tilt.min.js"></script>
<script src="assets/js/imagesloaded-pkgd.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/preloader.js"></script>
<script src="assets/js/gsap-custom-animations.js"></script>
<script src="assets/js/window-shape-animation.js"></script>
<script src="assets/js/main.js"></script>
<script type="module" src="assets/js/tj-img-distortion.js"></script>
<script type="module" src="assets/js/index.js"></script>

<script>
	/*faq section service inner toggle*/
document.querySelectorAll('.faq-section-service-inner .faq-si-question').forEach(function(item){
	item.addEventListener('click',function(){
		var parent = this.closest('.faq-si-item');
		var isActive = parent.classList.contains('active');
		document.querySelectorAll('.faq-section-service-inner .faq-si-item').forEach(function(el){
			el.classList.remove('active');
		});
		if(!isActive){
			parent.classList.add('active');
		}
	});
});
</script>
<script>
$('.popup-gallery').magnificPopup({
	delegate: 'a',
	type: 'image',
	tLoading: 'Loading image #%curr%...',
	mainClass: 'mfp-img-mobile',
	gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
	}
});
</script>
</body>

</html>