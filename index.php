<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	document.title = "Home | Plan My Party!";
	
	var head = document.getElementsByTagName('head')[0];
	var pageCss = document.createElement('link');
	pageCss.id = 'pagecss';
	pageCss.rel = 'stylesheet';
	pageCss.type = 'text/css';
	pageCss.href = '/index_style.css';
	pageCss.media = 'all';
	head.appendChild(pageCss);
	
</script>

	<div class="w3-container w3-theme-d3">
		<img src="pictures/logo.png" alt="Company Logo" class="w3-image">
		
		<h1>Plan My Party</h1>
		
		<div class="options">
			<p>Our Packages</p>
			<p>Customise Events</p>
		</div>
	</div>
	
	<section class="w3-container w3-padding-16 w3-theme-l4" >
	<div class="w3-display-container reviews" style="margin:auto; max-width:700px;">
		<h2>Our happy customers</h2>
		
		<button class="w3-button w3-theme w3-display-topleft" onclick="changeSlide(-1)">&#10094;</button>
		<button class="w3-button w3-theme w3-display-topright" onclick="changeSlide(+1)">&#10095;</button>
		
		<!-- todo: change slideshow stuff to directly replace the pics, reviews so the height doesnt change everything the pic has different aspect ratio 
		
		once the todo above is done the buttons can be put back to the left/right of the pic-->
		<div class="slideshow-container w3-black">

			<div class="w3-display-container mySlides fade">
				<img src="pictures/review_1.jpg" class="w3-image slides">
				<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">"Was a very special party for me. Definently a solid 4 out of 5."</div>
			</div>

			<div class="w3-display-container mySlides fade">
				<img src="pictures/review_2.jpg" class="w3-image slides">
				<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">"Had the best time of my life. Thank you PMP!!"</div>
			</div>

			<div class="w3-display-container mySlides fade">
				<img src="pictures/review_3.jpg" class="w3-image slides">
				<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">"My girls and I enjoyed ourselves that night. 5 out of 5 for me."</div>
			</div>
		</div>
	</div>
	</section>
	
	<div class="w3-container w3-padding-16 pax_selection">
		<h2>Too busy to customise?</h2>
		<h3>Choose from our packages</h3>
			
			<span class="w3-button pax_1">

			<img src="pictures/pax_1.jpg" alt="Simple Plan Image" class="w3-image">
			<p>Simple (10-15 pax)</p>
			</span>
			<span class="w3-button pax_2">
			<img src="pictures/pax_2.jpg" alt="Regular Plan Image" class="w3-image">
			<p>Regular (16-10 pax)</p>
			</span>
			<span class="w3-button pax_3">
			<img src="pictures/pax_3.jpg" alt="Extravagant Plan Image" class="w3-image">
			<p>Extravagant (>30 pax)</p>
			</span>
	</div>
	
	<div class="w3-container w3-theme-l4 partners">
		<h2>Our partners</h2>
		<p>The backbone of our services</p>
		
		<img src="pictures/sponsor_1.png" alt="Logo of third party company" class="w3-image sponsorlogo">
		<img src="pictures/sponsor_2.png" alt="Logo of third party company" class="w3-image sponsorlogo">
		<img src="pictures/sponsor_3.png" alt="Logo of third party company" class="w3-image sponsorlogo">
		<img src="pictures/sponsor_4.png" alt="Logo of third party company" class="w3-image sponsorlogo">
		<img src="pictures/sponsor_5.png" alt="Logo of third party company" class="w3-image sponsorlogo">
		<img src="pictures/sponsor_6.png" alt="Logo of third party company" class="w3-image sponsorlogo">
		

		<img src="pictures/sponsor_7.png" alt="Logo of third party company" class="w3-image seventh_pic sponsorlogo">
		<img src="pictures/sponsor_8.png" alt="Logo of third party company" class="w3-image sponsorlogo">
		<img src="pictures/sponsor_9.png" alt="Logo of third party company" class="w3-image sponsorlogo">
		<img src="pictures/sponsor_10.png" alt="Logo of third party company" class="w3-image sponsorlogo sponsorlogo">
		<img src="pictures/sponsor_11.png" alt="Logo of third party company" class="w3-image sponsorlogo">

	</div>
	
	<script>
	var slideIndex = 0;
	showSlides(slideIndex);

	function changeSlide(n){
		showSlides(slideIndex += n);
	}
	
	function nextSlide(){
		showSlides(slideIndex += 1);
	}
	
	function showSlides(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		if (n > x.length) {slideIndex = 1}
		if (n < 1) {slideIndex = x.length} ;
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		x[slideIndex-1].style.display = "block"; 
		
	}
	
	/* wait for 4 seconds  */
	setInterval(nextSlide, 4000);
	
	</script>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>