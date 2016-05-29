<?php
require_once dirname(__FILE__).'/../config/config.inc.php';
require_once dirname(__FILE__).'/Orm.php';
class Db extends Orm {
 
  /**
   * @var Singleton
   * @access private
   * @static
   */
   private static $_instance = null;
 
 
   /**
    * Méthode qui crée l'unique instance de la classe
    * si elle n'existe pas encore puis la retourne.
    *
    * @param void
    * @return Singleton
    */
   public static function getInstance() {
     if(is_null(self::$_instance)) {
       self::$_instance = new Db(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_DB);  
     }
     return self::$_instance;
   }
}
 
?>