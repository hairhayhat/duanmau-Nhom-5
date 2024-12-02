<?php
require_once '../models/client/cartModels.php';

class CartController extends Cart
{
    public function addtoCartOrByNow(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addtocart'])) {
            if (empty($_POST['variant_id'] || $_POST['quantity'])) {
                $_SESSION['error'] = 'Vui lòng chọn sản phẩm và số lượng';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            $checkCart = $this->checkCart();
            if ($checkCart) {
                $quantity = $checkCart['quantity'] + $_POST['quantity'];
                $updateCart = $this->updateCart(
                    user_id: $_SESSION['user']['user_id'],
                    product_id: $_POST['product_id'],
                    variant_id: $_POST['variant_id'],
                    quantity: $quantity
                );
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            } else {
                $addtoCart = $this->addtoCart(
                    user_id: $_SESSION['user']['user_id'],
                    product_id: $_POST['product_id'],
                    variant_id: $_POST['variant_id'],
                    quantity: $_POST['quantity']
                );
                $_SESSION['success'] = 'Thêm vào giỏ hàng thành công';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['buy_now'])){ 
            if (empty($_POST['variant_id'] || $_POST['quantity'])) {
                $_SESSION['error'] = 'Vui lòng chọn sản phẩm và số lượng';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            $checkCart=$this->checkCart();
            if($checkCart){
                $quantity=$checkCart['quantity'] + $_POST['quantity'];
                $updateCart=$this->updateCart(
                    user_id: $_SESSION['user']['user_id'],
                    product_id: $_POST['product_id'],
                    variant_id: $_POST['variant_id'],
                    quantity: $quantity
                );
                // $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                header(header: 'Location:?act=cart');
                exit();
            }else{
                $addtoCart=$this->addtoCart(
                    user_id: $_SESSION['user']['user_id'],
                    product_id: $_POST['product_id'],
                    variant_id: $_POST['variant_id'],
                    quantity: $_POST['quantity']
                );
                // $_SESSION['success'] = 'Thêm vào giỏ hàng thành công';
                header(header: 'Location:?act=cart');
                exit();
            }
    }
}
}