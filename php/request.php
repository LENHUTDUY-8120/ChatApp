<?php 
	session_start();
	include_once "config.php";
	$userid = $_SESSION['user_id'];
	$result = mysqli_query($conn, "select * from users where user_id in (
		select person1 from friends where person2 = $userid and confirm='N');");
	$output = "";
	if (mysqli_num_rows($result) == 0) {
		$output = "No friend request!";
	}elseif(mysqli_num_rows($result) > 0){
		include_once "data-request.php";
	}
	echo $output;
?>