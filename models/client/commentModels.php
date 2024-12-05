<?php
require_once '../connect/connect.php';

class CommentModels extends Connect
{
    public function addComments($user_id, $product_id, $content, $rating)
    {
        $sql = "INSERT INTO comments (user_id, product_id, content, rating, created_at) VALUES (?,?,?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$user_id, $product_id, $content, $rating]);
    }
}