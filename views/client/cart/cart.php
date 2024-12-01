<?php
require_once '../connect/connect.php';
class Cart extends connect{
    public function getAllCart():array{
        $sql= 'seclect
        cart.cart_Id as cart_id,
        products.name as product_name,
        products.image as product_image,
        products_variants.price as product_variant_price,
        products_variants.sale_price as product_variant_sale_price,
        variant_colors.color_name as variant_color_name,
        variant_sizes.size as variant_size_name,
        cart.quantity as quantity
        from cart
        left join products on cart.product_id = products.product_id
        left join products_variants on cart.variant_id = products_variants.variant_id
        left join variant_colors on products_variants.variant_color_id = variant_colors.variant_color_id
        left join variant_sizes on products_variants.variant_size_id = variant_sizes.variant_size_id
        where cart.user_id = ?
        ';

        $stmt = $this->connect()->prepare(query: $sql);
        $stmt->execute(params:[$_SESSION['user']['user_id']]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function addtoCart($user_id,$product_id,$variant_id,$quantity):bool{
        $sql = 'INSERT INTO cart(user_id,product_id,variant_id,quantity) VALUES(?,?,?,?)';
        $stmt = $this->connect()->prepare(query:$sql);
        return $stmt->execute(params:[$user_id,$product_id,$variant_id,$quantity]);
    }
}