<?php
session_start();
require_once '../connect/connect.php';
require_once '../controllers/admin/CategoriesControllers.php';
require_once '../controllers/admin/ProductsControllers.php';
require_once '../controllers/admin/BrandsControllers.php';
require_once '../controllers/client/AuthController.php';





$action = isset($_GET['act']) ? $_GET['act'] : 'admin';

$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductsAdminController();
$brandAdmin = new BrandsControllers();
$auth = new AuthController();

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

    // thương hiệu
    case 'list-brands':
        $brandAdmin->listBrands();
        break;
    case 'add-brands':
        $brandAdmin->saveAddBrand();
        break;
    case 'edit-brands':
        $brandAdmin->saveEditBrand();
        break;




    // sản phẩm của client
    case 'list-products-client':
        include '../views/client/products/listProducts.php';
        break;
    case 'login':
        $auth->signin();
        break;
    case 'register':
        $auth->registers();
        break;
}
