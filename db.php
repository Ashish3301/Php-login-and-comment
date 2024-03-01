<?php
$server = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "for-practise";

try {
	$conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);
} catch (Exception $e) {
	echo "custom error";
}
?>