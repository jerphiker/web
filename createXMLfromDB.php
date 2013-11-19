<?php

//should put this info in a different file and require it
$username="username";
$password="password";
$database="username-databaseName";
//require("php_dbinfo.php");

// Start XML file and create the parent node
$doc = domxml_new_doc("1.0");
$node = $doc->create_element("markers");
$parnode = $doc->append_child($node);


// open a connection to the mysql server
$connection = mysql_connect ('localhost', 4username, $password);
if (!$connection) {
	die('failed to connect : ' . mysql_error());
}


// set the active database
$selected_db = mysql_select_db($database, $connection);
if (!$selected__db) {
	die ('failed to use db : ' . mysql_error());
}


// select all the rows from the desired table
// change name to match project
$query = "select * from tablename";
$result = mysql_query($query);
if (!$result) {
	die('query is invalid: ' . mysql_error());
}

// iterate through the rows and create xml nodes
while ($row = @mysql_fetch_assoc($result)) {
	//add the new node to the xml document
	$node = $dom->createElement("marker");
	$newnode = $parnode->appendChild($node);
	$newnode->setAttribute("ill", $row['ill']);
	$newnode->setAttribute("lat", $row['lat']);
	$newnode->setAttribute("lng", $row['lng']);
}

echo $dom->saveXML();

?>
