DROP TABLE IF EXISTS Notification ;
DROP TABLE IF EXISTS Message  ;
DROP TABLE IF EXISTS Amis  ;
DROP TABLE IF EXISTS Membre  ;
DROP TABLE IF EXISTS Article  ;
DROP TABLE IF EXISTS Etudiant  ;
DROP TABLE IF EXISTS AnneeScolaire  ;
DROP TABLE IF EXISTS Conversation  ;

CREATE TABLE Conversation (
  idConv int NOT NULL /*AUTO_INCREMENT*/,
  nom varchar(30) NOT NULL,
  dateCreation datetime NOT NULL,
  image varchar(100),
  PRIMARY KEY (idConv)
);

CREATE TABLE AnneeScolaire (
  idAnneeScolaire int NOT NULL,
  nom varchar(15) NOT NULL,
  PRIMARY KEY (idAnneeScolaire)
);

CREATE TABLE Etudiant (
  idEtu int NOT NULL /*AUTO_INCREMENT*/,
  nom varchar(40) NOT NULL,
  prenom varchar(40) NOT NULL,
  photo varchar(100),
  anneeScolaire int NOT NULL,
  email varchar(50) NOT NULL,
  motDePasse varchar(20) NOT NULL,
  description text,
  PRIMARY KEY (idEtu),
  FOREIGN KEY (anneeScolaire) REFERENCES AnneeScolaire (idAnneeScolaire)
);

CREATE TABLE Message (
  idMess int NOT NULL AUTO_INCREMENT,
  contenu varchar(200) NOT NULL,
  dateEnvoi datetime NOT NULL,
  conversation int NOT NULL,
  emetteur int NOT NULL,
  PRIMARY KEY (idMess),
  FOREIGN KEY (conversation) REFERENCES Conversation(idConv),
  FOREIGN KEY (emetteur) REFERENCES Etudiant (idEtu)
);


CREATE TABLE Article (
  idArt int NOT NULL AUTO_INCREMENT,
  contenu varchar(200) NOT NULL,
  media varchar(100) NOT NULL,
  dateCreation datetime NOT NULL,
  visibilite ENUM('public', 'amis') default 'amis' NOT NULL,
  auteur int NOT NULL,
  PRIMARY KEY (idArt),
  FOREIGN KEY (auteur) REFERENCES Etudiant (idEtu)
);

CREATE TABLE Membre (
  etudiant int NOT NULL,
  conversation int NOT NULL,
  PRIMARY KEY(etudiant,conversation),
  FOREIGN KEY(etudiant) REFERENCES Etudiant(idEtu),
  FOREIGN KEY(conversation) REFERENCES Conversation(idConv)
);

CREATE TABLE Amis (
  etudiant int NOT NULL,
  amis int NOT NULL,
  dateAjout datetime NOT NULL,
  statut ENUM('en attente','valide','refuse'),
  PRIMARY KEY(etudiant,amis),
  FOREIGN KEY(etudiant) REFERENCES Etudiant(idEtu),
  FOREIGN KEY(amis) REFERENCES Etudiant(idEtu)
);

CREATE TABLE Notification (
idNotification int NOT NULL AUTO_INCREMENT,
idEtudiant int NOT NULL,
idEmetteur INT(11) /*NOT NULL*/,
type ENUM('message', 'demande ajout','nouveau groupe','nouvel utilisateur') default 'message' NOT NULL,
statutLecture ENUM ('oui','non') default 'non' NOT NULL,
statutSupression ENUM ('oui','non') default 'non' NOT NULL,
dateAjout DATETIME NOT NULL,
PRIMARY KEY (idNotification),
FOREIGN KEY (idEtudiant) REFERENCES Etudiant (idEtu),
FOREIGN KEY (idEmetteur) REFERENCES Etudiant (idEtu)
);

