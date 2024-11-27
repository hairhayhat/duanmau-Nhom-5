<?php
session_start();
require_once '../connect/connect.php';
require_once '../controllers/admin/CategoriesAdminControllers.php';
require_once '../controllers/admin/ProductsAdminControllers.php';





$action = isset($_GET['act']) ? $_GET['act'] : 'admin';

$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductsAdminController();

switch ($action) {
    case 'admin':
        include '../views/admin/index.php';
        break;
    case 'client':
        include '../views/client/index.php';
        break;
//danh sách và thêm sp
    case 'list-products':
        $productAdmin->listProduct();
        break;
    case 'add-products':
        include '../views/admin/products/addProducts.php';
        break;
//Danh mục của admin
    case 'list-categories':
        $categoryAdmin->listCategories();
        break;
    case 'add-categories':
        $categoryAdmin->saveAddCategory();
        break;
    case 'edit-categories':
        $categoryAdmin->saveEditCategory();
        break;
// sản phẩm của client
    case 'list-products-client':
        include '../views/client/products/listProducts.php';
        break;
}
