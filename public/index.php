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
require_once '../controllers/client/favoritesController.php';





$action = isset($_GET['act']) ? $_GET['act'] : 'client';

$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductsAdminController();
$brandAdmin = new BrandsControllers();
$coupon = new CouponAdminControllers();
$auth = new AuthController();
$home = new HomeController();
$cart = new CartController();
<<<<<<< HEAD

=======
$favorite = new FavoritesController();
>>>>>>> d2386b70e125ec50377039c94b6b4740677d5870
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


    // thêm sản phẩm yêu thích
    case 'add-favorite-product':
        $favorite->addFavoriteProduct();
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
        $cart->index();
        break;
<<<<<<< HEAD
    case 'addToCart-byNow':
        $cart->addToCartOrBuyNow();
        break;
    case 'update-cart':
        $cart->update();
        break;
    case 'delete-cart':
        $cart->delete();
        break;
=======
    case 'add_to_cart':
        $cart->addtoCart($_SESSION['user']['user_id'], $_POST['product_id'], $_POST['variant_id'], $_POST['quantity']);
        break;
>>>>>>> d2386b70e125ec50377039c94b6b4740677d5870

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
    case 'update-profile':
        include '../views/client/profile/updateProfile.php';
        break;
    case 'update-contact-user':
        $auth->saveUpdateContact();
        break;
    case 'manage-avatar':
        $auth->saveUpdataAvatar();
        break;
    case 'manage-address':
        $auth->saveUpdateAddress();
        break;
}
