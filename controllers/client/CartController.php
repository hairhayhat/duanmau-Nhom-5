<?php
require_once '../models/client/Cart.php';

class CartController extends Cart
{
    public function addtoCart(): void
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
            if(empty($_POST['variant_id'])) {
                $_SESSION['error'] = 'Vui lòng chọn sản phẩm và số lượng';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            $checkCart = $this->checkCart();
            if($checkCart) {
                $quantity = $checkCart['quantity'] + $_POST['quantity'];
                $updateCart = $this->updateCart(
                $_SESSION['user']['user_id'],
                   $_POST['product_id'],
                    $_POST['variant_id'],
                    $_POST['quantity']
                );
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
        }else {
            $addtoCart = $this->addtoCart(
                $_SESSION['user']['user_id'],
                $_POST['product_id'],
                $_POST['variant_id'],
                $_POST['quantity']
            );
            $_SESSION['success'] = 'Thêm vào giỏ hàng thành công';
            header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}

}