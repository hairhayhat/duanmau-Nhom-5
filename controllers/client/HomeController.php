<?php
require_once '../models/admin/CategoriesModels.php';
require_once '../models/admin/ProductsModels.php';
class HomeController
{
    protected $category;
    protected $product;
    protected $brand;
    protected $coupon;
    public function __construct()
    {
        $this->category = new CategoryAdminModel();
        $this->product = new ProductsAdminModle();
        $this->brand = new BrandsModels();
        $this->coupon = new Coupon();
    }
    public function index()
    {
        $categories = $this->category->listCategoriesAdmin();
        $product = $this->product->listProducts();
        include '../views/client/index.php';
    }
    public function header()
    {
        $categories = $this->category->listCategoriesAdmin();
        include '../views/client/layout/header.php';
    }

    public function getDetailCategory()
    {
        $categories = $this->category->listCategoriesAdmin();
        $brands = $this->brand->getAllBrands();
        $colors = $this->product->getAllColors();
        $coupons = $this->coupon->listCoupon();
        $id = $_GET['category_id'];
        $categoryById = $this->category->getCategoryById($id);
        $productByCate = $this->product->getAllProductByCate($id);

        include '../views/client/category/detailCategory.php';
    }

    public function detailProduct()
    {
        $categories = $this->category->listCategoriesAdmin();
        $brands = $this->brand->getAllBrands();
        $colors = $this->product->getAllColors();
        $coupons = $this->coupon->listCoupon();
        $id = $_GET['product_id'];
        $detailProduct = $this->product->getProductById($id);
        $detailVariant = $this->product->getProductVariantByid($id);
        $detailGallery = $this->product->getProductGalleryByid($id);
        $productByCate = $this->product->getAllProductByCate($detailProduct[0]['category_id']);
        include '../views/client/products/detailProduct.php';
    }
}