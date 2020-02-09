<?php
  require_once 'classes/product.php';

  $avocado = new Product("avocado", "アボカド", 230, "./images/image_1.jpg");
  $orange  = new Product("orange", "オレンジ", 100, "./images/image_2.jpg");
  $products = [
    $avocado,
    $orange,
    new Product("lemon", "レモン", 500, "./images/image_3.jpg"),
    new Product("pineapple", "パイナップル", 900, "./images/image_4.jpg")
  ];
?>
