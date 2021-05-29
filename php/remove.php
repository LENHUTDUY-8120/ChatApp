<?php 
	session_start();
	include_once "config.php";
	$userid = $_SESSION['user_id'];
	$friend_id = mysqli_real_escape_string($conn, $_POST['friend_id']);
	$sql = "DELETE FROM friends WHERE person1=$friend_id and person2=$userid";
	$result = mysqli_query($conn, $sql);
?>