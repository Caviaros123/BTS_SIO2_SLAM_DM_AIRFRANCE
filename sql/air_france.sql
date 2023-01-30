drop database if exists  air_france;
create database air_france;
use air_france;

create table reservation (
    idreservation int(3) not null auto_increment,
    date_reservation varchar (50),
    date_anulation timestamp,
    prix float,
    primary key(idreservation)
);

create table avion (
    idavion int (3) not null auto_increment,
    designation varchar (50),
	constructeur varchar (50),
	nbplaces int (3),
    primary key(idavion)
);

create table personnel (
    idpersonnel int (3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(100),
    primary key (idpersonnel)
);

create table pilote (
    idpersonnel int (3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(100),
    niveau_pil varchar(30),
    primary key(idpilote)
);

create table stewart (
    idpersonnel int (3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(100),
    fonction_stew varchar(30),
    primary key (idstewart)
);


create table vol (
    idvol int (3) not null auto_increment,
    designation varchar (50),
    datevol varchar(10),
	heurevol varchar(5),
    idpilote int (3) not null,
    primary key(idvol),
    foreign key (idpilote) references pilote(idpilote)
);

create table client (
    idclient int (3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(100),
    role enum ("admin","client"),
    primary key (idclient)
);


create table date_vol (
    idDateheure_vol int (3) not null auto_increment,
    primary key (idDateheure_vol)
);

insert into aeroport VALUES
    (null, 'CDG','France'),
    (null, 'Orly','France');

insert into avion VALUES
    (null, 'A80','AIRFRANCE',360,1),
    (null, 'B80','AIRFRANCE',280,2);

insert into pilote VALUES
    (null, 'albert','ZARYU','albert.zaryo@airfrance.fr'),
    (null, 'michel','FERYT','michel.feryt@airfrance.fr');

insert into vol VALUES
    (null, 'Marseilles','21/09/2017','13:00',1,1),
    (null, 'Lyon','06/12/2014','12:00',2,2);

insert into user values
    (null,"Vallentin","Quentin","a@gmail.com","123","admin"),
    (null,"Prince","Clara","b@gmail.com","456","user");