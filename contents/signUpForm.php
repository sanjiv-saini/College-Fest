<! doctype html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../style/mainStyle.css">
<link type="text/css" rel="stylesheet" href="../style/header.css">
<link type="text/css" rel="stylesheet" href="../style/contentArea.css">
<link type="text/css" rel="stylesheet" href="../style/footer.css">
<link type="text/css" rel="stylesheet" href="../style/form.css">
<script src="../javascripts/validation.js"></script>
<title>Glotech</title>
</head>
<body>
<?php
$link="../";
$headerRight= <<< page
<span id="user">
<form id="signInForm" method="post" action="signIn.php">
<input type="text" id="userName" name="userName" placeholder="User Name">
<input type="password" name="password" id="password" placeholder="Password">
<input type="submit" value="Sign in" id="signIn">
</form>
page;
include "header.php";
?>

<div id="contents">
<div id="form">
	<h1><font color='#3399ff'>Create an account</font></h1>
	<form method="post"  action="validate.php" autocomplete="on" onsubmit="return validate()">
	Name<br>
	<input type="text" id="firstName" name="firstName" placeholder="first" class="halfWidth"> <input type="text" id="lastName" name="lastName" class="halfWidth" placeholder="last"><br>
	College Name<br> 
	<input type="text" id="college" name="college" class="inputWidth"><br>
	University Name<br> 
	<input type="text" id="university" name="university" class="inputWidth"><br>
	User Name<br>
	<input type="text" id="crUserName" name="userName" class="inputWidth"><br>
	Password<br>
	<input type="password" id="pass" name="password" class="inputWidth"><br>
	Reenter Password<br>
	<input type="password" id="rePass" name="rePassword" class="inputWidth"><br>
	Gender<br>
	<input type="radio" value="male" name="gender" checked="true" >Male <span class="tab"></span><input type="radio" value="female" name="gender">Female <span class="tab"></span><input type="radio" value="others" name="gender">Not specified<br>
	Email id<br>
	<input type="text" id="email" name="email" class="inputWidth"><br>
	Mobile No<br>
	<input type="text" id="mobile" name="mobile" class="inputWidth"><br>
	City<br>
	<input type="text" id="city" name="city" class="inputWidth"><br>
	We want to make sure that a real person is creating an account.<br>
	Enter the characters you see<br>
	<img src="captcha.php" alt="captcha code"></img><br>
	<input type="text" name="captcha" id="captchaCode" class="inputWidth"><br>
	Terms<br>
	<input type="checkbox" id="terms" value="true" name="terms"> I agree to the Terms of Service<br><br>
	<input type="submit" value="Create account" id="submit">
	</form>
</div>
</div>

<?php
include "footer.php";
?>

</body>
</html>