<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "My Bookings | Plan My Party!";
	
	/* modify the href to link to whatever css you want */
/* 	var head = document.getElementsByTagName('head')[0];
	var pageCss = document.createElement('link');
	pageCss.id = 'pagecss';
	pageCss.rel = 'stylesheet';
	pageCss.type = 'text/css';
	pageCss.href = '/index_style.css';
	pageCss.media = 'all';
	head.appendChild(pageCss); */
	
</script>

<div class="w3-container w3-theme-l3">
<h1>My Bookings</h1>
</div>

<div class="w3-container w3-theme-l4">
<h2>Current Orders</h2>

<table class="w3-table w3-theme-l3 w3-striped w3-bordered w3-border">
<tr>
	<th>Order Number</th>
	<th>Description</th>
	<th>Progress</th>
	<th>Action</th>
</tr>
<tr>
	<td>000002</td>
	<td>Josh's Birthday Party</td>
	<td>Waiting for deposit</td>
	<td><a href="/bookings/payment.php">Pay Deposit</a> <a href="/bookings/amend.php">Amend</a> <a href="/bookings/cancel.php">Cancel</a></td>
</tr>
<tr>
	<td>000001</td>
	<td>party</td>
	<td>50%</td>
	<td><a href="/bookings/progress.php">Check Progress</a> <a href="/bookings/amend.php">Amend</a> <a href="/bookings/cancel.php">Cancel</a></td>
</table>
</div>

<style>
th, td {
	text-align:center;
}
</style>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>