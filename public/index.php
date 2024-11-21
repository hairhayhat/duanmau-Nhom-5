<?php
$action = isset($_GET['act']) ? $_GET['act'] : 'client';

switch($action){
    case'admin':
        include '../views/admin/index.php';
        break;
    case 'client':
        include '../views/client/index.php';
        break;

    case 'products':
        include '../views/admin/products/products.php';
        break;
    case 'add-products':
        include '../views/admin/products/add-products.php';
        break;
    
    case 'list-categories':
        include '../views/admin/categories/list-categories.php';
        break;
    case 'add-categories':
        include '../views/admin/categories/add-categories.php';
        break;
}
?>