<?php
  // Class というのは処理や値をまとまりにしたもの
  class Product {
    private $name; // private にするとインスタンスからアクセスできない
    public function __construct($name) {
      $this->name = $name;
    }

    public function getName() {
      return $this->name;
    }
  }
  // construct は class から インスタンス を作るときに使う
?>
