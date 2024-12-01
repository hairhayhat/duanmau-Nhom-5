<?php

class CartController
{
    public function addtoCartOrByNow(): void{
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addtocart'])){
            if(empty($_POST['variant_id'] || $_POST['quantity'])){
                $_SESSION['error'] = 'Vui lòng chọn sản phẩm và số lượng';
                header(header:'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
                
            }
        }
    }
}