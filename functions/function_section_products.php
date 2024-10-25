<?php 

function function_section_products(){
    include 'connections/config.php';
    $q = mysqli_query($conn,"SELECT prod_id, prod_image, prod_name, prod_author, prod_price FROM products");

    if(mysqli_num_rows($q) > 0) {
        echo '<div class="row">';
        
        while($a = mysqli_fetch_array($q)){
            echo '
            <div class="col-md-3">
                <div class="product-item text-center">
                    <figure class="product-style">
                        <img src="img/products/'.$a["prod_image"].'" alt="'.$a["prod_name"].'" class="product-thumb rounded" style="width:280px; height:400px;">
                        <button type="button" class="add-to-cart" 
                                data-prod-id="'.$a["prod_id"].'"
                                data-prod-image="'.$a["prod_image"].'"
                                data-prod-name="'.$a["prod_name"].'" 
                                data-prod-price="'.$a["prod_price"].'">
                                Adicionar ao carrinho
                        </button>
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
