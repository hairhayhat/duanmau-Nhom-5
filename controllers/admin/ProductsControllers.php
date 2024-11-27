<?php
require_once '../models/admin/ProductsModels.php';

class ProductsAdminController extends ProductsAdminModle
{
    public function listProduct()
    {
        $list_Products = (new ProductsAdminModle)->listProductAdmin();
        include '../views/admin/products/listProducts.php';
    }
}