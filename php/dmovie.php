<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password,"cinema");
$name= $_POST['movie'];
$sql = "DELETE from movie where m_name = '$name';";
$conn->query($sql);
?>