<?php 

function count_products(){
	include 'connections/config.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(prod_id) AS total FROM products"));
	echo $q["total"];
}
?>