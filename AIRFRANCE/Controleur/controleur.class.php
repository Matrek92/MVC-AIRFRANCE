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


 		// Professeurs //


 		public function selectAllProfs(){
 			$lesProfs = $this->unModele->selectAllProfs();
 			return $lesProfs;
 		}
 		public function insertProfs($tab)
 		{
 			//controler les données avant de les envoyer au modele 
 			$this->unModele->insertProfs($tab);
 		}
 		public function selectLikeProfs($mot)
 		{
 			$lesProfs = $this->unModele->selectLikeProfs($mot);
 			return $lesProfs;
 		}
 		public function deleteProf($idprofesseur)
 		{
 			$this->unModele->deleteProf($idprofesseur);
 		}



 	}

?>