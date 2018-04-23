<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Contact Us | Plan My Party!";
	
	/* modify the href to link to whatever css you want */
	var head = document.getElementsByTagName('head')[0];
	var pageCss = document.createElement('link');
	pageCss.id = 'pagecss';
	pageCss.rel = 'stylesheet';
	pageCss.type = 'text/css';
	pageCss.href = '/styles.css';
	pageCss.media = 'all';
	head.appendChild(pageCss);
	
</script>
<article>
	<div>
	<h1 style="text-align:center;">Contact Us</h1>
	
	<div class="w3-panel w3-margin w3-theme-l3 w3-padding-16">
	<h2>Hotline</h2>
	<p>Call us with this number: <a href="tel:123456789">123456789</a></p>
	<p>You can use this number too: <a href="tel:987654321">987654321</a></p>
	</div>
	
	<div class="w3-panel w3-margin w3-theme-l3 w3-padding-16">
	<h2>Our Branches</h2>
	<p>Wisma Saberkas, 3, Jalan Tun Abang Haji Openg, 93150 Kuching, <strong>Sarawak</strong></p>
	<p>Kuala Lumpur City Centre, 50088 Kuala Lumpur, <strong>Wilayah Persekutuan Kuala Lumpur</strong></p>
	<p>Lot PT 1485 Jalan Padang Hiliran Chabang 3 Kuala Terengganu, 21000 Kuala Terengganu, <strong>Terengganu</strong></p>
	<p>BLOK 4B-40-68,, JALAN RUMBIA KOMPLEKS BUKIT JAMBUL, Kampung Seberang Paya, 11900 Bayan Lepas, <strong>Penang</strong></p>
	</div>
	
	<div class="w3-panel w3-margin w3-theme-l3 w3-padding-16">
	<h2>Email</h2>
	<p>Email us at <a href="mailto:thisfake@nottrue.com">thisfake@nottrue.com</a></p>
	<p>You can also try <a href="mailto:whydoukeeptrying@sthap.com">whydoukeeptrying@sthap.com</a></p>
	</div>
	
	<div class="w3-panel w3-margin w3-theme-l3 w3-padding-16">
	<h2>Social platforms</h2>
	<p><a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
	<p><a href="https://www.instagram.com/?hl=en" target="_blank">Instagram</a></p>
	<p><a href="https://twitter.com/?lang=en" target="_blank">Twitter</a></p>
	</div>
	</div>
</article>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>
