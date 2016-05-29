<?php
require_once dirname(__FILE__).'/../classes/Devise.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $devise = new Devise($_POST['id']);
        $devise->code = isset($_POST['code']) ? $_POST['code'] : '';
        $devise->label = isset($_POST['label']) ? $_POST['label'] : '';
        $devise->save();
        header('location:../devise.php');
        break;
    case 'delete':
        $devise = new Devise($_GET['id']);
        $devise->delete();
        header('location:../devise.php');
        break;
    case 'add':
        $devise = new Devise();
        $devise->code = isset($_POST['code']) ? $_POST['code'] : '';
        $devise->label = isset($_POST['label']) ? $_POST['label'] : '';
        $devise->save();
        header('location:../devise.php');
        break;
    default:
        break;
}