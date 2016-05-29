<?php
require_once dirname(__FILE__).'/../classes/Financement.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $financement = new Financement($_POST['id']);
        $financement->code = isset($_POST['code']) ? $_POST['code'] : '';
        $financement->label = isset($_POST['label']) ? $_POST['label'] : '';
        $financement->save();
        header('location:../financement.php');
        break;
    case 'delete':
        $financement = new Financement($_GET['id']);
        $financement->delete();
        header('location:../financement.php');
        break;
    case 'add':
        $financement = new Financement();
        $financement->code = isset($_POST['code']) ? $_POST['code'] : '';
        $financement->label = isset($_POST['label']) ? $_POST['label'] : '';
        $financement->save();
        header('location:../financement.php');
        break;
    default:
        break;
}