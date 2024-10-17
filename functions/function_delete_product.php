<?php 
session_start();
$prod_id = $_REQUEST['prod_id'];
	include 'connections/config.php';

	mysqli_query($conn,"DELETE FROM products WHERE prod_id = '$prod_id'");

	echo '<meta http-equiv="refresh" content="0;url=../index.php?nav=admin&opt=products">';




?>