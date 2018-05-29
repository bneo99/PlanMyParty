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
$jsonfile = file_get_contents("../orders/order_".$ordernum.".json");
$json = json_decode($jsonfile, true); // decode the JSON into an associative array

$event_name = $json["details"][0]['event_name'];
$date = $json["details"][0]['event_date'];
$theme = $json["details"][0]['theme'];
$pax = $json["details"][0]['pax'];
$venue = $json["details"][0]['venue'];
$food = $json["details"][0]['food'];
$dessert = $json["details"][0]['dessert'];
$equipment = $json["details"][0]['equipment'];
$decor = $json["details"][0]['decor'];
$misc = $json["details"][0]['misc'];
$personnel = $json["details"][0]['personnel'];
$price = $json["details"][0]['price'];

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

//count the progress of the party based on the data on the JSON file
$progress = 0;
foreach ($json["update"] as $value) {
	if($value["percent"]){
    $progress += $value["percent"];
	}
}

?>

<div class="w3-container w3-theme-l3">
	<h1>Check Party Progress</h1>
</div>

<div class="w3-container w3-padding w3-theme-l4">
<div style="text-align:center">
<button id="showHideButton" type="button" onclick="showHideSummary()" class="w3-button w3-theme-l3" >Show Booking Summary</button>
</div>
<div id="summary" class="w3-container w3-padding-16 w3-hide">
<table class="w3-table w3-theme-l3 w3-striped w3-bordered w3-border">
	<th></th>
	<th>Description</th>
	<tr><td>Name of party</td><td><?php echo $event_name; ?></td></tr>
	<tr><td>Date</td><td><?php echo $date; ?></td></tr>
	<tr><td>Party theme</td><td><?php echo ucfirst($theme); ?></td></tr>
	<tr><td>No. of participants</td><td><?php echo $pax; ?></td></tr>
	<tr><td>Venue</td><td><?php echo $venue; ?></td></tr>
	<tr><td>Food</td><td><?php echo ucfirst($food); ?></td></tr>
	<tr><td>Desserts</td><td><?php echo str_replace(",", "<br/>", $dessert); ?></td></tr>
	<tr><td>Equipment</td><td><?php echo str_replace(",", "<br/>", $equipment); ?></td></tr>
	<tr><td>Decors</td><td><?php echo str_replace(",", "<br/>", $decor); ?></td></tr>
	<tr><td>Miscellaneous</td><td><?php echo str_replace(",", "<br/>", $misc); ?></td></tr>
	<tr><td>Professional personnel</td><td><?php echo str_replace(",", "<br/>", $personnel); ?></td></tr>
	<tr><td>Total price</td><td><?php echo "RM " . $price; ?></td></tr>
</table>
</div>
<h2>Event Name: <?php echo $description; ?></h2>

<div class="w3-grey w3-margin">
<div id="progress_bar" class="w3-container w3-theme w3-center w3-padding" style="width:1%; white-space: nowrap;"><span id="progress_num">Progress: 0%</span></div>
</div>

<table class="w3-table w3-theme-l3 w3-striped w3-bordered w3-border">
<tr>
	<th>Time</th>
	<th>Description</th>
</tr>
<?php		
foreach(array_reverse($json["update"]) as $array){
	$timestamp = $array['time']; //unix time
	$desc = $array['desc'];
	$percent = $array['percent'];
	echo "<tr>";
	echo "	<td>". date("Y-m-d H:i:s", $timestamp) ."</td>";
	echo "	<td>$desc</td>";
	echo "</tr>";
}
?>
</table>

</div>

<script>
function showHideSummary(){
	var showHideButton = document.getElementById('showHideButton');
	var summaryDiv = document.getElementById('summary');
	
	showHideByID("summary");
	
	if (summaryDiv.className.indexOf("w3-show") == -1) {
		showHideButton.innerHTML = "Show Booking Summary";
	} else { 
		showHideButton.innerHTML = "Hide Booking Summary";
	}
}

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