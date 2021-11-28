<?php
require "config.php";
require "model/db.php";
require "model/manufactures.php";
$manufacture = new manufactures;
if(isset($_GET['manu_id'])){
    $manufacture->delManufacture($_GET['manu_id']);
}
header('location:manufacture.php');