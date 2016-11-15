<! doctype html>
<html>
<head>
<title>Glotech</title>
<link type="text/css" rel="stylesheet" href="../style/mainStyle.css">
<link type="text/css" rel="stylesheet" href="../style/header.css">
<link type="text/css" rel="stylesheet" href="../style/contentArea.css">
<link type="text/css" rel="stylesheet" href="../style/infoBox.css">
<link type="text/css" rel="stylesheet" href="../style/footer.css">
<link type="text/css" rel="stylesheet" href="../style/form.css">
<style>
#handlerBox
{
	width:900px;
	height:400px;
	margin-left:auto;
	margin-right:auto;
	margin-top:60px;
	margin-bottom:20px;
	padding:50px;
}


</style>
</head>
<body>
<?php
include "header.php";
echo "<div><div id='handlerBox'>";
echo $msg;
echo "</div></div>";

include "footer.php";
?>
</body>
</html>