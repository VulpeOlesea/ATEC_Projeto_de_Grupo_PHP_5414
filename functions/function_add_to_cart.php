<?php 

function add_to_cart($name, $author, $price, $image){
    include 'classes/book.php';
	$newProduct = new Book($name, $author, $price, $image);
    $_SESSION[$booksInCart][] = $newProduct;
}
?>