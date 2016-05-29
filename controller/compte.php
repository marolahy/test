<?php
require_once dirname(__FILE__).'/../classes/Compte.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $compte = new Compte($_POST['id']);
        $compte->code = isset($_POST['code']) ? $_POST['code'] : '';
        $compte->label = isset($_POST['label']) ? $_POST['label'] : '';
        $compte->save();
        header('location:../compte.php');
        break;
    case 'delete':
        $compte = new Compte($_GET['id']);
        $compte->delete();
        header('location:../compte.php');
        break;
    case 'add':
        $compte = new Compte();
        $compte->code = isset($_POST['code']) ? $_POST['code'] : '';
        $compte->label = isset($_POST['label']) ? $_POST['label'] : '';
        $compte->save();
        header('location:../compte.php');
        break;
    default:
        break;
}