<?php
require_once dirname(__FILE__).'/../classes/Taux.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $taux = new Taux($_POST['id']);
        $taux->id_devise = isset($_POST['id_devise']) ? $_POST['id_devise'] : '';
        $taux->montant = isset($_POST['montant']) ? $_POST['montant'] : '';
        $taux->date = date('Y-m-d');
        $taux->save();
        header('location:../taux.php');
        break;
    case 'delete':
        $taux = new Taux($_GET['id']);
        $taux->delete();
        header('location:../taux.php');
        break;
    case 'add':
        $taux = new Taux();
        $taux->id_devise = isset($_POST['id_devise']) ? $_POST['id_devise'] : '';
        $taux->montant = isset($_POST['montant']) ? $_POST['montant'] : '';
        $taux->date = date('Y-m-d');
        $taux->save();
        header('location:../taux.php');
        break;
    default:
        break;
}