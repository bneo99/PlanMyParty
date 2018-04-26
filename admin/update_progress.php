<?php
$ordernum = $_POST['ordernum'];
$timestamp = time();
$u_percent = $_POST['upercent'];
$u_desc = $_POST['udesc'];

//get data from JSON file
$jsonfile = file_get_contents("../orders/order_".$ordernum.".json");
$json = json_decode($jsonfile, true); // decode the JSON into an associative array

$new_update = array("time"=>$timestamp, "percent"=>$u_percent, "desc"=>$u_desc);
if(array_push($json["update"], $new_update) && $jsonfile = json_encode($json, true)){
	// write to json file
	file_put_contents("../orders/order_".$ordernum.".json", $jsonfile);
	echo 'true';}
else {
	echo 'false';
}
?>