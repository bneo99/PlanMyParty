<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<script>
	/* modify this to change the title */
	document.title = "Payment | Plan My Party!";
</script>

<?php
$ordernum = intval($_GET['ordernum']);

$mysqli_db_hostname = "localhost";
$mysqli_db_user = "root";
$mysqli_db_passwd = "";
$mysqli_db_database = "test";

$con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_passwd) or die("Could not connect to database");
mysqli_select_db($con, $mysqli_db_database) or die("Could not select database");

//get name of party
$query = "SELECT price FROM orders WHERE ordernum=$ordernum ";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$price = $row['price'];
$depositpercent = 30;
$deposit = $price * $depositpercent/100;
?>

<header class="w3-container w3-theme-d2">
	<h1>Payment</h1>
	<p style="text-align:center;">
	In PMP, we accept a deposit of 50% prior to the event for first time customers and 30% for regular customers.</p>
</header>

<!-- this is supposed to read from database but we havent have the booking stuff setup so meh 
TODO: 
- check for new customers (never booked)
- or just ditch the backend coz whats important is the UI
-->
<div class="w3-container w3-padding-16 w3-theme-d4">
	<?php echo "<h3>Total amount: RM " . number_format($price, 2, '.', '') . "</h3>"; ?>
	<?php echo "<h3>Deposit(".$depositpercent."%): RM " . number_format($deposit, 2, '.', '') . "</h3>"; ?>
	<h2>To pay: RM <?php echo number_format($deposit, 2, '.', ''); ?></h2>
	<p style="text-align:center;">
	Please note that you have to pay the deposit in full before we can start processing your order.
	</p>
</div>

<form name="payment_details" method="post" action="payment_complete.php">
<div class="w3-container w3-padding-16 w3-theme-l4">
	<h4>Choose Payment Method</h4>
	Click on your preferred payment method
	
	<div class="w3-bar">
	<button type="button" onClick="openPayWith('paypal')" class="w3-bar-item w3-button w3-theme-l3">
		<img src="/images/paypal.png" alt="Paypal" class="paymentlogo w3-image"/>
	</button>
	
	<button type="button" onClick="openPayWith('bitcoin')" class="w3-bar-item w3-button w3-theme-l3">
		<img src="/images/bitcoin.png" alt="Bitcoin" class=" paymentlogo w3-image"/>
	</button>
	
	<button type="button" onClick="openPayWith('creditcard')" class="w3-bar-item w3-button w3-theme-l3">
		<img src="/images/visa.png" alt="Visa" class="paymentlogo w3-image"/>
		<img src="/images/mastercard.png" alt="MasterCard" class="paymentlogo w3-image"/>
	</button>
	</div>
	<br/>
	
	<div id="paypal" class=" paymentmethod" style="display:none;">
		<label>Paypal Email:</label><input class="w3-input" type="text" name="paypal_email">
		<p>
		Note: When you click on Proceed, you will be redirected to Paypal's page to complete your payment.
		</p>
	</div>
	
	<div id="bitcoin" class=" paymentmethod" style="display:none;">
		<label>Wallet Address:</label><input class="w3-input" type="text" name="bitcoin_addr">
		<label>Transaction ID (txid):</label><input class="w3-input" type="text" name="bitcoin_txid">
		<?php
		$pricebtc = $price*0.000032;
		echo "<p>RM $price = $pricebtc BTC (23/5/18)</p>";
		?>
		<p>Pay to: 16wztd2HfKdzkxEg6jH8zh7FPZEcd7gpXW</p>
		<p>Note: Please pay to the address above and enter your paying wallet address and the transaction id.</p>
	</div>
	
	<div id="creditcard" class=" paymentmethod" style="display:block;">
		<label>Name on card:</label><input class="w3-input" type="text" name="card_name">
		<label>Card Number:</label><input class="w3-input" type="text" name="number">
		<label>CVV:</label><input class="w3-input" type="text" name="cvv">
		<label>Expiry Date:</label><input class="w3-input" type="text" name="expiry" placeholder="MM/YY">
		<p>
		Note: When you click on Proceed, you will be redirected to your bank's transaction page to complete your payment.
		</p>
	</div>
</div>

<div class="w3-container w3-padding-16 w3-theme-l2">
	<h4>Biling details:</h4>
	<p>
	<label>Title:</label>
	<select name="title" class="w3-input">
		<option value="mr">Mr</option>
		<option value="ms">Ms</option>
		<option value="sir">Sir</option>
		<option value="dr">Dr</option>
		<option value="madam">Madam</option>
		<option value="duke">Duke</option>
		<option value="duchess">Duchess</option>
		<option value="earl">Earl</option>
		<option value="count">Count</option>
		<option value="countess">Countess</option>
		<option value="lord">Lord</option>
		<option value="high_chancellor">High Chancellor</option>
	</select>
	</p><p>
	<label>First name:</label><input type="text" name="first_name" class="w3-input">
	</p><p>
	<label>Last name:</label><input type="text" name="last_name" class="w3-input">
	</p><p>
	<label>Address:</label><input type="text" name="address" class="w3-input">
	</p><p>
	<label>City:</label><input type="text" name="city" class="w3-input">
	</p><p>
	<label>Postcode:</label><input type="text" name="postcode" class="w3-input">
	</p><p>
	<label>State:</label><select name="state" class="w3-input">
		<option value="sarawak">Sarawak</option>
		<option value="sabah">Sabah</option>
		<option value="penang">Penang</option>
		<option value="selangor">Selangor</option>
		<option value="johor">Johor</option>
		<option value="malacca">Malacca</option>
		<option value="perak">Perak</option>
		<option value="kedah">Kedah</option>
		<option value="pahang">Pahang</option>
		<option value="kelantan">Kelantan</option>
		<option value="terengganu">Terengganu</option>
		<option value="negeri_9">Negeri Sembilan</option>
		<option value="perlis">Perlis</option>
	</select>
	</p><p>
	<label>Mobile number:</label><input type="text" name="mobile_num" class="w3-input">
	</p><p>
	<label>Email address:</label><input type="email" name="email" class="w3-input">
	</p><p>
	<label>Confirm email address:</label><input type="email" name="confirm_email" class="w3-input">
	</p><p>
	<input type="checkbox" name="informed" checked="checked" class="w3-check"><label> Yes, I want to receive announcements and promotions from PMP</label>
	</p>
</div>

<div class="w3-container w3-padding-16 w3-theme-l4">
	<h2>Terms & Conditions</h2>
	<p style="text-align:justify;">PMP is not responsible for any damage that may occur during the party planning process. This also includes the time when the party is being conducted. Any claim financially towards PMP will be rejected immediately without reason. If attempt to threaten, PMP will attempt to sue the prosecutor without hesitation. Your understanding is highly appreciated.</p>
	<input type="checkbox" name="tnc" class="w3-check" required="required"><label> Yes, I have read the terms and conditions.</label>
	
	<input name="ordernum" type="hidden" value="<?php echo $ordernum; ?>"></input>
	<p>
	<input type="button" value="Cancel booking" class="w3-button w3-theme-l2">
	<input type="submit" value="Proceed" class="w3-button w3-theme-d3">
	</p>
</div>
</form>
<script>

function openPayWith(paymentMethod){
	var i;
	var element = document.getElementById(paymentMethod);
	var x = document.getElementsByClassName("paymentmethod");
	
	for (i=0;i<x.length;i++){
		 x[i].style.display = "none"; 
	}
	element.style.display = "block";
}

</script>

<style>
.paymentlogo {
	height:25px;
}
input, select {
	max-width:15cm;
}
</style>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>