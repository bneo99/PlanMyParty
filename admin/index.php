<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Admin Dashboard | Plan My Party!";
</script>

<?php
$mysqli_db_hostname = "localhost";
$mysqli_db_user = "root";
$mysqli_db_passwd = "";
$mysqli_db_database = "test";

$con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_passwd) or die("Could not connect to database");
mysqli_select_db($con, $mysqli_db_database) or die("Could not select database");
?>


<style>
th, td {
	text-align:center;
}

.textbox{
	text-align: center;
}

.textbox textarea:focus{
	border: 1px solid blue;
}

.description{
	text-align: justify;
	line-height: 150%;
	margin-left: 20%;
	margin-right: 20%;
}

.buttons{
	text-align: center;
}

.buttons input{
	margin-left: 1%;
	margin-right: 1%;
}

</style>

<div class="w3-container w3-theme-l3">
<h1>Admin Dashboard</h1>
</div>

<div class="w3-container w3-padding-16 w3-theme-l4">
	<h2>Announcement Updates</h2>
	<form>
		
		<div class="textbox"><textarea name="announcements" rows="5" cols="50">Write announcements here to be updated to the sever.</textarea></div>
		
		<p class="buttons"><input type="submit" value="Submit Announcements" onclick="submitAnnouncement()" /><input type="reset" value="Reset Text Box" /></p>
	</form>
</div>

<div>
	<h2>Content Management System</h2>
	<p class="description">PMP uses a Content Management System (CMS) to allow admins to edit contents on the website with ease. One can use this system even without possessing web coding knowledge. To edit contents in the website, simply click on the button below to do so. Once you're done, deactivate CMS by clicking the same button again.</p>
	<p class="buttons"><button id="button" value="off" onclick="clickCMS()">Enable CMS / Disable CMS</button></p>
</div>

<script>
	/* Function for announcement button */
	function submitAnnouncement(){
		alert("Announcement details have been submitted and the server will process the information. ETA for announcement to be displayed on website: 10-20 minutes.");
	}
	
	/* Function for CMS button */
	function clickCMS(){
		var cms_status = document.getElementById("button").value;
		
		if (cms_status == "off"){
			document.getElementById("button").value = "on";
			alert("CMS is activated.");
		}
		else{
			document.getElementById("button").value = "off";
			alert("CMS is disabled.");
		}
	}
</script>

<div class="w3-container w3-padding-16 w3-theme-l4">
<h2>Current Orders</h2>

<?php
$query = "SELECT * FROM orders WHERE status='processing' ";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
?>
<table class="w3-table w3-theme-l3 w3-striped w3-bordered w3-border">
<tr>
	<th>Order Number</th>
	<th>Username</th>
	<th>Description</th>
	<th>Progress</th>
	<th>Action</th>
</tr>
<?php		
	while($row=mysqli_fetch_array($result)) {
		$ordernum = $row['ordernum'];
		$uname = $row['uname'];
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
		echo "	<td>$uname</td>";
		echo "	<td>$desc</td>";
		echo "	<td>$progress%</td>";
		echo "	<td><a href=\"/admin/progress.php?ordernum=$ordernum\">Update Progress</a></td>";
		echo "</tr>";
	}
?>
</table>
</div>


<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>