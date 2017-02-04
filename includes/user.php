<?php
require_once(LIB_PATH.DS."database.php");

class User extends DatabaseObject{
	
	protected static $table_name="users";
	public $id;
	public $tip;
	public $username;
	public $password;
	public $first_name;
	public $last_name;
	
	public static function authenticate($username="",$password=""){
		global $database;
		$username = $database->escape_value($username);
		$password = $database->escape_value($password);
		
		$sql = "SELECT * FROM ".self::$table_name." ";
		$sql .= "WHERE username = '{$username}' ";
		$sql .= "AND password = '{$password}' ";
		$sql .= "LIMIT 1";
		$result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
}

?>