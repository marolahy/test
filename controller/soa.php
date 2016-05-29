<?php
require_once dirname(__FILE__).'/../classes/Soa.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $soa = new Soa($_POST['id']);
        $soa->code = isset($_POST['code']) ? $_POST['code'] : '';
        $soa->label = isset($_POST['label']) ? $_POST['label'] : '';
        $soa->save();
        header('location:../soa.php');
        break;
    case 'delete':
        $soa = new Soa($_GET['id']);
        $soa->delete();
        header('location:../soa.php');
        break;
    case 'add':
        $soa = new Soa();
        $soa->code = isset($_POST['code']) ? $_POST['code'] : '';
        $soa->label = isset($_POST['label']) ? $_POST['label'] : '';
        $soa->save();
        header('location:../soa.php');
        break;
    default:
        break;
}