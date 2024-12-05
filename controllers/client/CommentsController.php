<?php
require_once '../models/client/commentModels.php';

class CommentsController extends CommentModels
{
    public function addComment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addComment'])) {
            $errors = [];
            if (empty($_POST['rating'])) {
                $errors['rating'] = 'Vui lòng chọn điểm cho sản phẩm của chúng tôi';
            }
            if (empty($_POST['content'])) {
                $errors['content'] = 'Vui lòng nhập bình luận của bạn';
            }
            if (empty($errors)) {
                $rating = $_POST['rating'];
                $content = $_POST['content'];
                $productId = $_GET['product_id'];
                $userId = $_SESSION['user']['user_id'];

                $result = $this->addComments($userId, $productId, $content, $rating);

                if ($result) {
                    $_SESSION['success'] = 'Bình luận của bạn đã được gửi thành công!';
                    unset($_SESSION['errors']);
                    header('Location: ?act=detail-product&product_id=' . $productId);
                    exit();
                } else {
                    $_SESSION['errors']['add_comment'] = 'Có lỗi xảy ra khi thêm bình luận. Vui lòng thử lại.';
                }
            } else {
                $_SESSION['errors'] = $errors;
            }
        }
        include '../views/client/products/detailProduct.php';
    }
}
