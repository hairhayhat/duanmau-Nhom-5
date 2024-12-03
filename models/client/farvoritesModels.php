<?php
require_once '../connect/connect.php';

class FavoritesModels extends Connect
{
    public function addFavoritesProduct($user_id, $product_id)
    {
        $query = "INSERT INTO favorites (user_id, product_id, created_at) VALUES (:user_id, :product_id, CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        return $stmt->execute();
    }

    function isProductInFavorites($product_id, $user_id)
    {
        $query = "SELECT COUNT(*) FROM favorites WHERE user_id = :user_id AND product_id = :product_id";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }

}
