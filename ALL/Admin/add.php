
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
   		<input type="text" id="id" value="" name="id">

   		<label for="Name">Product Name</label>
   		<input type="text" name="name" id="fname" value="">

   		<label for="image">Product image</label>
   		<input type="file" name="image" id="image">

   		<select name="cat" id="cat">				
			<?php 
				$sql = "Select * From Category";
				$rows = query($sql);
				for($i=0; $i<count($rows); $i++)
				{
					?>
					<option value="<?=$rows[$i][0]?>"><?=$rows[$i][1]?></option>
					<?php
				}
			?>
		</select>
  		<label for="image">Price</label>
   		<input type="text" name="price" id="price" value="">
    	<input type="submit" value="Save" name="add">
  </form>
</div>
</section>