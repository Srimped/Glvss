<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONTACT | CALL US IF YOU NEED</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
	<section class="contactheader">
		<?php 
			include_once('header.php');
		 ?>
		<div class="text-box">
			<h1>Contact Us</h1>
			<p>
				<b>GLVSS HEADQUARTERS |</b> Huntington Beach, CA 
			</p>
			<p>
				<b>EMAIL |</b> support@glvss.com
			</p>
			<p>
				<b>COLLABORATION INQUIRIES |</b> collab@glvss.com
			</p>
			<p>
				<b>WHOLESALE INQUIRIES |</b> wholesale@glvss.com 
			</p>
			<br><br><br>
			<p>
				<b>HOURS OF OPERATION</b>
			</p>
			<p>
				Monday - Friday // 9AM - 5PM
			</p>
			<p>
				Saturday - Sunday // CLOSED
			</p>
			<a href="https://www.instagram.com/glvssbrvnd/" class="contact-btn"><i class="fab fa-instagram"></i></a>
			<a href="https://www.facebook.com/glvssbrvnd/" class="contact-btn"><i class="fab fa-facebook-square"></i></a>
			<a href="https://twitter.com/glvssbrvnd" class="contact-btn"><i class="fab fa-twitter-square"></i></a>
			<a href="https://www.pinterest.com/glvssbrvnd/_saved/" class="contact-btn"><i class="fab fa-pinterest-square"></i></a>
		</div>
	</section>
	<script type="text/javascript">
		var navlink = document.getElementById("navlink");

		function showMenu(){
			navlink.style.right = "0";
		}

		function hideMenu(){
			navlink.style.right = "-200px";
		}
	</script>
</body>
</html>