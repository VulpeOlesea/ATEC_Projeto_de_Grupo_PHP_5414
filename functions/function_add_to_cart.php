<?php
include 'connections/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $prod_id = $_POST['prod_id'];
    $prod_image = $_POST['prod_image'];
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $is_existing = false;
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['prod_id'] == $prod_id) {
            $is_existing = true;
            break;
        }
    }

    if (!$is_existing) {
        $_SESSION['cart'][] = [
            'prod_id' => $prod_id,
            'prod_image' => $prod_image,
            'prod_name' => $prod_name,
            'prod_price' => $prod_price
        ];
        echo "Produto adicionado ao carrinho!";
    }
}
?>

