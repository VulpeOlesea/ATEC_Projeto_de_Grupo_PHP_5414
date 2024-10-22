<?php
class Book {
  // Properties
  public $title;
  public $author;
  public $price;
  public $image;

  function __construct($name, $author, $price, $image) {
    $this->name = $name;
    $this->author = $author;
    $this->price = $price;
    $this->image = $image;
  }

  function get_title() {
    return $this->title;
  }
  function get_author() {
    return $this->author;
  }
  function get_price() {
    return $this->price;
  }
  function get_image() {
    return $this->image;
  }
}
?>