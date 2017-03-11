<?php
	
	// header('Content-type: application/json; charset=UTF-8');
	
	$response = array();
	
	if (isset($_POST['delete'])) {
		

		require_once('../../includes/configs/connect.php');
		require_once('../../models/models.php');

		$cnx = getBD();

		
		$pid = intval($_POST['delete']);
		$sql = 'DELETE FROM partenaires WHERE pid=?';
		$idResult  = executeR($cnx,$sql,array($pid));
		
		if ($idResult) {
			$response['status']  = 'success';
			$response['message'] = 'Partenaire supprimé avec succès ...';
		} else {
			$response['status']  = 'error';
			$response['message'] = 'Impossible de supprimer ce partenaire ...';
		}
		echo json_encode($response);
	}elseif(!isset($_POST['delete'])){

		echo "Vous n'êtes pas censé être ici";

	}