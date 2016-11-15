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
#delete
{
	background-color:#cc3333;
}

#submit
{
	float:right;
	padding:10px;
}

</style>
</head>
<body>
<?php
$link="../";
$headerRight= "<span id='user'>Welcome ".$_SESSION['name']." | <a href='../index.php'><span id='signOut'>Sign out</span></a></span>";
include "header.php";
?>


<div id="contents">

<form method="post" action="#">

<div id="menu">
<a href="add.php"><span id="add">ADD</span></a> <a href="update.php"><span id="update">UPDATE</span></a> 
<a href="delete.php"><span id="delete">DELETE</span></a> <input type="submit" value="SUBMIT >" id="submit">
</div>

<div id="form">
	
	
	
	
</div>
</form>
</div>


<?php
include "footer.php";
?>

</body>
</html>