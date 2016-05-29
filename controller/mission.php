<?php
require_once dirname(__FILE__).'/../classes/Mission.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $mission = new Mission($_POST['id']);
        $mission->code = isset($_POST['code']) ? $_POST['code'] : '';
        $mission->label = isset($_POST['label']) ? $_POST['label'] : '';
        $mission->save();
        header('location:../mission.php');
        break;
    case 'delete':
        $mission = new Mission($_GET['id']);
        $mission->delete();
        header('location:../mission.php');
        break;
    case 'add':
        $mission = new Mission();
        $mission->code = isset($_POST['code']) ? $_POST['code'] : '';
        $mission->label = isset($_POST['label']) ? $_POST['label'] : '';
        $mission->save();
        header('location:../mission.php');
        break;
    default:
        break;
}