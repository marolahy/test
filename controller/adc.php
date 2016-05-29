<?php
require_once dirname(__FILE__).'/../classes/Adc.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $adc = new Adc($_POST['id']);
        $adc->id_category = isset($_POST['id_category']) ? (int)$_POST['id_category'] : 0;
        $adc->id_convention = isset($_POST['id_convention']) ? (int)$_POST['id_convention'] : 0;
        $adc->id_compte = isset($_POST['id_compte']) ? (int)$_POST['id_compte'] : 0;
        $adc->id_exercice = isset($_POST['id_exercice']) ? (int)$_POST['id_exercice'] : 0;
        $adc->id_financement = isset($_POST['id_financement']) ? (int)$_POST['id_financement'] : 0;
        $adc->id_ministere = isset($_POST['id_ministere']) ? (int)$_POST['id_ministere'] : 0;
        $adc->id_mission = isset($_POST['id_mission']) ? (int)$_POST['id_mission'] : 0;
        $adc->id_ordonateur = isset($_POST['id_ordonateur']) ? (int)$_POST['id_ordonateur'] : 0;
        $adc->id_programme = isset($_POST['id_programme']) ? (int)$_POST['id_programme'] : 0;
        $adc->id_soa = isset($_POST['id_soa']) ? (int)$_POST['id_soa'] : 0;
        $adc->num_mandat = isset($_POST['num_mandat']) ? $_POST['num_mandat'] : '';
        if(isset($_POST['date'])){
            $date = explode('-',$_POST['date'] );
            $adc->date = "$date[2]-$date[1]-$date[0]";

        }
        $adc->montant = isset($_POST['montant']) ? $_POST['montant'] : 0;
        $adc->code_assignataire = isset($_POST['code_assignataire']) ? $_POST['code_assignataire'] : '';
        $adc->objet = isset($_POST['objet']) ? $_POST['objet'] : '';
        $adc->save();
        header('location:../adc.php');
        break;
    case 'delete':
        $adc = new Adc($_GET['id']);
        $adc->delete();
        header('location:../adc.php');
        break;
    case 'add':
        $adc = new Adc();
        $adc->id_category = isset($_POST['id_category']) ? (int)$_POST['id_category'] : 0;
        $adc->id_convention = isset($_POST['id_convention']) ? (int)$_POST['id_convention'] : 0;
        $adc->id_compte = isset($_POST['id_compte']) ? (int)$_POST['id_compte'] : 0;
        $adc->id_exercice = isset($_POST['id_exercice']) ? (int)$_POST['id_exercice'] : 0;
        $adc->id_financement = isset($_POST['id_financement']) ? (int)$_POST['id_financement'] : 0;
        $adc->id_ministere = isset($_POST['id_ministere']) ? (int)$_POST['id_ministere'] : 0;
        $adc->id_mission = isset($_POST['id_mission']) ? (int)$_POST['id_mission'] : 0;
        $adc->id_ordonateur = isset($_POST['id_ordonateur']) ? (int)$_POST['id_ordonateur'] : 0;
        $adc->id_programme = isset($_POST['id_programme']) ? (int)$_POST['id_programme'] : 0;
        $adc->id_soa = isset($_POST['id_soa']) ? (int)$_POST['id_soa'] : 0;
        $adc->num_mandat = isset($_POST['num_mandat']) ? $_POST['num_mandat'] : '';
        if(isset($_POST['date'])){
            $date = explode('-',$_POST['date'] );
            $adc->date = "$date[2]-$date[1]-$date[0]";

        }
        $adc->montant = isset($_POST['montant']) ? $_POST['montant'] : 0;
        $adc->code_assignataire = isset($_POST['code_assignataire']) ? $_POST['code_assignataire'] : '';
        $adc->objet = isset($_POST['objet']) ? $_POST['objet'] : '';
        $adc->save();
        $adc->save();
        header('location:../adc.php');
        break;
    default:
        break;
}