<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 13:58
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
require_once dirname(__FILE__).'/Adc.php';
class Engagement extends ObjectModel
{
    public $id_adc;
    public $montant;
    public $id_compte;
    public $numero;
    public $numero_provisoire;
    public $reference;
    public static $definition = array(
        'table' => 'engagement',
        'primary' => 'id',
        'fields' => array(
            'id_adc',
            'montant',
            'numero',
            'numero_provisoire',
            'reference',
        ),
    );
    public static function getReference($term='')
    {
        if (!self::$db)
            self::$db = Db::getInstance();
        $query = "SELECT id, num_mandat as label FROM adc WHERE num_mandat LIKE '%$term%'";
        $data = self::$db->executeS( $query );
        return json_encode($data);
    }
    public static function fillAcd($id)
    {
        if (!self::$db)
            self::$db = Db::getInstance();
        ObjectModel::$db->get('acd','id');
        $data = ObjectModel::$db->fetchOne($id);
        return json_encode($data);
    }
}