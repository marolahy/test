<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 04:34
 */
require_once dirname(__FILE__).'/ObjectModel.php';
class Category extends ObjectModel
{
    public $code;
    public $label;
    public static $definition = array(
        'table' => 'category',
        'primary' => 'id',
        'fields' => array(
            'code',
            'label',
        ),
    );
}