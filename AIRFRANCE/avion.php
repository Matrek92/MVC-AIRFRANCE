<h2>Gestion des avions</h2>

<?php 
	

	$lAvion = null;



	if(isset($_GET['action']) && isset($_GET['idavion'])){
		$action = $_GET['action'];
		$idavion = $_GET['idavion'];
		switch($action){
			case "sup" : $unControleur->deleteClasse($idavion) ; break;
			case "edit" : $lAvion = $unControleur->selectWhereClasse($idavion);
			break;
		}
	}

	

	require_once("vue/vue_insert_avion.php");
	if(isset($_POST['Valider']))
	{
		$unControleur->insertClasse($_POST);
	}

	if(isset($_POST['Modifier']))
	{
		$unControleur->updateClasse($_POST);
		header("Location: index.php?page=1");
	}

	if(isset($_POST['Filtrer']))
	{
		$mot = $_POST['mot'];
		$lesAvions = $unControleur->selectLikeClasses($mot);
	}else{
		$lesAvions = $unControleur->selectAllClasses();
	}

	require_once("vue/vue_les_classes.php");

?>