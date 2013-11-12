<!DOCTYPE html>



<html>

<head>

</head>

<body>
<?php
	include './includes/header.php';

	include './includes/menu.php';
?>
<div id="login Area">
	<a href="./source/login.php">Login</a><br />
	<a href="./source/register.php">Register New User</a>
</div>
<!-- <div id="left_info">
	<p>
	If a user is logged in, their most recently submitted status report should be shown here.
	A link to submit a status should be displayed on this page (which will take the user to the status page) regardless of whether they 		are logged in or not.
	</p>
</div>
 -->
<div id="map_right">
	<p>A map with every data point for a relevant time span should be shown for the region associated with the ip address.</p>
</div>

<?php
	include './includes/footer.php';
?>
</body>
</html>
