<! doctype html>
<html>
<head>
<title>Glotech</title>
<link type="text/css" rel="stylesheet" href="style/mainStyle.css">
<link type="text/css" rel="stylesheet" href="style/header.css">
<link type="text/css" rel="stylesheet" href="style/contentArea.css">
<link type="text/css" rel="stylesheet" href="style/infoBox.css">
<link type="text/css" rel="stylesheet" href="style/footer.css">
<link type="text/css" rel="stylesheet" href="style/form.css">
<style>

#contents
{
	width:1300px;
	margin-left:auto;
	margin-right:auto;
	padding-top:50px;
	padding-bottom:50px;
}

#signInForm
	{
		display:inline;
	}
</style>
</head>
<body>

<?php
$headerRight= <<< page
<span id="user">  
<form id="signInForm" method="post" action="contents/signIn.php">
<input type="text" id="userName" name="userName" placeholder="User Name">
<input type="password" name="password" id="password" placeholder="Password">
<input type="submit" value="Sign in" id="signIn">
</form>
| <a href="contents/signUpForm.php"><span id="createAccount">Create Account</span></a></span> 
page;
include "contents/header.php";
?>

<div id="contents">
<?php
include "contents/connection.php";

$result = mysqli_query($con,"SELECT * FROM techfest_db order by timestamp desc");


while($row = mysqli_fetch_array($result)) {
	
  $username = mysqli_real_escape_string($con, $row['username']);	
 $authorInfo = mysqli_query($con,"SELECT * FROM user_acc where username='$username'");
 if($getData = mysqli_fetch_array($authorInfo))
 {
  echo "<div id=contentBox><div id='innerHeader'><b>".$row['festName']."</b><span class='moveRight'><b>Starting Date:</b> ".$row['startDate']."</span></div>";
  echo "<div id='innerContent'><b>Description</b>:<br>".$row['description']."</div>";
  echo "<div id='innerFooter'><b>College:</b> ".$getData['college']."<span class='moveRight'><b>Ending Date:</b> ".$row['endDate']."</span></div>";
  echo "</div>";
 }
  else
  echo "error occurred";
}
?>
</div>

<?php
include "contents/footer.php";
?>

</body>
</html>

