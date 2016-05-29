<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 13:02
 */
require_once dirname(__FILE__).'/ObjectModel.php';
class Devise extends ObjectModel
{
    public $code;
    public $label;
    public static $definition = array(
    'table' => 'devise',
    'primary' => 'id',
    'fields' => array(
        'code',
        'label',
    ),
);
}