<?php
require_once(LIB_PATH.DS."database.php");

class Practica extends Activitati{
	
	protected static $tip="practica";
	public $id;
	public $nume;
	public $codop;
	
}

?>