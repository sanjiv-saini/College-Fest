<?php
session_start();
include "connection.php";
$link="user_account.php";

if(isset($_POST['festname']))
{
	if($_POST['submit']=="DELETE")
	{
		$sql="delete from techfest_db where festName='".$_POST['festname']."'";
		mysqli_query($con,$sql);
$headerRight= "<span id='user'>Welcome ".$_SESSION['name']." | <a href='../index.php'><span id='signOut'>Sign out</span></a></span>";


$msg= <<< page
<font color="green"><h1>
Your record deleted successfully!!!</h1></font>
page;
include "handler.php";
		
	}

	else
	{
		include "post_form.php";
	}
}

else
{
$headerRight= "<span id='user'>Welcome ".$_SESSION['name']." | <a href='../index.php'><span id='signOut'>Sign out</span></a></span>";


$msg= <<< page
<font color="red"><h1>
You have not selected any record!!!</h1></font>
page;
include "handler.php";

}
?>