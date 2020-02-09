<?php require_once 'products.php' ?>
<?php require_once 'functions.php' ?>

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
      <h1 class="title">DailyTrial Shopping></h1>
      <form method="post" action="cart.php">
        <div class="cards-container">
        <?php foreach($products as $product): ?>
        <div class="card">
          <img class="card-image" src="<?php echo $product->getImage(); ?>" alt="">
          <p class="card-title"><?php echo $product->getName(); ?></p>
          <div class="flex justify-between">
            <p class="card-price"><?php echo displayPrice($product->getPrice()); ?></p>
            <input min="0" class="item-number" type="number" name="<?php echo $product->getId(); ?>" value="0">
          </div>
        </div>
        <?php endforeach; ?>
      </form>
      <div class="btn-footer bg-white">
        <input class="cart-btn" type="submit" name="submit" value="カートに追加" />
      </div>
    </div>
  </div>
</body>
</html>
