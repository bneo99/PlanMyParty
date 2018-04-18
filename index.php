<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	document.title = "Home | Plan My Party!";
	
</script>

<div id="header" class="w3-container w3-theme-l5">
	<img src="images/logo.png" alt="Company Logo" class="w3-image">
	
	<h1>Plan My Party</h1>
</div>

<section id="review" class="w3-container w3-padding-16 w3-theme-l4" >
<div class="w3-display-container" style="margin:auto; max-width:700px;">
	<h2>Our happy customers</h2>
	
	<!-- todo: change slideshow stuff to directly replace the pics, reviews so the height doesnt change everything the pic has different aspect ratio 
	
	once the todo above is done the buttons can be put back to the left/right of the pic-->
	<div class="w3-black" style="text-align:center;" >

		<div class="w3-display-container mySlides w3-animate-opacity">
			<img src="/images/review_1.jpg" class="w3-image slides">
			<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">"Was a very special party for me. Definently a solid 4 out of 5."</div>
		</div>

		<div class="w3-display-container mySlides w3-animate-opacity">
			<img src="/images/review_2.jpg" class="w3-image slides">
			<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">"Had the best time of my life. Thank you PMP!!"</div>
		</div>

		<div class="w3-display-container mySlides w3-animate-opacity">
			<img src="/images/review_3.jpg" class="w3-image slides">
			<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">"My girls and I enjoyed ourselves that night. 5 out of 5 for me."</div>
		</div>
		<button class="w3-button w3-theme w3-display-left" onclick="changeSlide(-1)">&#10094;</button>
		<button class="w3-button w3-theme w3-display-right" onclick="changeSlide(+1)">&#10095;</button>
	</div>
</div>
</section>

<div class="w3-container w3-padding-16">
	<h2>Too busy to customise?</h2>
	<h3>Choose from our packages</h3>
		
		<span class="w3-button">
		<img src="/images/pax_1.jpg" alt="Simple Plan Image" class="w3-image">
		<p>Simple (10-15 pax)</p>
		</span>
		<span class="w3-button">
		<img src="/images/pax_2.jpg" alt="Regular Plan Image" class="w3-image">
		<p>Regular (16-10 pax)</p>
		</span>
		<span class="w3-button">
		<img src="/images/pax_3.jpg" alt="Extravagant Plan Image" class="w3-image">
		<p>Extravagant (>30 pax)</p>
		</span>
</div>

<div class="w3-container w3-theme-l4">
	<h2>Our partners</h2>
	<h3>The backbone of our services</h3>
	
	<img src="/images/mobydick.png" alt="Logo of third party company" class="w3-image sponsorlogo">
	<img src="/images/foursquares.png" alt="Logo of third party company" class="w3-image sponsorlogo">
	<img src="/images/gentinghighlands.png" alt="Logo of third party company" class="w3-image sponsorlogo">
	<img src="/images/redridinghood.png" alt="Logo of third party company" class="w3-image sponsorlogo">
	<img src="/images/toysrus.png" alt="Logo of third party company" class="w3-image sponsorlogo">
	<img src="/images/rotiboy.png" alt="Logo of third party company" class="w3-image sponsorlogo">

	<img src="/images/chickenriceshop.png" alt="Logo of third party company" class="w3-image sponsorlogo">
	<img src="/images/pepsi.png" alt="Logo of third party company" class="w3-image sponsorlogo">
	<img src="/images/sunway.png" alt="Logo of third party company" class="w3-image sponsorlogo">
	<img src="/images/cocacola.png" alt="Logo of third party company" class="w3-image sponsorlogo sponsorlogo">
	<img src="/images/jamiesequipments.png" alt="Logo of third party company" class="w3-image sponsorlogo">

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

<style> 
/*
do styles in the file directly coz its only on this page 
only add to /styles/style.css if its a global css (applies to all/most pages)
*/
.partners img{
	width: 200px;
	float: left;
	margin: 3% 3.2%;
}

.sponsorlogo{
	height:100px;
	margin:10px;
	text-align:center;
}

.slides{
	max-height:300px;
	width:auto;
}

</style>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>