<?php
	include_once "config.php";
	$incoming_id = mysqli_real_escape_string($conn, $_GET['incoming_id']);
	$sql = "SELECT status from users WHERE user_id = $incoming_id";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) {
		$row = mysqli_fetch_assoc($result);
		echo $row['status'];
	} else {
		echo "wrong!!!";
	}
?>