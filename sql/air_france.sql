drop database if exists  air_france;
create database air_france;
use air_france;

create table reservation (
    idreservation int(3) not null auto_increment,
    date_reservation datetime,
    date_anulation datetime,
    prix decimal(8,2),
    idclient int(3) not null,
    idvol int(3) not null,
    primary key(idreservation),
    foreign key(idvol) references vol(idvol),
    foreign key(idclient) references client(idclient)
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
    primary key(idpersonnel)
);

create table stewart (
    idpersonnel int (3) not null auto_increment,
     nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(100),
    fonction_stew varchar(30),
    primary key (idpersonnel)
);


create table vol (
    idvol int (3) not null auto_increment,
    designation varchar (50),
    datevol date,
	heurevol time,
    idpersonnel int (3) not null,
    primary key(idvol),
    idavion int(3) not null,
    foreign key (idpersonnel) references pilote(idpersonnel),
    foreign key(idavion) references avion(idavion)
);

create table client (
    idclient int (3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(50),
    mdp varchar(50),
    datenaiss date,
    role enum ("admin","client"),
    primary key (idclient)
);



