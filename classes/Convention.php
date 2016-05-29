<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 00:59
 */
require_once dirname(__FILE__).'/ObjectModel.php';
class Convention extends ObjectModel
{
    public $code;
    public $label;
    public static $definition = array(
        'table' => 'convention',
        'primary' => 'id',
        'fields' => array(
            'code',
            'label',
        ),
    );
}