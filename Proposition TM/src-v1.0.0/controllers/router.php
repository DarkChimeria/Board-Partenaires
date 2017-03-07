<?php
/**************************************************************************



**************************************************************************/

//DEBUT DU FICHIER

// ACTIONS LOGIN
$login = 'login';

//REDIRECTION PAR LA METHODE GET SUR LES CONTROLLERS CONCERNES
switch($gestion){
	case  'home':
	require_once 'home/' . $gestion . '.php';
	break;
	// DEFAULT
	default:
	echo 'Impossible !';
}


if(isset($_GET['action'])){
	$val = $_GET['action'];
}else{
	$val = '';
}


//APRES REDIRECTION CONTROLLERS, ACTION NECESSAIRE A L'AFFICHAGE D'UNE PAGE
if($val == $login){
	login();
}else{
	home();
}

//FIN DU FICHIER