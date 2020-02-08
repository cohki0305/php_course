<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css" >
  <title>デイトラ PHP</title>
</head>
<body>
  <div class="container">
    <div class="app-container">
      <h1 class="title">DailyTrial Shopping</h1>
      <div class="cards-container">
        <?php
          $products = [
            [
              "name" => "アボカド",
              "price" => 230,
              "image" => "./images/image_1.jpg"
            ],
            [
              "name" => "オレンジ",
              "price" => 100,
              "image" => "./images/image_2.jpg"
            ],
            [
              "name" => "レモン",
              "price" => 500,
              "image" => "./images/image_3.jpg"
            ],
            [
              "name" => "パイナップル",
              "price" => 900,
              "image" => "./images/image_4.jpg"
            ],
          ];
        ?>
      <?php foreach($products as $product): ?>
      <div class="card">
        <img class="card-image" src="<?php echo $product["image"] ?>" alt="">
        <p class="card-title"><?php echo $product["name"] ?></p>
        <div class="flex justify-between">
          <p class="card-price"><?php echo $product["price"]."円" ?></p>
          <input min="0" class="item-number" type="number" value="0">
        </div>
      </div>
      <?php endforeach; ?>
      <div class="btn-footer">
        <div class="cart-btn">
          カートに追加
        </div>
      </div>
    </div>
  </div>
</body>
</html>
