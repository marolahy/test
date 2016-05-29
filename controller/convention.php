<?php
require_once dirname(__FILE__).'/../classes/Convention.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $convention = new Convention($_POST['id']);
        $convention->code = isset($_POST['code']) ? $_POST['code'] : '';
        $convention->label = isset($_POST['label']) ? $_POST['label'] : '';
        $convention->save();
        header('location:../convention.php');
        break;
    case 'delete':
        $convention = new Convention($_GET['id']);
        $convention->delete();
        header('location:../convention.php');
        break;
    case 'add':
        $convention = new Convention();
        $convention->code = isset($_POST['code']) ? $_POST['code'] : '';
        $convention->label = isset($_POST['label']) ? $_POST['label'] : '';
        $convention->save();
        header('location:../convention.php');
        break;
    default:
        break;
}