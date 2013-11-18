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


<div id="left_side_forms">
	<p>
	This needs multiple forms: optional login, forgot password, and create new account.<br /><br />

	Login should be processed and direct user to an incorrect login if unsuccessful or to 
	the home page if login is successful.<br /><br />

	Forgot password should be processed and direct user to an account found - email sent
	page if email submitted matches a row in the users table, or to an account not found
	page if email submitted was not found. An email should be sent containing the user 
	password and user name to the email address associated with the account if a row 
	is found in the users table with the email address submitted.<br /><br />

	Create new account should be processed and add a row to the users table if an account 
	with the associated email and username does not already exist, or it should take the 
	user to an account creation unsuccessful page if the associated email or username already 
	exists in the users table.<br /><br />

	Account creation should not be necessary to submit an illness or to navigate the site.<br />

	Account information that is needed to create a new account is username, gender, birthday, 
	password, and a recovery email.
	Of these, only username and password should be required.
	</p>
</div>

<div id="index_map">
	<p>
	This is for the google map on the home page, with every point shown, specific to the 
	region the ip address comes from.
	</p>
</div>

<?php
	include './includes/footer.php';
?>
</body>
</html>
