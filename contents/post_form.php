<?php
if(!isset($_SESSION['user']))
session_start();
?>
<! doctype html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../style/mainStyle.css">
<link type="text/css" rel="stylesheet" href="../style/header.css">
<link type="text/css" rel="stylesheet" href="../style/contentArea.css">
<link type="text/css" rel="stylesheet" href="../style/footer.css">
<link type="text/css" rel="stylesheet" href="../style/form.css">
<title>Glotech</title>
<style>
textarea
{
	font-family:inherit;
	font-size:16px;
	padding:10px;
}

#rightform
{
	vertical-align:top;
}

#contents
{
	
}

</style>
</head>
<body>
<?php
$link="user_account.php";
$headerRight= "<span id='user'>Welcome ".$_SESSION['name']." | <a href='../index.php'><span id='signOut'>Sign out</span></a></span>";
include "header.php";
?>

<div id="contents">
<?php

$content=<<< page
<div id="form">
	<h1><font color='#3399ff'>Update your techfest details</font></h1><br>
	<form method="post" action="update.php">
	Techfest Name<br>
page;

include "connection.php";
$festname = mysqli_real_escape_string($con, $_POST['festname']);
$sql="select * from techfest_db where festName='$festname'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

echo $content;

echo "<input type='text' id='Name' name='festName' class='inputWidth' value='".$row['festName']."'readonly>";

echo "<br>Start date<br>";

echo "<input type='text' id='startDate' name='startDate' class='inputWidth' value='".$row['startDate']."'>";

echo "<br>End date<br>";

echo "<input type='text' id='endDate' name='endDate' class='inputWidth' value='".$row['endDate']."'><br>";
	
echo "Description<br><textarea name='description' cols='80' rows='10'>".$row['description']."</textarea><br><br>";

echo "<input type='submit' value='UPDATE' id='submit'>";

?>

</div>

<?php
include "footer.php";
?>

</body>
</html>