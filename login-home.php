<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>

<?php
	include './includes/header.php';

	include './includes/menu.php';
?>


<div id='fg_membersite_content'>
<h2>Home Page</h2>
Welcome back <?= $fgmembersite->UserFullName(); ?>!

<p><a href='change-pwd.php'>Change password</a></p>

<p><a href='access-controlled.php'>A sample 'members-only' page</a></p>

<div id="left_info">
	<p>
	If a user is logged in, their most recently submitted status report should be shown here.
	A link to submit a status should be displayed on this page (which will take the user to the status page) regardless of whether they 		are logged in or not.
	</p>
</div>

<div id="map_right">
	<p>A map with every data point for a relevant time span should be shown for the region associated with the ip address.</p>
</div>

<br><br><br>
<p><a href='logout.php'>Logout</a></p>
</div>
</body>
</html>
