<?php 

function function_new_product($prod_name, $prod_author, $prod_price, $prod_description, $prod_category, $prod_image){
	include 'connections/config.php';
	$img = $_FILES["prod_image"]["name"];
	$temp = explode(".", $_FILES["prod_image"]["name"]);
	$new_img = round(microtime(true)) . '.' . end($temp);

	move_uploaded_file($_FILES["prod_image"]["tmp_name"], 'img/products/'.$new_img);

	$prod_name = mysqli_real_escape_string($conn, $prod_name);
	$prod_author = mysqli_real_escape_string($conn, $prod_author);
	$prod_price = mysqli_real_escape_string($conn, $prod_price);
	$prod_description = mysqli_real_escape_string($conn, $prod_description);

	mysqli_query($conn,"INSERT INTO products (prod_name, prod_author, prod_price, prod_description, prod_category, prod_image) 
		VALUES ('$prod_name','$prod_author','$prod_price','$prod_description','$prod_category','$new_img')");

	echo '<meta http-equiv="refresh" content="0;url=index.php?nav=admin&opt=products">';
}
?>