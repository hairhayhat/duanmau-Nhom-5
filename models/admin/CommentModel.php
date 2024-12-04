<?php
require_once '../connect/connect.php';

class CommentModel extends Connect
{
    

    public function addComment($product_id, $user_id, $noidung) {
        $query = "INSERT INTO comments (product_id, user_id, noidung, ngaybinhluan) VALUES (:product_id, :user_id, :noidung, NOW())";
        $stmt = $this->connect()->prepare(query: $sql);        
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':noidung', $noidung);
        return $stmt->execute();
    }

    public function getCommentsByProduct($product_id) {
        $query = "SELECT c.*, u.username FROM comments c 
                  JOIN users u ON c.user_id = u.id 
                  WHERE c.product_id = :product_id 
                  ORDER BY c.ngaybinhluan DESC";
        $stmt = $this->connect()->prepare(query: $sql);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
