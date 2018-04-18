<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "About Us | Plan My Party!";
	
	/* modify the href to link to whatever css you want */
	var head = document.getElementsByTagName('head')[0];
	var pageCss = document.createElement('link');
	pageCss.id = 'pagecss';
	pageCss.rel = 'stylesheet';
	pageCss.type = 'text/css';
	pageCss.href = '/about_style.css';
	pageCss.media = 'all';
	head.appendChild(pageCss);
	
</script>

	<div style="margin-left: 10%; margin-right: 10%;">
	<header style="text-align: center;">
		<img class="w3-image w3-mobile" src="../pictures/logo.png" alt="Logo of PMP" style="width: 30%; max-width: 500px;">
		<h1>About Plan My Party (PMP)</h1>
	</header>
		
		<div class="w3-panel w3-margin w3-theme-l3 w3-padding-16" style="margin-top: 2%; margin-bottom: 2%;">
		<h2>How Plan My Party Was Formed</h2>
		<p style="text-align:justify;">Plan My Party (PMP) originated from a formation of group of friends that love partying. The parties that they held were so great, that other people asked them help planning parties for them as well. At first, they did it for amusement purposes, but slowly it turned into an idea. As the group grew older, they decided to form a company that would assist people in planning their parties. The reason they do this is because for them, parties are a meaning of celebration that should not be taken lightly. "A party would only be a party if it was a good one." was the quote the group lived by, which eventually became the company's slogan. The first couple of steps were rough, as they had no sponsers or third party companies. Up to now, the company is still growing and heading towards the right direction as envisioned by the group.</p>
		</div>
		
		<div class="w3-panel w3-margin w3-theme-l3 w3-padding-16" style="margin-top: 2%; margin-bottom: 2%;"> 
		<h2>What are PMP's future plans</h2>
		<p style="text-align:justify;">In the future, PMP would like to expand its business internationally as it presently opens its services for Malaysia only. PMP would also like to have more third party companies to provide required materials for certain parties. The company would also create job opportunities for those that are interested in joining PMP. Currently, they are only looking for anyone that has the burning passion of creating the perfect party.</p>
		</div>
	</div>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>