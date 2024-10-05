<?php 

function function_edit_category($cat_id, $cat_nome){
	include 'connections/config.php';
	$cat_nome = mysqli_real_escape_string($conn,$cat_nome);
	mysqli_query($conn,"UPDATE categorias SET cat_nome = '$cat_nome' WHERE cat_id = '$cat_id'");
	echo '<meta http-equiv="refresh" content="0;url=index.php?nav=admin&opt=categories">';
}

?>