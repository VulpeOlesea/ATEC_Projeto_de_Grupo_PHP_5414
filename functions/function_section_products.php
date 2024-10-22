<?php 

function function_section_products(){
    include 'connections/config.php';
    $q = mysqli_query($conn,"SELECT prod_id, prod_image, prod_name, prod_author, prod_price FROM products");

    if(mysqli_num_rows($q) > 0) {
        echo '<div class="row">';
        
        while($a = mysqli_fetch_array($q)){
            echo '
            <div class="col-md-3">
                <div class="product-item">
                    <figure class="product-style">
                        <img src="img/products/'.$a["prod_image"].'" alt="'.$a["prod_name"].'" class="product-thumb" style="width:100%; height:auto;">
                        <button id='.$a["prod_id"].' type="submit" class="add-to-cart" data-product-tile="add-to-cart">Adicionar ao carrinho</button>
                    </figure>
                    <figcaption>
                        <h3>'.$a["prod_name"].'</h3>
                        <span>'.$a["prod_author"].'</span>
                        <div class="item-price">€ '.$a["prod_price"].'</div>
                    </figcaption>
                </div>
            </div>';
        }

        echo '</div>';
    } else {
        echo "<p>No products found.</p>";
    }
}
?>
