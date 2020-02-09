<?php
  // Class というのは処理や値をまとまりにしたもの
  class Product {
    private $id;
    private $name; // private にするとインスタンスからアクセスできない
    private $price;
    private $image;

    public function __construct($id, $name, $price, $image) {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->image = $image;
    }

    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getImage() {
      return $this->image;
    }

    public function getId() {
      return $this->id;
    }
  }
  // construct は class から インスタンス を作るときに使う
?>
