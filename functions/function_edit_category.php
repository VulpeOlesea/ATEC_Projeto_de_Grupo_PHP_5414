<?php 

function function_edit_category($cat_id, $cat_name){
	include 'connections/config.php';
	$cat_name = mysqli_real_escape_string($conn,$cat_name);
	mysqli_query($conn,"UPDATE categorias SET cat_name = '$cat_name' WHERE cat_id = '$cat_id'");
	echo '<meta http-equiv="refresh" content="0;url=index.php?nav=admin&opt=categories">';
}

?>