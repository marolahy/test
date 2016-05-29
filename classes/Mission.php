<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 04:33
 */
require_once dirname(__FILE__).'/ObjectModel.php';
class Mission extends ObjectModel
{
    public $code;
    public $label;
    public static $definition = array(
        'table' => 'mission',
        'primary' => 'id',
        'fields' => array(
            'code',
            'label',
        ),
    );
}