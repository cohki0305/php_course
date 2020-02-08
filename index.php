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
          $productA = [
            "name" => "アボカド",
            "price" => 230,
            "image" => "./images/image_1.jpg"
          ];
          $productB = [
            "name" => "オレンジ",
            "price" => 100,
            "image" => "./images/image_2.jpg"
          ];
        ?>
        <div class="card">
          <img class="card-image" src="<?php echo $productA["image"] ?>" alt="">
          <p class="card-title"><?php echo $productA["name"] ?></p>
          <div class="flex justify-between">
            <p class="card-price"><?php echo $productA["price"]."円" ?></p>
            <input min="0" class="item-number" type="number" value="0">
          </div>
        </div>
        <div class="card">
          <img class="card-image" src="<?php echo $productB["image"] ?>" alt="">
          <p class="card-title"><?php echo $productB["name"] ?></p>
          <div class="flex justify-between">
            <p class="card-price"><?php echo $productB["price"]."円" ?></p>
            <input min="0" class="item-number" type="number" value="0">
          </div>
        </div>
      </div>
      <div class="btn-footer">
        <div class="cart-btn">
          カートに追加
        </div>
      </div>
    </div>
  </div>
</body>
</html>
