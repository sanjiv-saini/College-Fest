<?php

	session_start();

echo "<br><br>";
	include "connection.php";
	
	$msg="<font color='green'><h1>Your page has been published Successfully !!!</h1></font>";
	
	$festName = strtoupper(mysqli_real_escape_string($con, $_POST['festName']));
	$startDate = mysqli_real_escape_string($con, $_POST['startDate']);
	$endDate = mysqli_real_escape_string($con, $_POST['endDate']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$username =  mysqli_real_escape_string($con,$_SESSION['user']);
	
	$sql="INSERT INTO techfest_db (username,festName,startDate,endDate,description) VALUES('$username','$festName','$startDate','$endDate','$description')";
	
	if (!mysqli_query($con,$sql)) {
           $msg="<font color='red'><h1>" . mysqli_error($con)."!!!</h1></font>";
       }
	   
$headerRight= "<span id='user'>Welcome ".$_SESSION['name']." | <a href='../index.php'><span id='signOut'>Sign out</span></a></span>";
$link="user_account.php";
include "handler.php";


	mysqli_close($con);
	
?>