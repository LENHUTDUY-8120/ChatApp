<?php 
	session_start();
	include_once "config.php";
	$userid = $_SESSION['user_id'];
	$result = mysqli_query($conn, "SELECT * FROM USERS WHERE NOT user_id = $userid ORDER BY user_id DESC");
	$output = "";
	if (mysqli_num_rows($result) == 0) {
		$output = "No users are available to chat";
	}elseif(mysqli_num_rows($result) > 0){
		include_once "data.php";
	}
	echo $output;
?>