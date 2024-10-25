<?php
function_delete_cart_product();
?>

<div class="d-flex flex-row row-m">
    <div class="col-lg-12 col-sm-12">
        <h3>Produtos no Carrinho</h3>

        <table class="table" style="width: 100%;">
            <thead class="table-dark">
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Remover</th>
            </thead>
            <tbody id="add-to-cart">
                <?php
                //Verifica se o carrinho não está vazio
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    foreach ($_SESSION['cart'] as $index => $item) {
                        echo '
                        <tr>
                            <td style="width:10%; height:auto;">
                                <img src="img/products/'. $item['prod_image'] . '" style="width:100px; height:auto;">
                            </td>
                            <td style="width:30%; height:auto;">' . $item['prod_name'] . '</td>
                            <td style="width:20%; height:auto;">€ ' . number_format($item['prod_price'], 2, '.', ',') . '</td>
                            <td style="width:10%; height:auto;">
                                <a href="user_cart.php?remove=' . $index . '" class="btn btn-danger">Remover</a>
                            </td>
                        </tr>';
                    }

                    // Montante total
                    $totalPrice = 0;
                    foreach ($_SESSION['cart'] as $item) {
                        $totalPrice += $item['prod_price'];
                    }
                    echo '
                    <tr>
                        <td colspan="2" class="text-right"><strong>Total:</strong></td>
                        <td colspan="2">€ ' . number_format($totalPrice, 2, '.', ',') . '</td>
                    </tr>';
                } else {
                    echo '<tr><td colspan="4">O seu carrinho está vazio.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
