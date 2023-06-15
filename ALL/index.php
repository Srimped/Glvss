<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GLVSS BRVND | BE YOUR OWN STYLE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<?php 
	include_once('db.php');
	$sql = "Select * From product";
	$rows = query($sql);
?>
<?php 
	include_once('db.php');
	$sql = "Select ProductId From product";
	$ProductId = query($sql);
?>
<?php 
	$sql = "Select * From product where Catid = 1";
	$TE = query($sql);
?>
<?php 
	$sql = "Select * From product where Catid = 2";
	$TF = query($sql);
?>
<?php 
	$sql = "Select * From product where Catid = 3";
	$TH = query($sql);
?>
<?php 
	$sql = "Select * From product where Catid = 4";
	$HE = query($sql);
?>
<?php 
	$sql = "Select * From product where Catid = 5";
	$GD = query($sql);
?>
<?php 
	$sql = "Select * From product where Catid = 6";
	$TA = query($sql);
?>
<?php 
	$sql = "Select * From product where Catid = 7";
	$TS = query($sql);
?>
<?php 
	$sql = "Select * From product where Catid = 9";
	$TC = query($sql);
?>

<body>	
	<section class="header">
		<?php 
			include_once('header.php');
		 ?>
		<div class="text-box">
			<h1>Be Your Own Style With GLVSS</h1>
			<p>
				We are a lifestyle brand that is a reflection of true life with its ups and downs, wins and losses. We hope to be a voice and <br> inspiration to those who wish to grow with us. We are a transparent brand that wants to share our journey, and learn<br> yours in the process.
				<br>
				<br>To the rebels and the free-thinkers. To the movers, the shakers, the difference-makers.
			</p>
			<a href="about.php" class="action-btn">To Know More About Us</a>
		</div>
	</section>
	<section class="bestseller">
		<h1>Best Sellers</h1>
		<p>- Best Items In This Month -</p>
		<div class="row">
		<?php
		for($i=1; $i <= 15; $i=$i+5)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$rows[$i][2]?>">
				<div class="layer">
					<h3><?=$rows[$i][1]?></h3>
					<p><?=$rows[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
	</section>
	<section class="collection">
		<h1>Other Collection</h1>
		<p>- Try Other Collection To Find Your Own Style -</p>
		
	</section>
	<section class="cta-east">
			<h2>THE EAST</h2>
			<a href="shop.php?Catid=1" class="action-btn">SHOP NOW</a>
		
	</section>
	<section class="bestseller">
		<div class="row">
			<?php
		for($i=0; $i <= 2; $i++)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$TE[$i][2]?>">
				<div class="layer">
					<h3><?=$TE[$i][1]?></h3>
					<p><?=$TE[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section class="cta-flash">
			<h2>THE FLASH</h2>
			<a href="shop.php?Catid=2" class="action-btn">SHOP NOW</a>
		
	</section>
	<section class="bestseller">
		<div class="row">
			<?php
		for($i=0; $i <= 2; $i++)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$TF[$i][2]?>">
				<div class="layer">
					<h3><?=$TF[$i][1]?></h3>
					<p><?=$TF[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section class="cta-huncho">
			<h2>THE HUNCHO</h2>
			<a href="shop.php?Catid=3" class="action-btn">SHOP NOW</a>
		
	</section>
	<section class="bestseller">
		<div class="row">
			<?php
		for($i=0; $i <= 1; $i++)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$TH[$i][2]?>">
				<div class="layer">
					<h3><?=$TH[$i][1]?></h3>
					<p><?=$TH[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section class="cta-hendrix">
			<h2>THE HENDRIX</h2>
			<a href="shop.php?Catid=4" class="action-btn">SHOP NOW</a>
		
	</section>
	<section class="bestseller">
		<div class="row">
			<?php
		for($i=0; $i <= 2; $i++)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$HE[$i][2]?>">
				<div class="layer">
					<h3><?=$HE[$i][1]?></h3>
					<p><?=$HE[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section class="cta-grande">
			<h2>THE GRANDE</h2>
			<a href="shop.php?Catid=5" class="action-btn">SHOP NOW</a>
		
	</section>
	<section class="bestseller">
		<div class="row">
			<?php
		for($i=0; $i <= 2; $i++)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$GD[$i][2]?>">
				<div class="layer">
					<h3><?=$GD[$i][1]?></h3>
					<p><?=$GD[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section class="cta-americana">
			<h2>THE AMERICANA</h2>
			<a href="shop.php?Catid=6" class="action-btn">SHOP NOW</a>
		
	</section>
	<section class="bestseller">
		<div class="row">
			<?php
		for($i=0; $i <= 2; $i++)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$TA[$i][2]?>">
				<div class="layer">
					<h3><?=$TA[$i][1]?></h3>
					<p><?=$TA[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section class="cta-snake">
			<h2>THE SNAKE</h2>
			<a href="shop.php?Catid=7" class="action-btn">SHOP NOW</a>
		
	</section>
	<section class="bestseller">
		<div class="row">
			<?php
		for($i=0; $i <= 2; $i++)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$TS[$i][2]?>">
				<div class="layer">
					<h3><?=$TS[$i][1]?></h3>
					<p><?=$TS[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section class="cta-crush">
			<h2>THE CRUSH</h2>
			<a href="shop.php?Catid=9" class="action-btn">SHOP NOW</a>
		
	</section>
	<section class="bestseller">
		<div class="row">
			<?php
		for($i=0; $i <= 2; $i++)
		{
			?>
				<div class="bestseller-col">
				<img src="<?=$TC[$i][2]?>">
				<div class="layer">
					<h3><?=$TC[$i][1]?></h3>
					<p><?=$TC[$i][3]?>$</p>
					<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section>
	<?php 
		include_once('footer.php');
	 ?>
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
		<button id="home-btn">
			<a class="home-btn" href="#"><i class="fas fa-angle-double-up"></i></a>
		</button>
</body>
</html>