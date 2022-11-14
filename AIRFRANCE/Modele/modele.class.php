<?php 
	//extraction //injection des données dans la base
class Modele
{
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

/************** Avions ****************/


public function selectAllAvions()
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
	public function insertAvions($tab)
	{
		if($this->unPDO != null){
			$requete="insert into avion values(not null, :nom, :modele, :capacite); ";
			$donnees = array(":nom"=>$tab['nom'], ":modele"=>$tab['modele'], ":capacite"=>$tab['capacite']);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeAvions($mot)
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

		public function deleteAvions($idavion)
		{
			if($this->unPDO != null){
				$requete="delete from avion where idavion = :idavion	;";
				$donnees = array(":idavion"=>$idavion);
				$delete = $this->unPDO->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function updateAvions($tab){
			if($this->unPDO != null){
				$requete = "update avion set nom=:nom, modele=:modele, capacite=:capacite where idavion=:idavion;";
				$donnees=array(":nom"=>$tab['nom'], ":modele"=>$tab['modele'], ":capacite"=>$tab['capacite'], ":idavion"=>$tab['idavion']);
				$update=$this->unPDO->prepare($requete);
				$update->execute($donnees);
			}
		}
		public function selectWhereAvions($idavion){
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


public function selectAllPilotes()
{
	if($this->unPDO != null){
		$requete = "select * from pilote ; ";
		//preparation de la requete
		$select= $this->unPDO->prepare($requete);
		$select->execute();
		//extraction des classes
		$lesPilotes = $select->fetchAll();	
		return $lesPilotes;
	}
	else
		return null;
}
	public function insertPilotes($tab)
	{
		if($this->unPDO != null){
			$requete="insert into pilote values(not null, :nom, :prenom, :anciennete); ";
			$donnees = array(":nom"=>$tab['nom'], ":prenom"=>$tab['prenom'], ":anciennete"=>$tab['anciennete']);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikePilotes($mot)
	{
		if($this->unPDO != null){
			$requete = "select * from pilote where nom like :mot or prenom like :mot or anciennete like :mot ;";
			$donnees = array(":mot"=>"%".$mot."%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesPilotes = $select->fetchAll();
			return $lesPilotes;
		}else{
			return null;
		}
	}

		public function deletePilotes($idpilote)
		{
			if($this->unPDO != null){
				$requete="delete from pilote where idpilote = :idpilote	;";
				$donnees = array(":idpilote"=>$idpilote);
				$delete = $this->unPDO->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function updatePilotes($tab){
			if($this->unPDO != null){
				$requete = "update pilote set nom=:nom, prenom=:prenom, anciennete=:anciennete where idpilote=:idpilote;";
				$donnees=array(":nom"=>$tab['nom'], ":prenom"=>$tab['prenom'], ":anciennete"=>$tab['anciennete'], ":idpilote"=>$tab['idpilote']);
				$update=$this->unPDO->prepare($requete);
				$update->execute($donnees);
			}
		}
		public function selectWherePilotes($idpilote){
			if($this->unPDO != null){
				$requete="select * from pilote where idpilote=:idpilote;";
				$donnees=array(":idpilote"=>$idpilote);
				$select= $this->unPDO->prepare($requete);
				$select->execute($donnees);
				$unPilote = $select->fetch();	//un seul resultat
				return $unPilote;
		}else{
			return null;
		}
			
		}
		public function verifConnexion($email, $mdp)
		{
			if($this->unPDO != null){
				$requete="select * from user where email =:email and mdp=:mdp;";
				$donnees=array(":email"=>$email, ":mdp"=>$mdp);
				$select =$this->unPDO->prepare($requete);
				$select->execute($donnees);
				$unUser = $select->fetch(); //extraire un résultat
				return $unUser;				
			}else{
				return null;
			}
		}	



		/************** Vols ****************/




public function selectAllVols()
{
	if($this->unPDO != null){
		$requete = "select * from vol ; ";
		//preparation de la requete
		$select= $this->unPDO->prepare($requete);
		$select->execute();
		//extraction des classes
		$lesVols = $select->fetchAll();	
		return $lesVols;
	}
	else
		return null;
}
	public function insertVols($tab)
	{
		if($this->unPDO != null){
			$requete="insert into vol values( null, :nom, :paysDepart, :paysArrive, :idavion); ";
			$donnees = array(":nom"=>$tab['nom'], ":paysDepart"=>$tab['paysDepart'], ":paysArrive"=>$tab['paysArrive'], ":idavion"=>$tab['idavion']);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeVols($mot)
	{
		if($this->unPDO != null){
			$requete = "select * from vol where nom like :mot or paysDepart like :mot or paysArrive like :mot or idavion like :mot;";
			$donnees = array(":mot"=>"%".$mot."%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesVols = $select->fetchAll();
			return $lesVols;
		}else{
			return null;
		}
	}

		public function deleteVols($idvol)
		{
			if($this->unPDO != null){
				$requete="delete from vol where idvol = :idvol	;";
				$donnees = array(":idvol"=>$idvol);
				$delete = $this->unPDO->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function updateVols($tab){
			if($this->unPDO != null){
				$requete = "update vol set nom=:nom, paysDepart=:paysDepart, paysArrive=:paysArrive, idavion=:idavion where idvol=:idvol;";
				$donnees=array(":nom"=>$tab['nom'], ":paysDepart"=>$tab['paysDepart'], ":paysArrive"=>$tab['paysArrive'], ":idavion"=>$tab['idavion'], ":idvol"=>$tab['idvol']);
				$update=$this->unPDO->prepare($requete);
				$update->execute($donnees);
			}
		}
		public function selectWhereVols($idvol){
			if($this->unPDO != null){
				$requete="select * from vol where idvol=:idvol;";
				$donnees=array(":idvol"=>$idvol);
				$select= $this->unPDO->prepare($requete);
				$select->execute($donnees);
				$unVol = $select->fetch();	//un seul resultat
				return $unVol;
		}else{
			return null;
		}
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
			$requete="insert into aeroport values(not null, :nom, :pays, :ville, :idavion, :idvol); ";
			$donnees = array(":nom"=>$tab['nom'], ":pays"=>$tab['pays'], ":ville"=>$tab['ville'], ":idavion"=>$tab['idavion'], ":idvol"=>$tab['idvol']);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeAeroports($mot)
	{
		if($this->unPDO != null){
			$requete = "select * from aeroport where nom like :mot or pays like :mot or ville like :mot or idavion like :mot or idvol like :mot;";
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
				$requete = "update aeroport set nom=:nom, pays=:pays, ville=:ville, idavion=:idavion, idvol=:idvol where idaeroport=:idaeroport;";
				$donnees=array(":nom"=>$tab['nom'], ":pays"=>$tab['pays'], ":ville"=>$tab['ville'], ":idavion"=>$tab['idavion'], ":idvol"=>$tab['idvol'], ":idaeroport"=>$tab['idaeroport']);
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