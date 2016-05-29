<?php
require_once dirname(__FILE__).'/../classes/Ministere.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $ministere = new Ministere($_POST['id']);
        $ministere->code = isset($_POST['code']) ? $_POST['code'] : '';
        $ministere->label = isset($_POST['label']) ? $_POST['label'] : '';
        $ministere->save();
        header('location:../ministere.php');
        break;
    case 'delete':
        $ministere = new Ministere($_GET['id']);
        $ministere->delete();
        header('location:../ministere.php');
        break;
    case 'add':
        $ministere = new Ministere();
        $ministere->code = isset($_POST['code']) ? $_POST['code'] : '';
        $ministere->label = isset($_POST['label']) ? $_POST['label'] : '';
        $ministere->save();
        header('location:../ministere.php');
        break;
    default:
        break;
}