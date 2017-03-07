<?php

// COMMENTAIRES A METTRE 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

setlocale(LC_ALL, "fr_FR.UTF-8", "fra");

$root = dirname(__FILE__) . DIRECTORY_SEPARATOR ;

set_include_path('.' . 
    PATH_SEPARATOR . $root . 'controllers' . DIRECTORY_SEPARATOR .
    PATH_SEPARATOR . $root . 'includes' . DIRECTORY_SEPARATOR . 
    PATH_SEPARATOR . $root . 'models' . DIRECTORY_SEPARATOR . 
    PATH_SEPARATOR . $root . 'templates' . DIRECTORY_SEPARATOR . 
    PATH_SEPARATOR . $root . 'templates_c' . DIRECTORY_SEPARATOR . 
    PATH_SEPARATOR . $root . 'files' . DIRECTORY_SEPARATOR . 
    PATH_SEPARATOR . $root . 'views' . DIRECTORY_SEPARATOR .
    PATH_SEPARATOR . get_include_path() 
);

require_once 'includes/configs/connect.php';

if(isset($_REQUEST['gestion'])){
	$gestion=$_REQUEST['gestion'];
}else{
	$gestion='home';
}
require_once 'controllers/router.php';
