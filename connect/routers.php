<?php
require_once 'models/CommentModel.php';
require_once 'controllers/CommentController.php';

// Kết nối database
$database = new PDO("mysql:host=localhost;dbname=your_db_name", "username", "password");
$commentModel = new CommentModel($database);
$commentController = new CommentController($commentModel);

// Định nghĩa route
if ($_SERVER['REQUEST_URI'] === '/index.php?act=add-comment' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $commentController->addComment();
} elseif (preg_match('/^\/product\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $product_id = $matches[1];
    $commentController->showComments($product_id);
}
?>