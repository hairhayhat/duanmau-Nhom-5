<?php
require_once '../models/admin/CategoriesAdminModels.php';
class CategoryAdminController extends CategoryAdminModel
{
    public function listCategories()
    {
        $list_Categories = (new CategoryAdminModel())->listCategoriesAdmin();
        include '../views/admin/categories/listCategories.php';
    }
    public function saveAddCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addCategory'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập tên danh mục';
            }
            if (empty($_POST['status'])) {
                $errors['status'] = 'Vui lòng chọn trạng thái';
            }
            if (empty($_POST['description'])) {
                $errors['description'] = 'Vui lòng nhập miêu tả';
            }
            if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
                $errors['image'] = 'Vui lòng chọn ảnh';
            }

            $_SESSION['errors'] = $errors;

            $file = $_FILES['image'];
            $images = $file['name'];
            if (move_uploaded_file($file['tmp_name'], './images/category/' . $images)) {
                $addCategory = $this->addCategory($_POST['name'], $images, $_POST['status'], $_POST['description']);
                if ($addCategory) {
                    $_SESSION['success'] = 'Thêm danh mục thành công';
                    header('Location: index.php?act=list-categories');
                    exit;
                } else {
                    $_SESSION['errors'] = 'Thêm danh mục thất bại';
                    header('Location:' . $_SERVER['HTTP_ACCEPT']);
                    exit;
                }
            }
        }
        include '../views/admin/categories/addCategories.php';
    }

    public function editCategoryById()
    {
        $id = $_GET['category_id'];
        $getCategory = $this->getCategoryById($id);
        if ($getCategory) {
            return $getCategory;
        } else {
            $_SESSION['error'] = 'Không tìm thấy danh mục';
        }
    }

    public function saveEditCategory()
    {
        $id = $_GET['category_id'];
        $getCategory = $this->getCategoryById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editCategory'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập tên danh mục';
            }
            if (empty($_POST['status'])) {
                $errors['status'] = 'Vui lòng chọn trạng thái';
            }
            if (empty($_POST['description'])) {
                $errors['description'] = 'Vui lòng nhập miêu tả';
            }
            if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
                $errors['image'] = 'Vui lòng chọn ảnh';
            }

            $_SESSION['errors'] = $errors;

        }
        include '../views/admin/categories/editCategories.php';
    }

}