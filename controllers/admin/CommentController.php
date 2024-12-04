<?php
class CommentController {
    private $commentModel;

    public function __construct($commentModel) {
        $this->commentModel = $commentModel;
    }

    public function addComment() {
        session_start();

        // Kiểm tra đăng nhập
        if (!isset($_SESSION['user_id'])) {
            header("Location: /index.php?act=login");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'], $_POST['noidung'])) {
            $product_id = $_POST['product_id'];
            $user_id = $_SESSION['user_id'];
            $noidung = htmlspecialchars($_POST['noidung']); // Lọc dữ liệu

            if ($this->commentModel->addComment($product_id, $user_id, $noidung)) {
                header("Location: /index.php?act=detail-product&product_id"); // Chuyển về trang sản phẩm
                exit;
            } else {
                echo "Thêm bình luận thất bại!";
            }
        }
    }

    public function showComments($product_id) {
        $comments = $this->commentModel->getCommentsByProduct($product_id);
        require 'views/comments/comment_list.php';
    }
}
