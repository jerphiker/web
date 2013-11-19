<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin()) {?>
<nav>
	<a href="./index.php">Home</a>
	<a href="./region.php">Region</a>
	<a href="./status.php">Status</a>
</nav>
<?} else {?>
<nav>
	<a href="./home.php">Home</a>
	<a href="./region.php">Region</a>
	<a href="./status.php">Status</a>
	<a href="./account.php">Account</a>
</nav>
<? }

?>


