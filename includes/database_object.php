<?php
require_once(LIB_PATH.DS."database.php");

// static:: work PHP 5.3 (late static bindings)
class DatabaseObject {
	
	protected static $table_name;
	
	public static function find_all(){
		return static::find_by_sql("SELECT * FROM ".static::table_name);
	}
	
	public static function find_by_id($id=0){
		global $database;
		$result_array = static::find_by_sql("SELECT * FROM users WHERE id={$id} LIMIT 1");
		$found = $database->fetch_array($result_set);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
	public static function find_by_sql($sql=""){
		global $database;
		$result_set = $database->query($sql);
		$object_array = array();
		while($row = $database->fetch_array($result_set)){
			$object_array[] = static::instantiate($row);
		}
		return $object_array;
	}
	
	private static function instantiate($record){
		// check that $recod exists and is an array
		$object = new static;
		foreach($record as $attribute=>$value){
			if($object->has_attribute($attribute)){
				$object->$attribute = $value;
			}
		}
		return $object;
	}
	
	private function has_attribute($attribute){
		// get_object_vars return an associaative array with all attributes
		// (incl. private ones!) as the key and their current values as the value
		$object_vars = get_object_vars($this);
		// We dont care abaout the value, we just want to know if the key exists
		// will return true or false
		return array_key_exists($attribute,$object_vars);
	}
}

?>