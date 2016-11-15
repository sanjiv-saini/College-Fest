<?php
session_start();

include "connection.php";

$userName = mysqli_real_escape_string($con, $_POST['userName']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$result = mysqli_query($con,"SELECT * FROM user_acc where username='$userName' and password='$password'");

$row = mysqli_fetch_array($result);


if($row)
{
$_SESSION['user'] =$row['username'];
$_SESSION['name'] = $row['first_name'];
include "user_account.php";
}

else
{
$link="../";
$headerRight= <<< page
<span id="user">  
<form id="signInForm" method="post" action="signIn.php">
<input type="text" id="userName" name="userName" placeholder="User Name">
<input type="password" name="password" id="password" placeholder="Password">
<input type="submit" value="Sign in" id="signIn">
</form>
| <a href="signUpForm.php"><span id="createAccount">Create Account</span></a></span> 
page;


$msg= <<< page
<font color="red"><h1>
You have entered wrong username or password!!!</h1></font>
page;
include "handler.php";
}

?>