<?php
$ordernum = $_POST['ordernum'];

$mysqli_db_hostname = "localhost";
$mysqli_db_user = "root";
$mysqli_db_passwd = "";
$mysqli_db_database = "test";

$con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_passwd) or die("Could not connect to database");
mysqli_select_db($con, $mysqli_db_database) or die("Could not select database");

$query = "UPDATE `orders` SET `status`='processing' WHERE `ordernum`='$ordernum'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));

header("Location: /manage"); /* Redirect browser */
exit();
?>