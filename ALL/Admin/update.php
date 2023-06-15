<?php 
$id = $_GET['updateid'];
$sql = "Select * From Product Where ProductId = '" . $id . "'";

$rows = query($sql);
?>
<section>
	<style>
	.shop-form input[type=text], select {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	.shop-form input[type=submit] {
	  width: 100%;
	  background-color: #4CAF50;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	.shop-form input[type=submit]:hover {
	  background-color: #45a049;
	}

	.shop-form {
		margin-right: 100px;
		margin-left: 100px;
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}

	</style>
	<div class="shop-form">
		<h3 style="text-align: center;">Add New Product</h3>
  		<form action="" method="post" enctype="multipart/form-data">
   		<label for="id">Product ID</label>
   		<input type="text" id="idshow" value="<?=$rows[0][0]?>" disabled>
		<input type="hidden" id="id" value="<?=$rows[0][0]?>" name="id">

   		<label for="Name">Product Name</label>
   		<input type="text" name="name" id="fname" value="<?=$rows[0][1]?>">

   		<label for="image">Product image</label>
   		<input type="text" name="imageold" id="imageold" value="<?=$rows[0][2]?>">
		<input type="file" name="image" id="image">

   		<select name="cat" id="cat">				
						<?php 
						$sql = "Select * From Category";
						$rowcats = query($sql);
						for($i=0; $i<count($rowcats); $i++)
						{
							if($rows[0][4]==$rowcats[$i][0])
							{
								?>
					<option value="<?=$rowcats[$i][0]?>" selected><?=$rowcats[$i][1]?></option>
								<?php
							}
							else
							{
								?>

					<option value="<?=$rowcats[$i][0]?>"><?=$rowcats[$i][1]?></option>
								<?php
							}
						}
						?>
				</select>
  		<label for="image">Price</label>
   		<input type="text" name="price" id="price" value="<?=$rows[0][3]?>">
    	<input type="submit" value="Update" name="update">
  </form>
</div>
</section>