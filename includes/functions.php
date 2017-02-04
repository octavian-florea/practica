<?php
	// This file is the place to store all basic functions
	
	function redirect_to( $location = NULL ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	
	function __autoload($class_name){
		$class_name = strtolower($class_name);
		$path = LIB_PATH.DS."{$class_name}.php";
		if(file_exists($path)){
			require_once($path);
		}else{
			die("The file {$class_name}.php could not be found.");
		}
	}
	
	function include_layout_template($template=""){
		include(SITE_ROOT.DS."public".DS."layouts".DS.$template);
	}
	
	function array_object_to_json($array_object){
		$json = "";
		// Build json from array object
		$json .= "[";
		foreach ($array_object as $key => $value){
			if($key!=0) $json .= ",";
			$json .= json_encode($value);
		}
		$json .= "]";	
		return $json;
	}
	
?>