<?php

function function_delete_cart_product(){
    include 'connections/config.php';
    
    if (isset($_GET['remove'])) {
        $removeIndex = $_GET['remove'];
        if (isset($_SESSION['cart'][$removeIndex])) {
            unset($_SESSION['cart'][$removeIndex]);
            $_SESSION['cart'] = array_values($_SESSION['cart']); 
        }
        exit();
    }
}

?>