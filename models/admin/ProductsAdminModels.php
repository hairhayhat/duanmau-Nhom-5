<?php
require_once '../connect/connect.php';

class ProductsAdminModle extends Connect
{
    public function listProductAdmin()
    {
        $sql = 'SELECT * FROM products';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}