<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 04:35
 */
require_once dirname(__FILE__).'/ObjectModel.php';
class Ministere extends ObjectModel
{
    public $code;
    public $label;
    public static $definition = array(
        'table' => 'ministere',
        'primary' => 'id',
        'fields' => array(
            'code',
            'label',
        ),
    );
}