<?php
session_start();
require_once '../connect/connect.php';
require_once '../controllers/admin/CategoriesControllers.php';
require_once '../controllers/admin/ProductsControllers.php';
require_once '../controllers/admin/BrandsControllers.php';
require_once '../controllers/admin/CouponAdminControllers.php';
require_once '../controllers/client/AuthController.php';
require_once '../controllers/client/HomeController.php';
require_once '../controllers/client/CartController.php';





$action = isset($_GET['act']) ? $_GET['act'] : 'client';

$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductsAdminController();
$brandAdmin = new BrandsControllers();
$coupon = new CouponAdminControllers();
$auth = new AuthController();
$home = new HomeController();
$cart = new CartController();
switch ($action) {
    case 'admin':
        include '../views/admin/index.php';
        break;
    

    //client
    case 'client':
        $home->index();
        break;
    case 'detail-category':
        $home->getDetailCategory();
        $home->header();
        break;
    case 'detail-product':
        $home->detailProduct();
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
    case 'coupon-edit':
        $coupon->edit();
        break;
    case 'coupon-update':
        $coupon->update();
        break;
    case 'coupon-delete':
        $coupon->delete();
        break;

    //hóa đơn
    case 'cart':
        include '../views/client/cart.php';
        break;
    case 'add_to_cart':
        $cart->addtoCart($_SESSION['user']['user_id'],$_POST['product_id'],$_POST['variant_id'],$_POST['quantity']);
        break;
    
    //đăng nhập đăng xuất
    case 'login':
        $auth->signin();
        break;
    case 'register':
        $auth->registers();
        break;
    case 'logout':
        $auth->logout();
        break;
}
