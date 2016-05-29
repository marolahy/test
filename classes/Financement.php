<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 04:34
 */
require_once dirname(__FILE__).'/ObjectModel.php';
class Financement  extends ObjectModel
{
    public $code;
    public $label;
    public static $definition = array(
        'table' => 'financement',
        'primary' => 'id',
        'fields' => array(
            'code',
            'label',
        ),
    );
}