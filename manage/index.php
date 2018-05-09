<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "My Bookings | Plan My Party!";
</script>

<?php
$uname=$_SESSION['userName'];

$mysqli_db_hostname = "localhost";
$mysqli_db_user = "root";
$mysqli_db_passwd = "";
$mysqli_db_database = "test";

$con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_passwd) or die("Could not connect to database");
mysqli_select_db($con, $mysqli_db_database) or die("Could not select database");

$query = "SELECT * FROM orders WHERE uname='$uname' ";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
?>

<div class="w3-container w3-theme-l3">
<h1>My Bookings</h1>
</div>

<div class="w3-container w3-padding-16 w3-theme-l4">
<h2>Current Orders</h2>

<table class="w3-table w3-theme-l3 w3-striped w3-bordered w3-border">
<tr>
	<th>Order Number</th>
	<th>Description</th>
	<th>Progress</th>
	<th>Action</th>
</tr>
<?php
	while($row=mysqli_fetch_array($result)) {
		$ordernum = $row['ordernum'];
		$desc = $row['description'];
		//get data from JSON file
		$jsonfile = file_get_contents("http://localhost/orders/order_".$ordernum.".json");
		$json = json_decode($jsonfile, true); // decode the JSON into an associative array

		//count the progress of the party based on the data on the JSON file
		$progress = 0;
		foreach ($json["update"] as $value) {
			if($value["percent"]){
			$progress += $value["percent"];
			}
		}
		$f_ordernum = sprintf("%05d", $ordernum);
		echo "<tr>";
		echo "	<td>$f_ordernum</td>";
		echo "	<td>$desc</td>";
		echo "	<td>$progress%</td>";
		if ($row['status'] == "waiting for payment"){
			echo "	<td><a href=\"/bookings/payment.php?ordernum=$ordernum\">Pay Deposit</a> ";
		}
		else {
			echo "	<td><a href=\"/bookings/progress.php?ordernum=$ordernum\">Check Progress</a> ";
		}
		echo "</tr>";
	}
?>
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