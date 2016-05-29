<?php
require_once dirname(__FILE__).'/../classes/Category.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $category = new Category($_POST['id']);
        $category->code = isset($_POST['code']) ? $_POST['code'] : '';
        $category->label = isset($_POST['label']) ? $_POST['label'] : '';
        $category->save();
        header('location:../category.php');
        break;
    case 'delete':
        $category = new Category($_GET['id']);
        $category->delete();
        header('location:../category.php');
        break;
    case 'add':
        $category = new Category();
        $category->code = isset($_POST['code']) ? $_POST['code'] : '';
        $category->label = isset($_POST['label']) ? $_POST['label'] : '';
        $category->save();
        header('location:../category.php');
        break;
    default:
        break;
}