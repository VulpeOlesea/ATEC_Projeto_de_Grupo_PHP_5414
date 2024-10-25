<?php
function function_all_products($var,$cat_id) {
    if ($var == 1){
        include '../connections/config.php';
    }else{
        include 'connections/config.php';
    }

    if ($cat_id == 0) {
        $query = "SELECT * FROM products";
    } else {
        $query = "SELECT * FROM products WHERE prod_category = '$cat_id'";
    }

    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        while ($product = mysqli_fetch_array($result)) {
            echo '
            <tr>
                <td style="width:10%; height:auto;"><img src="img/products/' . $product["prod_image"] . '" style="width: 50px; height: 60px;"></td>
                <td style="width:50%; height:auto;">' . $product["prod_name"] . '</td>
                <td style="width:20%; height:auto;">' . number_format($product["prod_price"], 2, '.', ',') . '€</td>
                <td style="width:20%; height:auto;">
                    <button type="submit" name="delete_produto" style="border:none;"><i class="bi bi-trash3" style="color:red;"></i></button>
                    <a href="?nav=admin&opt=products&edit=' . $product["prod_id"] . '"><i class="bi bi-pencil-square"></i></a>
                </td>
            </tr>';
        }
    } else {
        echo '<tr><td colspan="4">Não há resultados.</td></tr>';
    }
    mysqli_close($conn);
}
?>
