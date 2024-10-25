<?php 

function function_edit_product($prod_id, $prod_name, $prod_author, $prod_price, $prod_description, $prod_category, $prod_image){
	include 'connections/config.php';

	$prod_name = mysqli_real_escape_string($conn, $prod_name);
	$prod_author = mysqli_real_escape_string($conn, $prod_author);
	$prod_price = mysqli_real_escape_string($conn, $prod_price);
	$prod_description = mysqli_real_escape_string($conn, $prod_description);
	$prod_category = mysqli_real_escape_string($conn, $prod_category);
	$prod_id = mysqli_real_escape_string($conn, $prod_id);

	if (!empty($_FILES["prod_image"]["name"])) {

		$temp = explode(".", $_FILES["prod_image"]["name"]);
		$new_img = round(microtime(true)) . '.' . end($temp);
		move_uploaded_file($_FILES["prod_image"]["tmp_name"], 'img/products/'.$new_img);

		$query = "UPDATE products SET 
					prod_name = '$prod_name', 
					prod_author = '$prod_author', 
					prod_price = '$prod_price', 
					prod_description = '$prod_description', 
					prod_category = '$prod_category', 
					prod_image = '$new_img' 
				  WHERE prod_id = '$prod_id'";
	} else {

		$query = "UPDATE products SET 
					prod_name = '$prod_name', 
					prod_author = '$prod_author', 
					prod_price = '$prod_price', 
					prod_description = '$prod_description', 
					prod_category = '$prod_category' 
				  WHERE prod_id = '$prod_id'";
	}

	if (mysqli_query($conn, $query)) {
		echo '<meta http-equiv="refresh" content="0;url=index.php?nav=admin&opt=products">';
    }
}
?>
