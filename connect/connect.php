<?php

class Connect
{
    public function connect(): ?PDO
    {
        $serverName = 'localhost';
        $userName = 'root';
        $passWord = '';
        $myDB = 'du an mau 1';
        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$myDB;charset=utf8", $userName, $passWord);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Throwable $th) {
            echo 'Kết nối thất bại: ' . $th->getMessage();
            return null;
        }
    }
}

function view($view, $data = [])
{
    extract($data);
    include_once "views/$view.php";
}