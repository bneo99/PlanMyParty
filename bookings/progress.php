<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>

<?php
$ordernum = intval($_GET['ordernum']);
?>

<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Check Party Progress | Plan My Party!";
</script>

<?php
date_default_timezone_set('Asia/Kuching'); // set timezone

$mysqli_db_hostname = "localhost";
$mysqli_db_user = "root";
$mysqli_db_passwd = "";
$mysqli_db_database = "test";

$con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_passwd) or die("Could not connect to database");
mysqli_select_db($con, $mysqli_db_database) or die("Could not select database");

//get name of party
$query = "SELECT description FROM orders WHERE ordernum=$ordernum ";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$description = $row['description'];

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

//for testing
//echo '<pre>' . print_r($json, true) . '</pre>';
?>

<div class="w3-container w3-theme-l3">
<h1>Check Party Progress</h1>
</div>

<div class="w3-container w3-padding w3-theme-l4">
<h2>Event Name: <?php echo $description; ?></h2>

<div class="w3-grey w3-margin">
<div id="progress_bar" class="w3-container w3-theme w3-center w3-padding" style="width:1%; white-space: nowrap;"><span id="progress_num">Progress: 0%</span></div>
</div>

<table class="w3-table w3-theme-l3 w3-striped w3-bordered w3-border">
<tr>
	<th>Time</th>
	<th>Description</th>
	<th>Progress</th>
</tr>
<?php		
foreach(array_reverse($json["update"]) as $array){
	$timestamp = $array['time']; //unix time
	$desc = $array['desc'];
	$percent = $array['percent'];
	echo "<tr>";
	echo "	<td>". date("Y-m-d H:i:s", $timestamp) ."</td>";
	echo "	<td>$desc</td>";
	echo "	<td>$percent%</td>";
	echo "</tr>";
}
?>
</table>

</div>

<script>
function moveBar() {
    var elem = document.getElementById("progress_bar");
	var num = document.getElementById("progress_num");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= <?php echo $progress;?>) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
			num.innerHTML = "Progress: " + width * 1  + '%';
        }
    }
}

window.onload = moveBar;
</script>

<style>
th, td {
	text-align:center;
}
</style>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>