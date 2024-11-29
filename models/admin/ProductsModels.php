<?php
require_once '../connect/connect.php';

class ProductsAdminModle extends Connect
{
    public function listProductAdmin()
    {
        $sql = "SELECT products.*, category.name AS category_name, brands.name AS brand_name
                FROM products
                INNER JOIN category ON products.category_id = category.category_id
                INNER JOIN brands ON products.brand_id = brands.brand_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllCategories()
    {
        $sql = 'SELECT * FROM category';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function getAllBrands()
    {
        $sql = 'SELECT * FROM brands';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllColors()
    {
        $sql = 'SELECT * FROM variant_colors';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addProductsModle($name, $category_id, $brand_id, $price, $sale_price, $description, $image, $slug)
    {
        $sql = "INSERT INTO products(name, category_id, brand_id, price, sale_price, description, image, slug, created_at) VALUES (?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $category_id, $brand_id, $price, $sale_price, $description, $image, $slug]);
    }

    public function addProducts_Variant($product_id, $variant_color_id, $variant_price, $variant_sale_price, $quantity)
    {
        $sql = "INSERT INTO product_variants(product_id, variant_color_id, variant_price, variant_sale_price, quantity, created_at) VALUES (?,?,?,?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$product_id, $variant_color_id, $variant_price, $variant_sale_price, $quantity]);
    }

    public function addProduct_Gallery($product_id, $gallery_image)
    {
        $sql = "INSERT INTO product_galleries(product_id,gallery_image, created_at) VALUES (?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$product_id, $gallery_image]);
    }

    public function getLastInsertId()
    {
        try {
            $connection = $this->connect();
            return $connection->lastInsertId();
        } catch (PDOException $e) {
            error_log("Lỗi khi lấy ID sản phầm vừa thêm: " . $e->getMessage());
            return null;
        }
    }

}