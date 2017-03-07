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
FICHIER : models/home/home.php<br>
**************************************************************************/

//DEBUT DU FICHIER

// APPEL DU MODELS MODELS.PHP EXECUTANT LES REQUETES
include 'models/models.php';

function testtable(){
	$cnx = getBD();
	$sql = 'SELECT * FROM partenaires';
	$idResult  = executeR($cnx,$sql);
	return $idResult;
}