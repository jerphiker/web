<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}

?>

<!DOCTYPE html>



<html>

<head>
      <link rel="stylesheet" type="text/css" href="style/main.css">

</head>

<body>
<?php
	include './includes/header.php';

	include './include/menu.php';
?>

<div> 
	<h2>Home Page</h2>
	Welcome back <?= $fgmembersite->UserFullName(); ?>!
	<p><a href='./change-pwd.php'>Change password</a></p>

	<p><a href='./logout.php'>Logout</a></p>
</div>

<!-- <div id="left_info">
	<p>
	If a user is logged in, their most recently submitted status report should be shown here.
	A link to submit a status should be displayed on this page (which will take the user to the status page) regardless of whether they 		are logged in or not.
	</p>
</div>
 -->
<!-- <div id="map_right">
	<p>A map with every data point for a relevant time span should be shown for the region associated with the ip address.</p>
</div>
 -->
<?php
	include './includes/footer.php';
?>
</body>
</html>
