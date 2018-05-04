<?php
session_start();
$event_name = $_POST['event_name'];
$date = $_POST['date'];
$theme = $_POST['theme'];
$pax = $_POST['pax'];
$venue = $_POST['venue'];
$food = $_POST['food'];
$dessert = $_POST['dessert'];
$equipment = $_POST['equipment'];
$decor = $_POST['decor'];
$misc = $_POST['misc'];
$personnel = $_POST['personnel'];
$price = $_POST['price'];

date_default_timezone_set('Asia/Kuching'); // set timezone

$mysqli_db_hostname = "localhost";
$mysqli_db_user = "root";
$mysqli_db_passwd = "";
$mysqli_db_database = "test";

$con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_passwd) or die("Could not connect to database");
mysqli_select_db($con, $mysqli_db_database) or die("Could not select database");

//get ordernum of party
$query = "SELECT ordernum FROM orders WHERE 1";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num_row = mysqli_num_rows($result);

$ordernum = $num_row + 1;
$username = $_SESSION['userName'];
$timestamp = time();
$status = "waiting for payment";

$query = "INSERT INTO `orders`(`ordernum`, `uname`, `description`, `price`, `datetime`, `status`) VALUES ('$ordernum','$username','$event_name','$price','$timestamp','$status')";
$result = mysqli_query($con, $query)or die(mysqli_error($con));

//get data from template file
$jsonfile = file_get_contents("../orders/template.json");
$json = json_decode($jsonfile, true); // decode the JSON into an associative array

$details = array("event_name"=>$$event_name, "event_date"=>$date, "theme"=>$theme, "pax"=>$pax, "venue"=>$venue, "food"=>$food, "dessert"=>$dessert, "equipment"=>$equipment, "decor"=>$decor, "misc"=>$misc, "personnel"=>$personnel, "price"=>$price);

$new_update = array("time"=>$timestamp, "percent"=>0, "desc"=>"You just placed your order!");

array_push($json["details"], $details);
array_push($json["update"], $new_update);

$jsonfile = json_encode($json, true);
file_put_contents("../orders/order_".$ordernum.".json", $jsonfile);

header("Location: /bookings"); /* Redirect browser */
exit();
?>