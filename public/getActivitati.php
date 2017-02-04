<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/includes/initialize.php");
	
	
	$locuri_practica = Practica::find_all();
	$json = array_object_to_json($locuri_practica);
	
	
	echo $json;
?>

