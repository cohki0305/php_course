<?php
  function calPriceIncludedTax($price) {
    $taxRate = 0.1;
    return $price + $price * $taxRate;
  }

  function displayPrice($price) {
    $priceIncludedTax = calPriceIncludedTax($price);
    return $priceIncludedTax."円";
  }
?>
