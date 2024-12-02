<?php
require_once '../connect/connect.php';
class Cart extends connect{
    public function getAllCart():array{
        $sql= 'select
        carts.cart_Id as cart_id,
        products.name as product_name,
        products.image as product_image,
        products.slug as product_slug,
        products_variants.price as product_variant_price,
        products_variants.sale_price as product_variant_sale_price,
        variant_colors.color_name as variant_color_name,
        variant_sizes.size as variant_size_name,
        carts.quantity as quantity
        from carts
        left join products on carts.product_id = products.product_Id
        left join product_variants on product_variants.product_variant_Id = carts.variant_id
        left join variant_colors on product_variants.variant_color_id = variant_colors.variant_color_Id
        left join variant_sizes on product_variants.variant_size_id = variant_sizes.variant_size_Id
        where carts.user_id = ?
        ';

        $stmt = $this->connect()->prepare(query: $sql);
        $stmt->execute(params:[$_SESSION['user']['user_id']]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function addtoCart($user_id,$product_id,$variant_id,$quantity):bool{
        $sql = 'INSERT INTO carts(user_id,product_id,variant_id,quantity) VALUES(?,?,?,?)';
        $stmt = $this->connect()->prepare(query:$sql);
        return $stmt->execute(params:[$user_id,$product_id,$variant_id,$quantity]);
    }
    public function checkCart():mixed{
        $sql = 'SELECT * FROM carts WHERE user_id = ? AND product_id = ? AND variant_id = ?';
        $stmt = $this->connect()->prepare(query:$sql);
        $stmt->execute(params:[$_SESSION['user']['user_id'],$_POST['product_id'],$_POST['variant_id']]); 
        return $stmt->fetch(); 
    }
    public function updateCart($user_id,$product_id,$variant_id,$quantity):bool{
        $sql = 'UPDATE carts SET quantity = ? WHERE user_id = ? AND product_id = ? AND variant_id = ?';
        $stmt = $this->connect()->prepare(query:$sql);
        return $stmt->execute(params:[$quantity,$_SESSION['user']['user_id'],$_POST['product_id'],$_POST['variant_id']]); 
    }
}