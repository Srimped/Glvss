<?php 
	include_once('db.php');
	$sql = "Select * From category";
	$cate = query($sql);
?>
<style>
	.nav-cate{
	flex: 1;
	text-align: center;
	letter-spacing: 30px;
	}

	.nav-cate ul li{
	list-style: none;
	display: inline-block;
	padding: 8px, 20px;
	position: relative;
	}
	
	.nav-cate ul li a{
	color: #000;
	text-decoration: none;
	font-size: 25px;
	letter-spacing: 0px;
	}

	.nav-cate ul li a::after{
	content: '';
	width: 0%;
	height: 2px;
	background: #000;
	display: block;
	margin: auto;
	transition: 0.5s;
	}

	.nav-cate ul li a:hover::after{
	width: 100%
	}

	.bestseller{
	width: 80%;
	margin: auto;
	text-align: center;
	padding-top: 50px;
	padding-bottom: 50px;
	}
</style>
<section class="bestseller">
<div class="nav-cate" id="nav-cate">
<ul class="shop">
	<li><a href="shop.php">ALL</a></li>
	<?php 
		for ($i=0; $i < count($cate); $i++) 
			{ 
				?>
					<li><a href="shop.php?Catid=<?=$cate[$i][0]?>"><?=$cate[$i][1]?></a></li>
				<?php
			}
	 ?>
</ul>
</div>
</section>