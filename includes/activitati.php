<?php
require_once(LIB_PATH.DS."database.php");

class Activitati extends DatabaseObject{
	
	protected static $table_name="activitati";
	public $id;
	public $titlu;
	public $subiect;
	public $descriere;
	public $codop;
	
	public static function find_all(){
		return static::find_by_sql("SELECT * FROM ".static::$table_name." WHERE tip='".static::$tip."'");
	}
}

?>