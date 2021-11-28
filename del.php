<?php
require "config.php";
require "model/db.php";
require "model/product.php";
$product = new product;
if(isset($_GET['id'])){
    $product->delProduct($_GET['id']);
}
header('location:products.php');