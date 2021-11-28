<?php
require "config.php";
require "model/db.php";
require "model/manufactures.php";
$manufactures = new manufactures;
if(isset($_POST['submit'])){
    $manu_id=$_POST['manu_id'];
    $manu_name=$_POST['manu_name'];

    $manufactures->addManufactures($manu_id,$manu_name);

    
}
header('location:manufacture.php');