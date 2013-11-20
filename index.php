<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>

<!DOCTYPE html>

<html>

<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <link rel="stylesheet" type="text/css" href="style/main.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>

</head>

<body>
<?php
	include './includes/header.php';

	include './include/menu.php';
?>
<div id="loginArea">
<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>


</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
<div id="newUserLink">
	<a href="./register.php">Register New User</a>
</div>
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
