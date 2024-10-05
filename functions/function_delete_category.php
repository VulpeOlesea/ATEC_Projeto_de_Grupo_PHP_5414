<?php 

function function_delete_category($cat_id){
	include 'connections/config.php';
	mysqli_query($conn,"DELETE FROM categorias WHERE cat_id = '$cat_id'");
	echo '<meta http-equiv="refresh" content="0;url=index.php?nav=admin&opt=categories">';
}

?>