<?php
require_once dirname(__FILE__).'/../classes/Ordonateur.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $ordonateur = new Ordonateur($_POST['id']);
        $ordonateur->code = isset($_POST['code']) ? $_POST['code'] : '';
        $ordonateur->label = isset($_POST['label']) ? $_POST['label'] : '';
        $ordonateur->save();
        header('location:../ordonateur.php');
        break;
    case 'delete':
        $ordonateur = new Ordonateur($_GET['id']);
        $ordonateur->delete();
        header('location:../ordonateur.php');
        break;
    case 'add':
        $ordonateur = new Ordonateur();
        $ordonateur->code = isset($_POST['code']) ? $_POST['code'] : '';
        $ordonateur->label = isset($_POST['label']) ? $_POST['label'] : '';
        $ordonateur->save();
        header('location:../ordonateur.php');
        break;
    default:
        break;
}