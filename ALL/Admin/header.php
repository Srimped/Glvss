<?php 
	include_once('db.php');
?>
<nav>
	<a href="index.php"><img src="images/logo.png"></a>
	<div class="nav-link" id="navlink">
		<i class="fas fa-times" style="color: black;" onclick="hideMenu()"></i>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="shop.php">SHOP</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="http://localhost/Lesson/ASM/ALL/index.php">LOGOUT</a></li>
			</ul>
		</div>
	<i class="fas fa-bars" onclick="showMenu()"></i>
</nav>