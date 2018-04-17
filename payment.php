<!DOCTYPE html>
<html lang="en">
<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Jason Ang Chia Wuen">
	<meta name="description" content="Website for PMP">
	<meta name="keywords" content="PMP, party">
</head>
<script>
	/* modify this to change the title */
	document.title = "Payment | Plan My Party!";
	
	/* modify the href to link to whatever css you want */
	var head = document.getElementsByTagName('head')[0];
	var pageCss = document.createElement('link');
	pageCss.id = 'pagecss';
	pageCss.rel = 'stylesheet';
	pageCss.type = 'text/css';
	pageCss.href = '/index_style.css';
	pageCss.media = 'all';
	head.appendChild(pageCss);
	
</script>

<body class="payment">
	<nav>
		<ul class="main_nav">
			<li>Pricing</li>
			<li>My bookings</li>
			<li>Review</li>
			<li>About</li>
			<li>Contact us</li>
			<li>Work for us</li>
		</ul>
		
		<ul class="second_nav">
			<li>Colour themes</li>
			<li>Log in / Sign up</li>
		</ul>
	</nav>
	
	<hr>
	
	<header>
		<h2>Payment</h2>
		<p>In PMP, we accept a deposit of 50% prior to the event for first time customers and 30% for regular customers.</p>
	</header>
	
	<hr>
	
	<form name="payment_method" method="post" enctype="text/plain">
		<p>Choose Payment Method:</p>
		
		<p>Visa, MasterCard, PayPal</p>
		
		<p>Name on card:</p>
		<input type="text" name="name">
		
		<p>Card Number:</p>
		<input type="text" name="number">
		
		<p>CW</p>
		<input type="text" name="CW">
		

</body>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>
</html>