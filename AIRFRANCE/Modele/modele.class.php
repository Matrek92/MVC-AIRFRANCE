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
/************** Professeurs ****************/


public function selectAllProfs()
{
	if($this->unPDO != null){
		$requete = "select * from professeur ; ";
		//preparation de la requete
		$select= $this->unPDO->prepare($requete);
		$select->execute();
		//extraction des prof
		$lesProfs = $select->fetchAll();	
		return $lesProfs;
	}
	else {
		return null;
	}
}
	public function insertProfs($tab)
	{
		if($this->unPDO != null){
			$requete="insert into professeur values(null, :nom, :prenom, :diplome); ";
			$donnees = array(":nom"=>$tab['nom'], ":prenom"=>$tab['prenom'], ":diplome"=>$tab['diplome']);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeProfs($mot)
	{
		if($this->unPDO != null){
			$requete = "select * from professeur where nom like :mot or prenom like :mot or diplome like :mot ;";
			$donnees = array(":mot"=>"%".$mot."%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesProfs = $select->fetchAll();
			return $lesProfs;
		}else{
			return null;
		}
	}


	public function deleteProf($idprofesseur)
		{
			if($this->unPDO != null){
				$requete="delete from professeur where idprofesseur = :idprofesseur	;";
				$donnees = array(":idprofesseur"=>$idprofesseur);
				$delete = $this->unPDO->prepare($requete);
				$delete->execute($donnees);
			}
		}



}
?>