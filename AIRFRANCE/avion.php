<h2>Gestion des avions</h2>

<?php 
	 
	if(isset($_SESSION['role']) && $_SESSION['role']=='admin')
	{

		$lAvion = null;



		if(isset($_GET['action']) && isset($_GET['idavion']))
		{
			$action = $_GET['action'];
			$idavion = $_GET['idavion'];
			switch($action)
			{
				case "sup" : $unControleur->deleteAvions($idavion) ; break;
				case "edit" : $lAvion = $unControleur->selectWhereAvions($idavion);
				break;
			}
		}
	}

	

		require_once("vue/vue_insert_avion.php");
		if(isset($_POST['Valider']))
		{
			$unControleur->insertAvions($_POST);
		}

		if(isset($_POST['Modifier']))
		{
			$unControleur->updateAvions($_POST);
			header("Location: index.php?page=1");
		}

		if(isset($_POST['Filtrer']))
		{
			$mot = $_POST['mot'];
			$lesAvions = $unControleur->selectLikeAvions($mot);
		}else{
			$lesAvions = $unControleur->selectAllAvions();
		}
	

		require_once("vue/vue_les_avions.php");

?>