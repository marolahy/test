<?php

require_once dirname(__FILE__).'/ObjectModel.php';
class Taux extends ObjectModel
{
    public $id_devise;
    public $montant;
    public $date;
    public static $definition = array(
        'table' => 'taux_chancelerie',
        'primary' => 'id',
        'fields' => array(
            'id_devise',
            'date',
            'montant',
        ),
    );

    public function getCurrenttaux(){
        if (!self::$db)
            self::$db = Db::getInstance();
        $query = 'SELECT DISTINCT devise.id, devise.label as devise, taux_chancelerie.montant as montant, '
                .'taux_chancelerie.id as id, max(taux_chancelerie.date)'
                .'FROM taux_chancelerie LEFT JOIN devise ON devise.id = taux_chancelerie.id_devise '
                .'GROUP BY devise.id   ORDER BY taux_chancelerie.id  DESC';
        return self::$db->executeS( $query );
    }
}
