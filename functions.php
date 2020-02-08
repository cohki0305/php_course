<?php
  function calPriceIncludedTax($price) {
    $taxRate = 0.1;
    return $price + $price * $taxRate;
  }
?>
