<?php
require_once '../models/client/User.php';
class AuthController extends User
{
    public function registers(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
            $errors = [];
            $data = $_POST;
            if (empty($data['name'])) {
                $errors['name'] = 'Vui lòng nhập tên người dùng';
            }
            if (empty($data['email']) || !filter_var(value: $data['email'], filter: FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không đúng định dạng';
            }
            if (empty($data['password']) || strlen(string: $data['password']) < 6) {
                $errors['password'] = 'Mật khẩu phải ít nhất 6 ký tự';
            }

            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $data;

            if (count(value: $errors) > 0) {
                header(header: 'Location: ?act=register');
                exit();
            }

            $register = $this->register(name: $_POST['name'], email: $_POST['email'], password: $_POST['password']);
            if ($register) {
                $_SESSION['success'] = 'Tạo tài khoản thành công. Vui lòng đăng nhập';
                header(header: 'Location: ?act=login');
                exit();
            } else {
                $_SESSION['errors'] = 'Tạo tài khoản thất bại. Vui lòng thử lại';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }

        }
        include '../views/client/auth/register.php';
    }
    public function signin(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $errors = [];
            $data = $_POST;
            if (empty($_POST['email']) || !filter_var(value: $_POST['email'], filter: FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không đúng định dạng';
            }
            if (empty($_POST['password']) || strlen(string: $_POST['password']) < 6) {
                $errors['password'] = 'Mật khẩu phải ít nhất 6 ký tự';
            }
            $_SESSION['errors'] = $errors;

            if (count(value: $errors) > 0) {
                header(header: 'Location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }

            $user = $this->login($_POST['email'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = $user;
                if ($user['role_id'] === 1) {
                    $_SESSION['success'] = 'Đăng nhập thanh cong';
                    header(header: 'Location:index.php?act=client');
                    exit;
                } elseif ($user['role_id'] === 2) {
                    $_SESSION['success'] = 'Đăng nhập thanh cong';
                    header(header: 'Location:index.php?act=admin');
                    exit;
                }
            } else {
                $_SESSION['errors'] = 'Đăng nhập that bai';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
        include '../views/client/auth/login.php';
    }
}