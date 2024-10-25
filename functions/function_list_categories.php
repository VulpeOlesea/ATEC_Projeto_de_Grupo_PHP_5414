<?php 

function function_list_categories(){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT cat_id, cat_name FROM categorias");
	while($a = mysqli_fetch_array($q)){
	
	if($_SESSION["log_role"] == 1){
		echo '<tr><td>'.$a["cat_name"].'</td>';
		echo '<td>
		<form method="post">
			<input type="hidden" name="cat_id" value="'.$a["cat_id"].'">
			<button type="submit" name="delete_category" style="border:none;"><i class="bi bi-trash3" style="color:red;"></i></button>
			<a href="?nav=admin&opt=categories&edit='.$a["cat_id"].'"><i class="bi bi-pencil-square"></i></a>
		</form>
		</td></tr>';
		}else{
			echo '<li><a href="#">'.$a["cat_name"].'</a></li>';
		}
		
	}
}

?>