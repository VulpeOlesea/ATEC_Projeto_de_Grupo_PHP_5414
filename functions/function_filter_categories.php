<?php

@$cat_id = $_REQUEST['cat_id'];

include 'connections/config.php';

$q = mysqli_query($conn,"SELECT * FROM products WHERE prod_category = '$cat_id'");
$check = mysqli_num_rows($q);
if($check >= 1){
	while($a = mysqli_fetch_array($q)){
		echo '
		<tr>
			<td style="width:10%; height:auto;"><img src="img/products/'.$a["prod_image"].'"></td>
			<td style="width:50%; height:auto;">'.$a["prod_name"].'</td>
			<td style="width:20%; height:auto;">'.number_format($a["prod_price"], 2,'.',',').'€</td>
			<td style="width:20%; height:auto;">
				<a href="functions/function_delete_product.php?prod_id='.$a["prod_id"].'"><i class="bi bi-trash3" style="color:red;"></i></a>
				<a href="?nav=admin&opt=products&edit='.$a["prod_id"].'"><i class="bi bi-pencil-square"></i></a>
			</td>
		</tr>
		';
	}
}else{
	echo 'Não há resultados';
}


?>