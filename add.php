<?php
require "config.php";
require "model/db.php";
require "model/product.php";
$product = new product;
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $manu_id=$_POST['manu'];
    $type_id=$_POST['protype'];
    $price=$_POST['price'];
    $descrip=$_POST['description'];
    $pro_image=$_FILES['pro_image']['name'];
    $product->addProduct($id,$name,$manu_id,$type_id,$price,$pro_image,$descrip);

    $target_dir = ".../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file);
}
header('location:products.php');
