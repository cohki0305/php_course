<?php
  // Class というのは処理や値をまとまりにしたもの
  class Product {
    public static $name;
    public function __construct($name) {
      $this->name = $name;
    }
  }
  // construct は class から インスタンス を作るときに使う
?>
