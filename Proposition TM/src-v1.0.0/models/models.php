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
FICHIER : models/models.php<br>
**************************************************************************/

//DEBUT DU FICHIER


//FUNCTION PERMETTANT L'EXECUTION D'UNE REQUETE AVEC PARAMETRE NULL OU NON NULL DEBUF
function executeR($connexion,$sql,$parametre=null){
	if($parametre==null){
		$idResult = $connexion->query($sql);
	}else{
		$idResult = $connexion->prepare($sql);
		$idResult->execute($parametre);
	}
	return $idResult;
}
// FUNCTION executeR($connexion,$sql,$parametre=null) FINF

//FUNCTION getBD() PERMETTANT LA CONNEXION A LA BASE DE DONNEES DEBUF
function getBD(){
	$cnx = connexion(SERVER,BASEDEDONNEES,UTILISATEUR,MOTDEPASSE);
	return $cnx;
}
// FUNCTION getBD() FINF


//FUNCTION connexion($server,$bdd,$user,$psw) PERMETTANT LA CONNEXION A LA BASE DE DONNEES DEBUF
function connexion($server,$bdd,$user,$psw){
	try{
		$connexion = new PDO('mysql:host='. $server . ';dbname=' . $bdd,$user,$psw,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		return $connexion;
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
}
// FUNCTION connexion($server,$bdd,$user,$psw) FINF

//FIN DE FICHIER


?>