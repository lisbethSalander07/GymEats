
create database if not exists GYMEATS;
use GYMEATS;

create table if not exists Atleta(
    email varchar(255) PRIMARY key,
    nome VARCHAR(255) not null,
    cognome VARCHAR(255) not null,
    password varchar(255) not null,
    altezza decimal(5,2) not null,
    peso decimal(5,2) not null,
    sesso boolean not null
);

create table if not exists Diario(
    id int(5) PRIMARY key,
    nome varchar(255) not null,
    ob_cal int(5) not null,
    ob_carbo int(5) not null,
    ob_proteine int(5) not null,
    ob_grassi int(5) not null,
    ob_peso int(5) not null,
    idAtleta varchar(255) not null,
    FOREIGN key (idAtleta) REFERENCES Atleta(email)
);

create table if not exists Giornata(
    id int(5) PRIMARY key,
    data date not null,
    calorie_tot int(5) not null,
    carbo_tot int(5) not null,
    proteine_tot int(5) not null,
    grassi_tot int(5) not null,
    acqua decimal(5,2) not null,
    idDiario int(5) not null,
    FOREIGN key (idDiario) REFERENCES Diario(id)
);

create table if NOT exists Pasto(
    id int(5) primary key,
    nome varchar(255) not null,
    idGiornata int(5) not null,
    FOREIGN key (idGiornata) REFERENCES Giornata(id)
);

create table if not exists Alimento(
    id int(5) PRIMARY key,
    nome varchar(255) not null,
    cal_100 int(5) not null,
    grassi_100 int(5) not null,
    carbo_100 int(5) not null,
    proteine_100 int(5) not null
);

create table if not exists Registrare(
    id int(5) PRIMARY key,
    quantita int(5) not null,
    idPasto int(5) not null,
    idAlimento int(5) not null,
    Foreign Key (idPasto) REFERENCES Pasto(id),
    Foreign Key (idAlimento) REFERENCES Alimento(id)
);

-- PARTE DI ALLENAMENTO

create table if not exists Scheda(
    id int(5) PRIMARY key,
    nome varchar(255) not null,
    dataCreazione date not null,
    idAtleta varchar(255) not null,
    Foreign Key (idAtleta) REFERENCES Atleta(email)
);

create table if not exists Allenamento(
    id int(5) primary key,
    durata decimal(5,2) not null,
    data date not null,
    idScheda INT(5) NOT NULL,
    FOREIGN KEY (idScheda) REFERENCES Scheda(id)
);

create table if not exists Esercizio(
    id int(5) primary key,    
    nome varchar(255) not null,
    descrizione varchar(255) not null,
    muscoli_coinvolti varchar(255) not null,
);

create table if not exists Serie(
    id int(5) primary key,
    data date not null,
    tipo VARCHAR(255) not null,
    carico decimal(5,2) not null,
    ripetizioni int(5) not null,
    idAllenamento INT(5) NOT NULL,
    idEsercizio INT(5) NOT NULL,
    FOREIGN KEY (idAllenamento) REFERENCES Allenamento(id),
    FOREIGN KEY (idEsercizio) REFERENCES Esercizio(id)
);