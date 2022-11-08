<?php 
	//extraction //injection des données dans la base
class Modele{
	private $unPDO; //instance de la classe PDO


public function __construct()
{
	$this->unPDO = null;
	try{
	$this->unPDO = new PDO("mysql:host=localhost;dbname=airfrance", "root", ""); //PHP DATA Object
	}
		
		catch(PDOexception $exp){
			echo "Erreur de connexion à la BDD <br/>";
			echo $exp->getMessage();
		}
		
}

/************** Classes ****************/


public function selectAllClasses()
{
	if($this->unPDO != null){
		$requete = "select * from avion ; ";
		//preparation de la requete
		$select= $this->unPDO->prepare($requete);
		$select->execute();
		//extraction des classes
		$lesAvions = $select->fetchAll();	
		return $lesAvions;
	}
	else
		return null;
}
	public function insertClasse($tab)
	{
		if($this->unPDO != null){
			$requete="insert into avion values(null, :nom, :modele, :capacite); ";
			$donnees = array(":nom"=>$tab['nom'], ":modele"=>$tab['modele'], ":capacite"=>$tab['capacite']);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeClasses($mot)
	{
		if($this->unPDO != null){
			$requete = "select * from avion where nom like :mot or modele like :mot or capacite like :mot ;";
			$donnees = array(":mot"=>"%".$mot."%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesAvions = $select->fetchAll();
			return $lesAvions;
		}else{
			return null;
		}
	}

		public function deleteClasse($idavion)
		{
			if($this->unPDO != null){
				$requete="delete from avion where idavion = :idavion	;";
				$donnees = array(":idavion"=>$idavion);
				$delete = $this->unPDO->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function updateClasse($tab){
			if($this->unPDO != null){
				$requete = "update avion set nom=:nom, modele=:modele, capacite=:capacite where idavion=:idavion;";
				$donnees=array(":nom"=>$tab['nom'], ":modele"=>$tab['modele'], ":capacite"=>$tab['capacite'], ":idavion"=>$tab['idavion']);
				$update=$this->unPDO->prepare($requete);
				$update->execute($donnees);
			}
		}
		public function selectWhereClasse($idavion){
			if($this->unPDO != null){
				$requete="select * from avion where idavion=:idavion;";
				$donnees=array(":idavion"=>$idavion);
				$select= $this->unPDO->prepare($requete);
				$select->execute($donnees);
				$unAvion = $select->fetch();	//un seul resultat
				return $unAvion;
		}else{
			return null;
		}
	}
/************** Pilotes ****************/


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
			
			
			//AEROPORT//
			
 public function selectAllAeroports()
{
	if($this->unPDO != null){
		$requete = "select * from aeroport ; ";
		//preparation de la requete
		$select= $this->unPDO->prepare($requete);
		$select->execute();
		//extraction des classes
		$lesAeroports = $select->fetchAll();	
		return $lesAeroports;
	}
	else
		return null;
}
	public function insertAeroports($tab)
	{
		if($this->unPDO != null){
			$requete="insert into aeroport values(not null, :nom, :pays, :ville); ";
			$donnees = array(":nom"=>$tab['nom'], ":pays"=>$tab['pays'], ":ville"=>$tab['ville']);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeAeroports($mot)
	{
		if($this->unPDO != null){
			$requete = "select * from aeroport where nom like :mot or pays like :mot or ville like :mot ;";
			$donnees = array(":mot"=>"%".$mot."%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesAeroports = $select->fetchAll();
			return $lesAeroports;
		}else{
			return null;
		}
	}

		public function deleteAeroports($idaeroport)
		{
			if($this->unPDO != null){
				$requete="delete from aeroport where idaeroport = :idaeroport	;";
				$donnees = array(":idaeroport"=>$idaeroport);
				$delete = $this->unPDO->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function updateAeroports($tab){
			if($this->unPDO != null){
				$requete = "update aeroport set nom=:nom, pays=:pays, ville=:ville where idaeroport=:idaeroport;";
				$donnees=array(":nom"=>$tab['nom'], ":pays"=>$tab['pays'], ":ville"=>$tab['ville'], ":idaeroport"=>$tab['idaeroport']);
				$update=$this->unPDO->prepare($requete);
				$update->execute($donnees);
			}
		}
		public function selectWhereAeroports($idaeroport){
			if($this->unPDO != null){
				$requete="select * from aeroport where idaeroport=:idaeroport;";
				$donnees=array(":idaeroport"=>$idaeroport);
				$select= $this->unPDO->prepare($requete);
				$select->execute($donnees);
				$unAeroport = $select->fetch();	//un seul resultat
				return $unAeroport;
		}else{
			return null;
		}
			
		}

			
			
			
	}
?>
