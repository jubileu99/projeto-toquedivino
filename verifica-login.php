<?php
	include 'connect.php';

	$user = $_POST['username'];
	$pw = $_POST['pw'];

	$sql = "select * from usuario where username=$user and password=$pw";
	$query = $conn->query($sql);
	
	if($query->affect_rows())

?>