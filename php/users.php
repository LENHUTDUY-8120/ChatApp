<?php 
	session_start();
	include_once "config.php";
	$userid = $_SESSION['user_id'];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id in (select person1 from friends where person2 = $userid union select person2 from friends where person1 = $userid);");
	$output = "";
	if (mysqli_num_rows($result) == 0) {
		$output = "No users are available to chat";
	}elseif(mysqli_num_rows($result) > 0){
		include_once "data.php";
	}
	echo $output;
?>