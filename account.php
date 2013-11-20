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

Welcome back <?= $fgmembersite->UserFullName(); ?>!
<table>
	<tr>
		<td>
			Your Email Address:
		</td>
		<td>
			<?= $fgmembersite->UserEmail(); ?>
		</td>
	</tr>
</table>

<p><a href='change-pwd.php'>Change password</a></p>


<!-- <p>
This page needs to display username, password, and recovery email (*possibly age and gender, if that information is collected for accounts, so people with accounts don't need to enter it every time.*)

It should offer forms to change password, recovery email, and username. If the new recovery email or username already exists in the users table, then an error should be displayed and the user should be returned to the form they were filling out.

If someone tries to go to the account page without being logged in, it should renavigate them to the login page (index.php)

An option should be displayed to delete the user account, with a checkbox to also delete all their prior status updates associated with that account. If not, then the updates should be altered so they are no longer associated with an account (so if someone later creates an account by the same username, they do not have access to someone else's status updates).
</p>
 -->
<?php
	include './includes/footer.php';
?>
</body>
</html>
