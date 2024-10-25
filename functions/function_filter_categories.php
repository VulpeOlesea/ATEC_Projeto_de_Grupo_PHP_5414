<?php
include '../connections/config.php';
include 'function_all_products.php';

$cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : 0;
function_all_products(1,$cat_id);
?>
