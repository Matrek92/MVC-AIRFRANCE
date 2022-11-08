<?php 
 	require_once ("modele/modele.class.php");
 	class Controleur
 	{
 		private $unModele;
 		public function __construct(){
 			$this->unModele = new Modele();
 		}
 		public function selectAllClasses(){
 			$lesAvions = $this->unModele->selectAllClasses();
 			return $lesAvions;
 		}
 		public function insertClasse($tab)
 		{
 			//controler les données avant de les envoyer au modele 
 			$this->unModele->insertClasse($tab);
 		}
 		public function selectLikeClasses($mot)
 		{
 			$lesAvions = $this->unModele->selectLikeClasses($mot);
 			return $lesAvions;
 		}
 		public function deleteClasse($idavion)
 		{
 			$this->unModele->deleteClasse($idavion);
 		}
 		public function updateClasse($tab)
 		{
 			$this->unModele->updateClasse($tab);
 		}
 		public function selectWhereClasse($idavion)
 		{
 			return $this->unModele->selectWhereClasse($idavion);
 		}


 		// Pilotes //


 		
 
 		public function selectAllPilotes(){
 			$lesPilotes = $this->unModele->selectAllPilotes();
 			return $lesPilotes;
 		}
 		public function insertPilote($tab)
 		{
 			//controler les données avant de les envoyer au modele 
 			$this->unModele->insertPilote($tab);
 		}
 		public function selectLikePilotes($mot)
 		{
 			$lesAvions = $this->unModele->selectLikePilotes($mot);
 			return $lesPilotes;
 		}
 		public function deletePilote($idpilote)
 		{
 			$this->unModele->deletePilote($idpilote);
 		}
 		public function updatePilote($tab)
 		{
 			$this->unModele->updatePilote($tab);
 		}
 		public function selectWherePilote($idpilote)
 		{
 			return $this->unModele->selectWherePilote($idpilote);
 		}



 	}

?>
