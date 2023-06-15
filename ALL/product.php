<?php 
	include_once('category.php')
 ?>
 <style>

	.shop-col{ 
		border-radius: 10px;
		margin: auto;
		padding: 20px 12px;
		box-sizing: border-box;
		padding-bottom: 100px;
		transition: 0.5s;
	}

	.shop-col img{
	width: 100%
	}

	.shop{
		width: 80%;
		margin: auto;
		text-align: center;
		padding-top: 20px;
	}

	.shop-col:hover{
		box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
	}

	.shop-row{
		margin-top: 5%;
		display: flex;
		justify-content: space-between;
		padding-left: 80px;
		float: left;
	}
 </style>
<section class="shop">

		<?php 
		if(isset($_GET['Catid']))
			$sql = "select * from product where CatId=" . $_GET['Catid'];
		elseif (isset($_GET['key'])) 
			$sql = "Select * From product Where ProductName like '%" . $_GET['key'] . "%'";
		else
			$sql = "select * from product";
		$rows = query($sql);
		for($i=0; $i<count($rows); $i++)
		{
			?>
			<div class="shop-row">
				<div class="shop-col">
					<img src="<?=$rows[$i][2]?>" width="100%" alt="">
					<div class="layer">
						<h3><?=$rows[$i][1]?></h3>
						<p><?=$rows[$i][3]?>$</p>
						<button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
					</div>
				</div>
			</div>
			<?php
		}
		?>
</section>