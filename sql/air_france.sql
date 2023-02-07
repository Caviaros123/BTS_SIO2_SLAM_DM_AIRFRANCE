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
    idpilote int (3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(100),
    niveau_pil varchar(30),
    primary key(idpilote)
);

create table stewart (
    idstewart int (3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(100),
    fonction_stew varchar(30),
    primary key (idstewart)
);

create table vol (
    idvol int (3) not null auto_increment,
    villedepart varchar (50),
    villearrive varchar (50),
    nbescale int(2),
    datevol datetime,
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
create table aeroport (
    idaeroport int(3) not null auto_increment,
    nom varchar (50),
    pays varchar (50),
    primary key(idaeroport)
);

create table date_vol (
    idDateheure_vol int (3) not null auto_increment,
    primary key (idDateheure_vol)
);


insert into vol VALUES
        (null, 'Marseilles','Paris', 0, now(),1),
        (null, 'Lyon', 'Londres',3, now(),1);

insert into pilote VALUES
    (null, 'Chouaki', 'Requel', 'chouaki@gmail.com', '1234', 20),
    (null, 'Prince', 'Burhan', 'prince@gmail.com', '1234', 10);


