<?php 

function function_new_category($cat_name){
	include 'connections/config.php';
	$cat_name = mysqli_real_escape_string($conn, $cat_name);
	$q = mysqli_query($conn,"SELECT cat_name FROM categorias WHERE cat_name = '$cat_name'");
	$check = mysqli_num_rows($q);
	if($check == 0){
		//Não existe a categoria
		mysqli_query($conn,"INSERT INTO categorias (cat_name) VALUES ('$cat_name')");
		echo '<meta http-equiv="refresh" content="0;url=index.php?nav=admin&opt=categories">';
	}else{
		//Já existe a categoria
		echo 'A categoria indicada já existe. Escolha outro nome.';

	}
}
?>