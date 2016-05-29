<?php
require_once dirname(__FILE__).'/../classes/Engagement.php';
$action = ( isset($_GET['action']) ? $_GET['action'] : 'error' ) ;
switch($action){
    case 'error':
        break;
    case 'update':
        $engagement = new Engagement($_POST['id']);
        $engagement->code = isset($_POST['code']) ? $_POST['code'] : '';
        $engagement->label = isset($_POST['label']) ? $_POST['label'] : '';
        $engagement->save();
        header('location:../engagement.php');
        break;
    case 'delete':
        $engagement = new Engagement($_GET['id']);
        $engagement->delete();
        header('location:../engagement.php');
        break;
    case 'autocomplete':
        //[{"id":"Phalaropus lobatus","label":"Red-necked Phalarope","value":"Red-necked Phalarope"},{"id":"Sylvia hortensis","label":"Orphean Warbler","value":"Orphean Warbler"},{"id":"Phalaropus fulicarius","label":"Red Phalarope","value":"Red Phalarope"},{"id":"Phalaropus tricolor","label":"Wilson`s Phalarope","value":"Wilson`s Phalarope"},{"id":"Sylvia hortensis hortensis","label":"Western Orphean Warbler","value":"Western Orphean Warbler"}]
        die(Engagement::getReference($_GET['term']));
        break;

    case 'autocomplete':
        //[{"id":"Phalaropus lobatus","label":"Red-necked Phalarope","value":"Red-necked Phalarope"},{"id":"Sylvia hortensis","label":"Orphean Warbler","value":"Orphean Warbler"},{"id":"Phalaropus fulicarius","label":"Red Phalarope","value":"Red Phalarope"},{"id":"Phalaropus tricolor","label":"Wilson`s Phalarope","value":"Wilson`s Phalarope"},{"id":"Sylvia hortensis hortensis","label":"Western Orphean Warbler","value":"Western Orphean Warbler"}]
        die(Engagement::fillAcd($_GET['id']));
        break;
    
    case 'add':
        $engagement = new Engagement();
        $engagement->code = isset($_POST['code']) ? $_POST['code'] : '';
        $engagement->label = isset($_POST['label']) ? $_POST['label'] : '';
        $engagement->save();
        header('location:../engagement.php');
        break;
    default:
        break;
}