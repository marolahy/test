<?php
function exception_handler($myException)
{
    echo 'Error : '.$myException->getMessage();
}
set_exception_handler('exception_handler');

	abstract class Orm{
		public $table;
		public $identifer = 'id';
		public $connection;
		public function __construct($host,$username,$password,$db){
			$this->connection = @mysql_pconnect($host,$username,$password);
			if(!$this->connection){
				throw new Exception("Error to connect into database ".mysql_error(), 1);
			}
			@mysql_select_db($db,$this->connection);
		}
		public function get($table,$identifer='id'){
			$this->table = $table;
			$this->identifer = $identifer;
		}
		public function executeS($query){
			$data = [];
			$result = @mysql_query($query,$this->connection);
			while($row = @mysql_fetch_assoc($result))
				$data[] = $row;
			return $data;
		}
		public function execute($query){
			@mysql_query($query,$this->identifer);
		}
		public function fetch($condition){
			$data = [];
			$query = 'SELECT * FROM `'.$this->table."` WHERE $condition";
			$result = @mysql_query($query,$this->connection);
			while($row = @mysql_fetch_assoc($result))
				$data[] = $row;
			return $data;
		}
		public function fetchAll(){
			$data = [];
			$query = 'SELECT * FROM `'.$this->table.'`';
			$result = @mysql_query($query,$this->connection);
			while($row = @mysql_fetch_assoc($result))
				$data[] = $row;
			return $data;
		}
		public function fetchOne($id){
			$query = 'SELECT * FROM `'.$this->table.'` WHERE '.$this->identifer.' = '.$id.' LIMIT 1';
			$result = @mysql_query($query,$this->connection);
			$row = @mysql_fetch_assoc($result);
			return $row;
		}
		public function getRow($query){
			$result = @mysql_query($query,$this->connection);
			$row = @mysql_fetch_assoc($result);
			return $row;
		}
		public function insert($data){
			$column = [];
			$values = [];
			foreach ($data as $key => $value) {
				$column[] = $key;
				$values[] = "'".addslashes($value)."'";
			}
			$query = 'INSERT INTO `'.$this->table.'`('.implode(",", $column).') VALUES('
					 .implode(",", $values).')';
			@mysql_query($query,$this->connection);
			return @mysql_insert_id();
		}
		public function update( $datas, $condition){
			$data = [];
			foreach ($datas as $key => $value) {
				$data[] = "$key='$value' ";
			}
			$query = 'UPDATE `'.$this->table.'` SET '.implode(",", $data)." WHERE $condition";
			@mysql_query($query,$this->connection);
			if(@mysql_error($this->connection))
				return false;
			return true;
		}
		public function delete($id){
			$query = "DELETE FROM `".$this->table."` WHERE $this->identifer = '$id'";
			@mysql_query($query,$this->connection);
			if(@mysql_error($this->connection))
				return false;
			return true;
		}
	}
?>