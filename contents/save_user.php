<?php
	
	include "connection.php";
	$msg="<font color='green'><h1>Your Account created Successfully !!!</h1></font>";
	$headerRight= <<< page
<span id="user">  
<form id="signInForm" method="post" action="signIn.php">
<input type="text" id="userName" name="userName" placeholder="User Name">
<input type="password" name="password" id="password" placeholder="Password">
<input type="submit" value="Sign in" id="signIn">
</form>
page;

	
	
	$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
	$college = mysqli_real_escape_string($con, $_POST['college']);
	$university = mysqli_real_escape_string($con, $_POST['university']);
	$userName= mysqli_real_escape_string($con, $_POST['userName']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$city = mysqli_real_escape_string($con, $_POST['city']);
	

	
	$sql="INSERT INTO user_acc VALUES('$firstName','$lastName','$college','$university','$userName','$password','$gender','$email','$mobile','$city')";
		
	if (!mysqli_query($con,$sql)) {
          $msg="<font color='red'><h1>" . mysqli_error($con)."!!!</h1></font>";
		  $headerRight = $headerRight."| <a href='signUpForm.php'><span id='createAccount'>Create Account</span></a>";
       }
$link="../";
$headerRight=$headerRight."</span>";
include "handler.php";
	mysqli_close($con);
?>