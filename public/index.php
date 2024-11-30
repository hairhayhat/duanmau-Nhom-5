<?php
session_start();
require_once '../connect/connect.php';
require_once '../controllers/admin/CategoriesControllers.php';
require_once '../controllers/admin/ProductsControllers.php';
require_once '../controllers/admin/BrandsControllers.php';
require_once '../controllers/admin/CouponAdminControllers.php';
require_once '../controllers/client/AuthController.php';
require_once '../controllers/client/HomeController.php';





$action = isset($_GET['act']) ? $_GET['act'] : 'admin';

$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductsAdminController();
$brandAdmin = new BrandsControllers();
$coupon = new CouponAdminControllers();
$auth = new AuthController();
$home = new HomeController();
switch ($action) {
    case 'admin':
        include '../views/admin/index.php';
        break;
    case 'client':
        $home->index();
        break;

    //Sản phẩm của admin
    case 'list-products':
        $productAdmin->listProduct();
        break;
    case 'add-products':
        $productAdmin->addProducts();
        break;
    case 'save-add-products':
        $productAdmin->saveAddProducts();
        break;
    case 'edit-products':
        $productAdmin->saveEditProduct();
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

    //coupon
    case 'coupon-list':
        $coupon->index();
        break;
    case 'coupon-create':
        $coupon->create();
        break;

    //Chi tiết sản phẩm
    case 'product_detail':
        $home->getProductDetail();
        break;


    // sản phẩm của client
    case 'list-products-client':
        include '../views/client/products/listProducts.php';
        break;


    //đăng nhập đăng xuất
    case 'login':
        $auth->signin();
        break;
    case 'register':
        $auth->registers();
        break;
}
