<?php
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

</style>
</head>
<body>
<?php
$link="user_account.php";
$headerRight= "<span id='user'>Welcome ".$_SESSION['name']." | <a href='../index.php'><span id='signOut'>Sign out</span></a></span>";
include "header.php";
?>


<div id="contents">

<div id="form">
	<form method="post" action="festdb_interface.php">
	<h1><font color='#3399ff'>Enter your techfest details</font></h1>

	Techfest Name<br>
	<input type="text" id="Name" name="festName" class="inputWidth"><br>
	Start date<br>
	<input type="text" id="startDate" name="startDate" class="inputWidth" placeholder="yyyy-mm-dd" ><br>
	End date<br>
	<input type="text" id="endDate" name="endDate" class="inputWidth" placeholder="yyyy-mm-dd" ><br>
	Description<br>
	<textarea name="description" cols="80" rows="10"></textarea><br><br>
	<input type="submit" value="SUBMIT" id="submit">
	
	</form>
</div>
</div>


<?php
include "footer.php";
?>

</body>
</html>