<!DOCTYPE html>

<html>

<head>

</head>

<body>
<?php
	include './includes/header.php';

	include './include/menu.php';
?>

<p>
This page should allow users to submit a new status report, with or without an account. 
If they are currently logged in, it should display all status reports they had submitted while 
logged in with an account (statuses associated with an account). Additionally, if they are logged in, 
they should have the option to delete previously submitted status reports. After a status is submitted, 
a confirmation message should appear.

Fields collected with a status report are tentatively age (dropbox), gender(dropbox), flushot (bool), cold/flu (dropbox),
sleep per day (dropbox with options), sick feeling (slider) -- of these, the only required fields will be whether or not
they've had a flushot and whether they have a cold or flu -- we are not interested on collecting information on healthy 
people.
</p>

<?php
	include './includes/footer.php';
?>
</body>
</html>
