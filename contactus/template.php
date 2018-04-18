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
	pageCss.href = '/contact_style.css';
	pageCss.media = 'all';
	head.appendChild(pageCss);
	
</script>

<h1>Contact Us</h1>
	
	<hr>
	
	<h2>Hotline</h2>
	<p>Call us with this number: <a href="tel:123456789">123456789</a></p>
	<p>You can use this number too: <a href="tel:987654321">987654321</a></p>
	
	<hr>
	
	<h2>Our Branches</h2>
	<p>Wisma Saberkas, 3, Jalan Tun Abang Haji Openg, 93150 Kuching, Sarawak</p>
	<p>Kuala Lumpur City Centre, 50088 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
	<p>Lot PT 1485 Jalan Padang Hiliran Chabang 3 Kuala Terengganu, 21000 Kuala Terengganu, Terengganu</p>
	<p>BLOK 4B-40-68,, JALAN RUMBIA KOMPLEKS BUKIT JAMBUL, Kampung Seberang Paya, 11900 Bayan Lepas, Penang</p>
	
	<hr>
	
	<h2>Email</h2>
	<p>Email us at <a href="mailto:thisfake@nottrue.com">thisfake@nottrue.com</a></p>
	<p>You can also try <a href="mailto:whydoukeeptrying@sthap.com">whydoukeeptrying@sthap.com</a></p>
	
	<hr>
	
	<h2>Social platforms</h2>
	<p><a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
	<p><a href="https://www.instagram.com/?hl=en" target="_blank">Instagram</p>
	<p><a href="https://twitter.com/?lang=en" target="_blank">Twitter</p>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>