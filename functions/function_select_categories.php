<?php 

function function_select_categories($prod_category){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT * FROM categorias");
	while ($a = mysqli_fetch_array($q)) {
		if($a["cat_id"] == $prod_category){
			echo '<option value="'.$a["cat_id"].'" selected>'.$a["cat_name"].'</option>';
		}
		echo '<option value="'.$a["cat_id"].'">'.$a["cat_name"].'</option>';
	}
}
?>