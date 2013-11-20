<link rel="stylesheet" type="text/css" href="style/menu.css">
<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin()) {?>

<ul id="menu-bar">
	<li class="active"><a href="./index.php">Home</a></li>
	<li><a href="./region.php">Region</a></li>
	<li><a href="./status.php">Status</a></li>
</ul>

<!-- <nav>
	<a href="./index.php">Home</a>
	<a href="./region.php">Region</a>
	<a href="./status.php">Status</a>
</nav>
 -->
<?} else {?>

<ul id="menu-bar">
	<li class="active"><a href="./home.php">Home</a></li>
	<li><a href="./region.php">Region</a></li>
	<li><a href="./status.php">Status</a></li>
	<li><a href="./account.php">Account</a></li>
	<li><a href='./logout.php'>Logout</a></li>
</ul>

<!-- <nav>
	<a href="./home.php">Home</a>
	<a href="./region.php">Region</a>
	<a href="./status.php">Status</a>
	<a href="./account.php">Account</a>
</nav> -->

<? }

?>


