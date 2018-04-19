<?php
session_start();

$username = $_POST['uname'];
$password = sha1($_POST['passwd']);

$mysqli_db_hostname = "localhost";
$mysqli_db_user = "root";
$mysqli_db_passwd = "";
$mysqli_db_database = "test";

$con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_passwd) or die("Could not connect to database");
mysqli_select_db($con, $mysqli_db_database) or die("Could not select database");

$query = "SELECT * FROM login_credentials WHERE uname LIKE '$username' AND password LIKE '$password' ";

$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			echo 'true';
			$_SESSION['userName']=$row['uname'];	
			$_SESSION['accType']=$row['accType'];
		}
		else{
			echo 'false';
		}
		
//gets theme setting from database whenever user logs in
$query = "SELECT theme FROM user_settings WHERE uname LIKE '$username' ";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$_SESSION['themeName']= $row['theme'];
?>