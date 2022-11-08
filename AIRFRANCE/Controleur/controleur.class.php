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
 		public function insertPilotes($tab)
 		{
 			//controler les données avant de les envoyer au modele 
 			$this->unModele->insertPilotes($tab);
 		}
 		public function selectLikePilotes($mot)
 		{
 			$lesPilotes = $this->unModele->selectLikePilotes($mot);
 			return $lesPilotes;
 		}
 		public function deletePilotes($idpilote)
 		{
 			$this->unModele->deletePilotes($idpilote);
 		}
 		public function updatePilotes($tab)
 		{
 			$this->unModele->updatePilotes($tab);
 		}
 		public function selectWherePilotes($idpilote)
 		{
 			return $this->unModele->selectWherePilotes($idpilote);

 		}
 		//	Aeroport //



 		public function selectAllAeroports(){
 			$lesAeroports = $this->unModele->selectAllAeroports();
 			return $lesAeroports;
 		}
 		public function insertAeroports($tab)
 		{
 			//controler les données avant de les envoyer au modele 
 			$this->unModele->insertAeroports($tab);
 		}
 		public function selectLikeAeroports($mot)
 		{
 			$lesAeroports = $this->unModele->selectLikeAeroports($mot);
 			return $lesAeroports;
 		}
 		public function deleteAeroports($idpilote)
 		{
 			$this->unModele->deleteAeroports($idaeroport);
 		}
 		public function updateAeroports($tab)
 		{
 			$this->unModele->updateAeroports($tab);
 		}
 		public function selectWhereAeroports($idaeroport)
 		{
 			return $this->unModele->selectWhereAeroports($idaeroport);

 		}




 	}

?>
