<?php
class manufactures extends Db
{
    public function getAllManufacture()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllManu()
    {
        $sql = self::$connection->prepare("SELECT *  FROM products,manufactures,protypes
        WHERE products.manu_id=manufactures.manu_id
        AND products.type_id=protypes.type_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //
    }
    public function addManufactures($manu_id,$manu_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_id`, `manu_name`) VALUES (?,?)"); 
        $sql->bind_param("is",$manu_id,$manu_name);
        return $sql->execute();
    }
    public function delManufacture($manu_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id`=?");
        $sql->bind_param("i", $manu_id);
        return $sql->execute();
    }
}