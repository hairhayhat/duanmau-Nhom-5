<?php
require_once '../connect/connect.php';

class CategoryAdminModel
{
    private $conn;

    public function __construct()
    {
        $db = new Connect();
        $this->conn = $db->connect();
    }
    public function listCategoriesAdmin()
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM category");
            $stmt->execute();
            return $stmt->fetchALL(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi khi lấy dữ liệu category" . $e->getMessage();
            return [];
        }
    }
}