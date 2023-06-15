<!DOCTYPE html>
<html>
<head>
	<?php 
		include_once('db.php')
	 ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SHOP | SHOPPING ARE UNLIMITED</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="shopstyle.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
	<section class="shopheader">
		<?php 
			include_once('header.php');
		 ?>
		<div class="text-box">
			<h1>Shop All</h1>
			<form action="">
			<label class="searchbar" for="ISearch"><i class="fas fa-search"></i></label>
			<input type="text" placeholder="Type to search..." name="key">
			<input type="submit" name="search" value="Search">
			</form>
	</section>

	<?php
	if(isset($_POST['add']))
{

	$id = $_POST['id'];
	$name = $_POST['name'];
	if($_FILES)
	{
		$image = $_FILES['image']['name'];
		$path = "images/" . $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $path);
	}
	
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	$sql = "Insert Into product values('" . $id . "', '" . $name . "', '" . $path . "', " . $price . ", " . $cat . ")";
	
	execsql($sql);
}
if(isset($_GET['deleteid']))
{
	$id = $_GET['deleteid'];
	$sql = "delete from product where ProductId = '" . $id . "'";
	execsql($sql);
}
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$path = $_POST['imageold'];

	if($_FILES)
	{
		if(isset($_FILES['image']['name']) && $_FILES['image']['name'] !='')
		{
			$image = $_FILES['image']['name'];
			$path = "images/" . $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
		}
				
	}
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	$sql = "Update product set ProductName='" . $name . "', Image='" . $path . "', Price=" . $price . ", CatId=" . $cat . " Where ProductId = '" . $id . "'";	
	execsql($sql);
}
		include_once('category.php');
		include_once('product.php');
	 ?>

	<script type="text/javascript">
		var navlink = document.getElementById("navlink");

		function showMenu(){
			navlink.style.right = "0";
		}

		function hideMenu(){
			navlink.style.right = "-200px";
		}
	</script>
	<button id="home-btn">
		<a class="home-btn" href="#"><i class="fas fa-angle-double-up"></i></a>
	</button>
</body>
</html>