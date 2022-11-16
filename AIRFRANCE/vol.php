<h2>Gestion des vols</h2>

<?php  
	 
	if(isset($_SESSION['role']) && $_SESSION['role']=='admin')
	{
	

	$leVol = null;



	if(isset($_GET['action']) && isset($_GET['idvol'])){
		$action = $_GET['action'];
		$idvol = $_GET['idvol'];
		switch($action){
			case "sup" : $unControleur->deleteVols($idvol) ; break;
			case "edit" : $leVol = $unControleur->selectWhereVols($idvol);
			break;
		}
	}

	

	require_once("vue/vue_insert_vol.php");
	if(isset($_POST['Valider']))
	{
		$unControleur->insertVols($_POST);
	}

	if(isset($_POST['Modifier']))
	{
		$unControleur->updateVols($_POST);
		header("Location: index.php?page=2");
	}
}

	if(isset($_POST['Filtrer']))
	{
		$mot = $_POST['mot'];
		$lesVols = $unControleur->selectLikeVols($mot);
	}else{
		$lesVols = $unControleur->selectAllVols();
	}


	require_once("vue/vue_les_vols.php");

?>