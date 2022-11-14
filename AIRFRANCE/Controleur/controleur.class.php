<?php 
 	require_once ("modele/modele.class.php");
 	class Controleur
 	{
 		private $unModele;
 		public function __construct(){
 			$this->unModele = new Modele();
 		}

 							//AVIONS\\

 		public function selectAllAvions(){
 			$lesAvions = $this->unModele->selectAllAvions();
 			return $lesAvions;
 		}
 		public function insertAvions($tab)
 		{
 			//controler les données avant de les envoyer au modele 
 			$this->unModele->insertAvions($tab);
 		}
 		public function selectLikeAvions($mot)
 		{
 			$lesAvions = $this->unModele->selectLikeAvions($mot);
 			return $lesAvions;
 		}
 		public function deleteAvions($idavion)
 		{
 			$this->unModele->deleteAvions($idavion);
 		}
 		public function updateAvions($tab)
 		{
 			$this->unModele->updateAvions($tab);
 		}
 		public function selectWhereAvions($idavion)
 		{
 			return $this->unModele->selectWhereAvions($idavion);
 		}
 		public function verifConnexion ($email, $mdp){
 			//controler les email / mdp
 			$unUser = $this->unModele->verifConnexion($email, $mdp);
 			return $unUser;
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




 							//vol\\

		public function selectAllVols(){
 			$lesVols = $this->unModele->selectAllVols();
 			return $lesVols;
 		}
 		public function insertVols($tab)
 		{
 			//controler les données avant de les envoyer au modele 
 			$this->unModele->insertVols($tab);
 		}
 		public function selectLikeVols($mot)
 		{
 			$lesVols = $this->unModele->selectLikeVols($mot);
 			return $lesVols;
 		}
 		public function deleteVols($idvol)
 		{
 			$this->unModele->deleteVols($idvol);
 		}
 		public function updateVols($tab)
 		{
 			$this->unModele->updateVols($tab);
 		}
 		public function selectWhereVols($idvol)
 		{
 			return $this->unModele->selectWhereVols($idvol);
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
 		public function deleteAeroports($idaeroport)
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