<?php

	session_start();
	echo "<br><br><br>";
	include "connection.php";
	
	$msg="<font color='green'><h1>Your page has been updated Successfully !!!</h1></font>";
	$festName = mysqli_real_escape_string($con, $_POST['festName']);
	$startDate = mysqli_real_escape_string($con, $_POST['startDate']);
	$endDate = mysqli_real_escape_string($con, $_POST['endDate']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	
	$sql="update techfest_db set startDate='$startDate', endDate='$endDate', description='$description' where festName='$festName'";
	
	if (!mysqli_query($con,$sql)) {
           $msg="<font color='red'><h1>" . mysqli_error($con)."!!!</h1></font>";
       }
	   
$headerRight= "<span id='user'>Welcome ".$_SESSION['name']." | <a href='../index.php'><span id='signOut'>Sign out</span></a></span>";
$link="user_account.php";
include "handler.php";

	mysqli_close($con);
	
?>