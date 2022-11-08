drop database if exists airfrance;
create database airfrance;
use airfrance;

	create table avion(
		idavion int(3) not null auto_increment,
		nom varchar(50),
		modele varchar(50),
		capacite int(3),
		primary key(idavion)
		);
	create table vol(
		idvol int(3) not null auto_increment,
		nom varchar(50),
		paysDepart varchar(50),
		paysArrive varchar(50),
		idavion int(3) not null,
		primary key(idvol),
		foreign key(idavion) references avion(idavion)
		);
	create table pilote(
		idpilote int(3) not null auto_increment,
		nom varchar(50),
		prenom varchar(50),
		anciennete varchar(50),
		primary key(idpilote)
		);
	create table aeroport(
		idaeroport int(3) not null auto_increment,
		nom varchar(50),
		pays int(3),
		ville varchar(30),
		idavion int(3) not null,
		idvol int(3) not null,
		primary key(idaeroport),
		foreign key(idavion) references avion(idavion),
		foreign key(idvol) references vol(idvol)
		);

	insert into avion values
		(null, "Concorde", "201", "100"),
		(null, "Boeing", "777", "550");

	insert into vol values
		(null, "Tropique", "France", "Afrique du sud", 1),
		(null, "Asie", "France", "Inde", 2);
	insert into pilote values
		(null, "Pogba", "Paul", "5 ans"),
		(null, "Benzema", "Karim", "6 ans");

	insert into aeroport values
		(null, "Orly", "France", "Paris", 1, 1),
		(null, "Charles de Gaulle", "France", "Paris",1, 2);
