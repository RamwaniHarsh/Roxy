<?php 
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if (! $conn ) {
	die("Could Not Connect : ".mysql_error());
}
echo 'Connect Successfully'."<br/>";
?>