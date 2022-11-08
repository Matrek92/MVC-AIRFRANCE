<h2>Gestion des pilotes</h2>

<?php 

	if(isset($_GET['action']) && isset($_GET['idpilote'])){
		$action = $_GET['action'];
		$idpilote = $_GET['idpilote'];
		switch($action){
			case "sup" : $unControleur->deletePilotes($idpilote) ; break;
			case "edit" : break;
		}
	}



	require_once("vue/vue_insert_pilote.php");
	if(isset($_POST['Valider']))
	{
		$unControleur->insertPilotes($_POST);
	}

	if(isset($_POST['Filtrer']))
	{
		$mot = $_POST['mot'];
		$lesPilotes = $unControleur->selectLikePilotes($mot);
	}else{
		$lesPilotes = $unControleur->selectAllPilotes();
	}

	require_once("vue/vue_les_pilotes.php");

?>
