<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once 'includes/libs/Smarty/Smarty.class.php';
// ASSIGNATION CLASS SMARTY A LA VARIABLE $TEMPLATE
$template = new Smarty();

$template->assign('title', 'Test Accueil');



// CREATION D'UN TABLEAU
$testtable = array();
$i = 0;
// FIN

// BOUCLE AFFICHAGE
while($row=$idResult->fetch(PDO::FETCH_ASSOC)){
	$testtable[$i]['pid'] = $row['pid'];
	$testtable[$i]['pname'] = $row['pname'];
	$testtable[$i]['pfirstname'] = $row['pfirstname'];
	$testtable[$i]['pregisterdate'] = $row['pregisterdate'];
	$i++;
}
// FIN AFFICHAGE

// COMPTE
$count = $idResult->rowCount();
//FIN COMPTE

// ASIGNATION DES VARIABLES SMARTY POUR AFFICHAGE DANS TPL
$template->assign('nameArray', 'Liste des partenaires');
$template->assign('nameArrayDate', 'Nouveaux partenaires en date du');
$template->assign('testtable', $testtable);
// FIN ASSIGNATION VARIABLES



//AFFICHAGE DES TPL
$template->display('tpl/header.tpl');
$template->display('tpl/home/home.tpl');
$template->display('tpl/footer.tpl');
// FIN AFFICHAGE DES TPL