<?php
require_once '../models/admin/CategoriesModels.php';
require_once '../models/admin/ProductsModels.php';
class HomeController
{
    protected $category;
    protected $product;
    public function __construct(){
        $this->category =new CategoryAdminModel();
        $this->product =new ProductsAdminModle();
    }
    public function index(){
        $category = $this->category->listCategoriesAdmin();
        $product = $this->product->listProductAdmin();
        include '../views/client/index.php';

    }
    public function getProductDetail(){
        include '../views/client/products/productDetail.php';
    }
}