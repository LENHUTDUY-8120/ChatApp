<?php 
	session_start();
	include_once "config.php";
	$userid = $_SESSION['user_id'];
	$friend_id = mysqli_real_escape_string($conn, $_POST['friend_id']);
	$sql = "INSERT into friends(person1,person2,confirm) VALUES($userid,$friend_id,'N');";
	$result = mysqli_query($conn, $sql);

	
?>