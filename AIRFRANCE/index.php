<?php 
	require_once("controleur/controleur.class.php");
	$unControleur = new Controleur(); 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Air France</title>
</head>
<body>
<center>
	<h1>Air France</h1>
	<br/>
	<a href="index.php?page=0">
		<img src="images/home.png" height="150" width="150" >
	</a>
	<a href="index.php?page=1">
		<img src="images/avion.png" height="130" width="150" >
	</a>
	<a href="index.php?page=2">
		<img src="images/vol.png" height="130" width="150" >
	</a>
	<a href="index.php?page=3">
		<img src="images/pilote.png" height="130" width="150" >
	</a>
	<a href="index.php?page=4">
		<img src="images/aeroport.png" height="130" width="150" >
	</a>
	<a href="index.php?page=5">
		<img src="images/deconnexion.png" height="150" width="150" >
	</a>
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	else
		$page = 0;
	switch($page){
		case 0 : require_once("home.php"); break;
		case 1 : require_once("avion.php"); break;
		case 2 : require_once("vol.php"); break;
		case 3 : require_once("pilote.php"); break;
		case 4 : require_once("aeroport.php"); break;
		case 5 : break;
	}
	?>

</center>

</body>
</html>