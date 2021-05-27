<?php
	session_start();
	include_once "php/config.php";
	if (!isset($_SESSION['user_id'])) {
		header("location: accountuser.php");
	}
	$userid = $_SESSION['user_id'];
?>
<?php include_once "header.php"; ?>
<body>
	<div class="wrapper">
		<section class="users">
			<header>
				<?php
					$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = {$userid};");
					if (mysqli_num_rows($result) > 0) {
						$row = mysqli_fetch_assoc($result);
					}
				?>
				<div class="content">
					<img src="php/images/<?php echo $row['img'] ?>">
					<div class="info">
						<span><?php echo $row['fname'] . " " . $row['lname'];?></span>
						<p><?php echo $row['status']; ?></p>
					</div>
				</div>
				<a href="#" class="logout">Logout</a>
			</header>
			<div class="search">
        		<input id="search_kw" oninput="check()" type="text" placeholder="Enter name to search...">
        		<button id="search" ><i class="fas fa-search"></i></button>
			</div>
			<div class="users-list">
			</div>
		</section>
	</div>
	<script src="js/users.js"></script>
</body>
</html>

