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
#edit
{
	float:right;
	margin-right:15px;
	
}

#add
{
   background-color:#339966;
   color:white;
   padding:10px;
}

.editbutton
{
	border:none;
	color:white;
	padding:10px;
	margin:5px;
	margin-bottom:10px;
	
}

#menu
{
	padding-bottom:5px;
}

#update
{
	background-color:#ff9900;
}

#delete
{
	background-color:#cc3333;
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

<form method="post" action="edit.php">

<div id="menu">
<a href="add.php"><span id="add">ADD</span></a> <span id="edit"><input type="submit" class="editbutton" name="submit" id="update" value="UPDATE"><input type="submit" class="editbutton" id="delete" name="submit" value="DELETE"></span>
</div>

<?php
include "connection.php";
$user= mysqli_real_escape_string($con,$_SESSION['user'] );
$result = mysqli_query($con,"SELECT * FROM techfest_db where username ='$user' order by timestamp desc");


while($row = mysqli_fetch_array($result)) {
	
  $username = mysqli_real_escape_string($con, $row['username']);
	$festname = mysqli_real_escape_string($con, $row['festName']);
 $authorInfo = mysqli_query($con,"SELECT * FROM user_acc where username='$username'");
 if($getData = mysqli_fetch_array($authorInfo))
 {
  echo "<div id=contentBox><div id='innerHeader'><input type='radio' name='festname' value='$festname'><b>".$row['festName']."</b><span class='moveRight'><b>Starting Date:</b> ".$row['startDate']."</span></div>";
  echo "<div id='innerContent'><b>Description</b>:<br>".$row['description']."</div>";
  echo "<div id='innerFooter'><b>College:</b> ".$getData['college']."<span class='moveRight'><b>Ending Date:</b> ".$row['endDate']."</span></div>";
  echo "</div>";
 }
  else
  echo "error occurred";
}
?>
</form>
</div>

<?php
include "footer.php";
?>

</body>
</html>