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
				<a href="php/logout.php?logout" class="logout">Logout</a>
			</header>
			<div class="form-container">
				<div class="form-btn">
					<span onclick="chat()">Friends List</span>
					<span onclick="add()">Add Friend</span>
					<hr id="Indicator">
				</div>
				<div class="chat-user">
					<div class="form" id="form-chat">
						<div class="search">
							<input id="search_kw" oninput="check()" type="text" placeholder="Find your friends ...">
							<button id="search" ><i class="fas fa-search"></i></button>
						</div>
						<div class="users-list" id="list1">
						</div>
					</div>
				</div>
				<div class="add-friend">
					<div class="form" id="form-add">
						<div class="search"> 
							<input id="search_kw1" oninput="check1()" type="text" placeholder="Find other people ...">
							<button id="search1" ><i class="fas fa-search"></i></button>
						</div>
						<div class="users-list" id="users-list">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="javascript/users.js"></script>
	<script src="javascript/friend.js"></script>
</body>
</html>

