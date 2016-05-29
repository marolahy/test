<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 00:59
 */
require_once dirname(__FILE__).'/ObjectModel.php';
class Exercice extends ObjectModel{
    public  $titre;
    public $annee;
    public static $definition = array(
        'table' => 'exercice',
        'primary' => 'id',
        'fields' => array(
            'annee',
            'titre',
        ),
    );
}