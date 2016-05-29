<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 09:40
 */
require_once dirname(__FILE__).'/ObjectModel.php';
require_once dirname(__FILE__).'/Exercice.php';
require_once dirname(__FILE__).'/Convention.php';
require_once dirname(__FILE__).'/Programme.php';
require_once dirname(__FILE__).'/Soa.php';
require_once dirname(__FILE__).'/Mission.php';
require_once dirname(__FILE__).'/Category.php';
require_once dirname(__FILE__).'/Compte.php';
require_once dirname(__FILE__).'/Financement.php';
require_once dirname(__FILE__).'/Ordonateur.php';
require_once dirname(__FILE__).'/Ministere.php';
require_once dirname(__FILE__).'/Ministere.php';
class Adc extends ObjectModel
{
    public $id_category;
    public $id_convention;
    public $id_compte;
    public $id_exercice;
    public $id_financement;
    public $id_ministere;
    public $id_mission;
    public $id_ordonateur;
    public $id_programme;
    public $id_soa;
    public $num_mandat;
    public $date;
    public $montant;
    public $objet;
    public $code_assignataire;
    public static $definition = array(
        'table' => 'adc',
        'primary' => 'id',
        'fields' => array(
            'id_category',
            'id_compte',
            'id_convention',
            'id_exercice',
            'id_financement',
            'id_ministere',
            'id_mission',
            'id_ordonateur',
            'id_programme',
            'id_soa',
            'num_mandat',
            'date',
            'montant',
            'objet',
            'code_assignataire',
        ),
    );
    public static function getLabel($object_name,$id,$retrieve='code')
    {
        $object = new $object_name($id);
        return $object->{$retrieve};

    }
}
