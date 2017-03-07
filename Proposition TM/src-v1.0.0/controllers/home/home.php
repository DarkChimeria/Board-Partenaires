<?php
/**************************************************************************<br>
PROJET 2 - MVC / SMARTY <br>
GROUPE 3 <br>
EQUIPE : <br>
Théophile DUBOIS <br>
BERIOT Corentin <br>
Shaïma BACHIR <br>
Anthony SLIMANI <br>
<br>
GEST ASSO - Projet de gestion association<br>
FICHIER : controllers/home/home.php<br>
**************************************************************************/

//DEBUT DU FICHIER

// APPEL DU MODELS HOME.PHP EXECUTANT LES REQUETES
require_once 'models/home/home.php';


//FUNCTION home() PERMETTANT LA CONNEXION DEBUTF
function home(){
	$idResult = testtable();
	require_once 'views/home/home.php';
}