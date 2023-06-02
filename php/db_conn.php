<?php  

$conn = mysqli_connect("localhost", "root", "", "cinema");

if (!$conn) {
	echo "Connection failed!";
	exit();
}