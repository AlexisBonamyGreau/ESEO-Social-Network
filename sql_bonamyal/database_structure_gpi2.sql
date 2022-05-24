DROP TABLE IF EXISTS `Etudiant`;
DROP TABLE IF EXISTS `AnneeScolaire`;
DROP TABLE IF EXISTS `Notification`;
DROP TABLE IF EXISTS `Amis`;
DROP TABLE IF EXISTS `Article`;
DROP TABLE IF EXISTS `Message`;
DROP TABLE IF EXISTS `Conversation`;
DROP TABLE IF EXISTS `Participe`;


CREATE TABLE `AnneeScolaire` (
    idAnneeScolaire INT NOT NULL,
    nom VARCHAR(20) NOT NULL,
    PRIMARY KEY (idAnneeScolaire)
);

CREATE TABLE `Etudiant` (
    id INT NOT NULL,
    nom VARCHAR(20) NOT NULL,
    prenom VARCHAR(20) NOT NULL,
    photo TEXT NOT NULL,
    dateIns date NOT NULL,
    dateModif date NOT NULL,
    appartient INT NOT NULL,
    description TEXT,
	PRIMARY KEY (id),
    FOREIGN KEY (appartient) REFERENCES `AnneeScolaire` (idAnneeScolaire)
);

CREATE TABLE `Notification` (
    idNotification INT NOT NULL,
    type VARCHAR(10) NOT NULL,
    statutLecture VARCHAR(10) NOT NULL,
    statutSuppression VARCHAR(10) NOT NULL,
    dateAjout date NOT NULL,
    emetteur INT NOT NULL,
    receveur INT NOT NULL,
    PRIMARY KEY (idNotification),
    FOREIGN KEY (emetteur) REFERENCES `Etudiant` (id),
    FOREIGN KEY (receveur) REFERENCES `Etudiant` (id)
);

CREATE TABLE `Amis` (
    ami1 INT NOT NULL,
    ami2 INT NOT NULL,
    dateAjout date NOT NULL,
    statut VARCHAR(10) NOT NULL,
    FOREIGN KEY (ami1) REFERENCES `Etudiant` (id),
    FOREIGN KEY (ami2) REFERENCES `Etudiant` (id)
);

CREATE TABLE `Article` (
    id INT NOT NULL,
    contenu VARCHAR(280) NOT NULL,
    media TEXT,
    dateCreation date NOT NULL,
    visibilite VARCHAR(10) NOT NULL,
    auteur INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (auteur) REFERENCES `Etudiant` (id)
);

CREATE TABLE `Conversation` (
    id INT NOT NULL,
    nom VARCHAR(20) NOT NULL,
    dateCreation date NOT NULL,
    image TEXT,
    PRIMARY KEY (id)
);

CREATE TABLE `Message` (
    id INT NOT NULL,
    contenu VARCHAR(280) NOT NULL,
    dateEnvoi date NOT NULL,
    emetteur INT NOT NULL,
    conversation INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (emetteur) REFERENCES `Etudiant` (id),
    FOREIGN KEY (conversation) REFERENCES `Conversation` (id)
);

CREATE TABLE `Participe` (
    membre INT NOT NULL,
    conversation INT NOT NULL,
    FOREIGN KEY (membre) REFERENCES `Etudiant` (id),
    FOREIGN KEY (conversation) REFERENCES `Conversation` (id)
);