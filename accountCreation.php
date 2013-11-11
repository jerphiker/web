<!DOCTYPE html>

<html>

<head>

</head>

<body>
<?php
	include './includes/header.php';

	include './includes/menu.php';
?>


<h1> Create an Account </h1>

<form>
	<table border="0">
		<tr>
			<td>
				Pick a username: 
			</td>
			<td>
				<input type="text" name="userName" size="20" maxlength="50" required>
			</td>
		</tr>
		<tr>
			<td>
				Pick a Password:
			</td>
			<td>
				<input type="text" name="pWord" size="20" maxlength="20" required>
			</td>
		</tr>
		<tr>
			<td>
				Supply an email to associate with this account:
			</td>
			<td>
				<input type="email" name="email" size="20" maxlength="50" required>
			</td>
		</tr>
		<tr>
			<td>
				Please supply your age (Optional):
			</td>
			<td>
				<input type="number" name="age" size="20" maxlength="3">
			</td>
		</tr>
		<tr>
			<td>
				Please Supply your gender (Optional):
			</td>
			<td>
				<input type="radio" name="gender" value="male"> Male  
				<input type="radio" name="gender" value="female"> Female
			</td>
		</tr>
	</table>

</form>

<?php
	include './includes/footer.php';
?>
</body>
</html>
