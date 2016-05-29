<?php
require_once dirname(__FILE__).'/../classes/Programme.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $programme = new Programme($_POST['id']);
        $programme->code = isset($_POST['code']) ? $_POST['code'] : '';
        $programme->label = isset($_POST['label']) ? $_POST['label'] : '';
        $programme->save();
        header('location:../programme.php');
        break;
    case 'delete':
        $programme = new Programme($_GET['id']);
        $programme->delete();
        header('location:../programme.php');
        break;
    case 'add':
        $programme = new Programme();
        $programme->code = isset($_POST['code']) ? $_POST['code'] : '';
        $programme->label = isset($_POST['label']) ? $_POST['label'] : '';
        $programme->save();
        header('location:../programme.php');
        break;
    default:
        break;
}