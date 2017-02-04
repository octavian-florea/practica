<?php

//Define the core paths
//Define them as absolute paths to make sure that require_once warks as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for WIndow, / for Unix)
defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);
defined("SITE_ROOT") ? null : define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT']);
defined("LIB_PATH") ? null : define("LIB_PATH",SITE_ROOT.DS."includes");
defined("PUBLIC_PATH") ? null : define("PUBLIC_PATH",SITE_ROOT.DS."public");
defined("PUBLIC_URL") ? null : define("PUBLIC_URL","http://".$_SERVER["SERVER_NAME"]."/public");
defined("LAYOUTS_PATH") ? null : define("LAYOUTS_PATH",PUBLIC_PATH.DS."layouts");
defined("COMPANI_PATH") ? null : define("COMPANI_PATH",SITE_ROOT.DS."compani");
defined("STUDENTI_PATH") ? null : define("STUDENTI_PATH",SITE_ROOT.DS."studenti");
defined("PROFI_PATH") ? null : define("PROFI_PATH",SITE_ROOT.DS."profi");

// load config file first
require_once(LIB_PATH.DS."config.php");

// load basic functions next so that everything after can use them
require_once(LIB_PATH.DS."functions.php");

// load core objects
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");
require_once(LIB_PATH.DS."activitati.php");

// load database-related classes
require_once(LIB_PATH.DS."user.php");
require_once(LIB_PATH.DS."practica.php");

?>