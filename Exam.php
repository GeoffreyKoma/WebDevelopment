<!DOCTYPE html>
<html>
<head>
	<title>Connecting to the database</title>
</head>
<body>
<?php
     $con = mysql_connect('localhost','root','');
     $db = mysql_select_db('examination');
if ($con) {
	echo "Succesfully connected to the database";
}else{
	die("Error.");
}
if ($db) {
	echo "Succesfully found the database";
}else{
	die("Error.");
}
?>
</body>
</html>