<?php
require_once '../connect/connect.php';
class Cart extends connect{

    public function getAllCart():array{
        $sql = 'SELECT  
            carts.cart_id as cart_id,
            products.name as product_name,
            products.image as product_image,
            product_variants.variant_price as product_variant_price,
            product_variants.variant_sale_price as product_variant_sale_price,
            variant_colors.color_name as variant_color_name,
            carts.quantity as quantity
            FROM carts
            
            LEFT JOIN products ON carts.product_id = products.product_id
            LEFT JOIN product_variants ON carts.variant_id = products.product_id
            LEFT JOIN variant_colors ON product_variants.variant_color_id = variant_colors.variant_color_id
            WHERE carts.user_id = ?
            ';
            $stmt = $this->connect()->prepare(query:$sql);
            $stmt->execute(params:[$_SESSION['user']['user_id']]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        ;
    }
    public function addtoCart($user_id, $product_id, $variant_id, $quantity): bool{
        $sql = "INSERT INTO carts(user_id,product_id,variant_id,quantity) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare(query:$sql);
        return $stmt->execute(params:[$user_id, $product_id, $variant_id, $quantity]);
    }
    public function checkCart(): mixed{
        $sql = "SELECT * FROM carts WHERE user_id = ? AND variant_id = ? AND product_id = ?;";
        $stmt = $this->connect()->prepare(query:$sql);
        $stmt->execute(params:[$_SESSION['user']['user_id'],$_POST['variant_id'],$_POST['product_id']]);
        return $stmt->fetch();
    }
    public function updateCart($user_id,$product_id,$variant_id,$quantity):bool{
        $sql = "UPDATE carts SET quantity = ? WHERE user_id = ? AND variant_id = ? AND product_id = ?;";
        $stmt = $this->connect()->prepare(query:$sql);
        return $stmt->execute(params:[$quantity,$user_id,$variant_id,$product_id]);
    }
}