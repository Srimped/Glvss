<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GLVSS BRVND | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
	<style>
		.loginheader{
			min-height: 100vh;
			width: 100%;
			background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), 
			url(images/shopbanne.jpg);
			background-position: center;
			background-size: cover;
			position: relative;
		}

		body{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		h1{
			margin-bottom: 40px;
		}

		form{
			width: 500px;
			border: 2px solid #ccc;
			padding: 30px;
			background: transparent;
			border-radius: 15px;
			margin-left: 600px;
		}

		input{
			display: block;
			border: 2px solid #ccc;
			width: 95%;
			padding: 10px;
			margin: 10px auto;
			border-radius: 5px;
		}

		label{
			color: #888;
			font-size: 18px;
			padding: 10px;
		}
	</style>
	<section class="loginheader">
		<?php 
			include_once('header.php');
		 ?>
		<div class="text-box">
			<form action="login-check.php" method="post">
				<h1>LOGIN</h1>
				<?php 
					if (isset($_GET['error'])) 
					{
						?>
						<p><?php echo $_GET['error']; ?></p>
						<?php
					}
				 ?>
				<label>User Name</label>
				<input type="text" name="uname" placeholder="User Name">
				<br><br>
				<label>Password</label>
				<input type="password" name="password" placeholder="Password">
				<br><br>
				<button type="submit" class="action-btn">Login</button>
			</form>
		</div>
	</section>
</body>
</html>