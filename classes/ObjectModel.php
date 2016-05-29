<?php

/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 01:13
 */
require_once dirname(__FILE__).'/Db.php';
abstract class ObjectModel
{
    public $id;
    protected static $db = false;
    public static $definition = array();
    protected $def;
    protected $table;
    protected $identifier;

    public function __construct($id = null)
    {
        if (!ObjectModel::$db)
            ObjectModel::$db = Db::getInstance();
        $this->def = ObjectModel::getDefinition($this);
        if ($id)
        {
            $this->id = $id;
            ObjectModel::$db->get($this->def['table'],$this->def['primary']);
            $object_datas = ObjectModel::$db->fetchOne($this->id);
            foreach ($object_datas as $key => $value)
                if (array_key_exists($key,$this))
                    $this->{$key} = $value;
        }
    }
    public static function getDefinition($class, $field = null)
    {
        if (is_object($class))
            $class = get_class($class);
        $reflection = new ReflectionClass($class);
        $definition = $reflection->getStaticPropertyValue('definition');
        $definition['classname'] = $class;
        return $definition;
    }
    public function getData()
    {
        $data = array();
        // Ensure that we get something to insert
        foreach ($this->def['fields'] as $value )
            if (array_key_exists($value, $this))
                $data[$value] = $this->{$value};
        if (!$data && isset($this->id))
            $data[$this->def['primary']] = $this->id;
        return $data;
    }
    public function save($null_values = false)
    {
        return (int)$this->id > 0 ? $this->update($null_values) : $this->add();
    }
    public function add()
    {
        if (!ObjectModel::$db)
            ObjectModel::$db = Db::getInstance();

        if (isset($this->id))
            unset($this->id);
        ObjectModel::$db->get($this->def['table'],$this->def['primary']);
        if (!$result = ObjectModel::$db->insert($this->getData()))
            return false;
        // Get object id in database
        $this->id = $result;
        if (!$result)
            return false;
        return $result;
    }
    public function update($null_values = false)
    {
        if (!ObjectModel::$db)
            ObjectModel::$db = Db::getInstance();
        ObjectModel::$db->get($this->def['table'],$this->def['primary']);
        if (!$result = ObjectModel::$db->update($this->getData(), '`'.$this->def['primary'].'` = '.(int)$this->id))
            return false;
        return $result;
    }
    public function delete()
    {
        if (!ObjectModel::$db)
            ObjectModel::$db = Db::getInstance();
        ObjectModel::$db->get($this->def['table'],$this->def['primary']);

        $result = ObjectModel::$db->delete( $this->id );

        if (!$result)
            return false;

        return $result;
    }
    public function getAll()
    {
        if (!ObjectModel::$db)
            ObjectModel::$db = Db::getInstance();
        ObjectModel::$db->get($this->def['table'],$this->def['primary']);
        return ObjectModel::$db->fetchAll();
    }

}