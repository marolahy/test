<?php
require_once dirname(__FILE__).'/../classes/Exercice.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $exercice = new Exercice($_POST['id']);
        $exercice->annee = isset($_POST['annee']) ? $_POST['annee'] : '';
        $exercice->titre = isset($_POST['titre']) ? $_POST['titre'] : '';
        $exercice->save();
        header('location:../exercice.php');
        break;
    case 'delete':
        $exercice = new Exercice($_GET['id']);
        $exercice->delete();
        header('location:../exercice.php');
    break;
    case 'add':
        $exercice = new Exercice();
        $exercice->annee = isset($_POST['annee']) ? $_POST['annee'] : '';
        $exercice->titre = isset($_POST['titre']) ? $_POST['titre'] : '';
        $exercice->save();
        header('location:../exercice.php');
        break;
    default:
        break;
}