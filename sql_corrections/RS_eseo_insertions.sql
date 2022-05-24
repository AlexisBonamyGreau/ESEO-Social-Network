INSERT INTO AnneeScolaire VALUES
 (1,'E1'),
 (2,'E2'),
 (3,'E3e'),
 (4,'E4e'),
 (5,'E5e'), 
 (6,'E3a'),
 (7,'E4a'),
 (8,'E5a'),
 (9,'B1'),
 (10,'B2'),
 (11,'B3');

INSERT INTO Etudiant(idEtu, nom, prenom, anneeScolaire, email, motDePasse) VALUES(1,'Ann','Alice',6,'alice@mail.fr','network'),
(2,'Bobb','Bob',6,'bob@mail.fr','network'),
(3,'Cal','Calvin',3,'calvin@mail.fr','network'),
(4,'Dree','Drew',8,'drew@mail.fr','network'),
(5,'Eyl','Eylin',3,'eylin@mail.fr','network'),
(6,'Fin','Finn',3,'finn@mail.fr','network'),
(7,'Gree','Greg',4,'greg@mail.fr','network');

INSERT INTO Article (contenu, media, dateCreation, visibilite, auteur) VALUES
('un premier contenu','le media du premier contenu', '2022-05-15 16:33:00', 'public', 3),
('un deuxième contenu','le media du 2e contenu', '2022-05-20 13:25:00', 'amis', 3),
('un 3e contenu','le media du 3e contenu', '2022-05-02 15:45:00', 'public', 5),
('un 4e contenu','le media du 4e contenu', '2022-04-22 11:15:00', 'public', 7);

INSERT INTO Amis VALUES 
(1,5,'2022-04-20 11:10:00','refuse'),
(1,2,'2022-04-20 11:15:00','en attente'),
(2,4,'2022-04-20 11:10:00','en attente'),
(3,5,'2022-04-20 11:10:00','en attente'),
(4,1,'2022-04-20 11:10:00','valide'),
(1,4,'2022-04-21 09:10:00','valide'),
(5,4,'2022-04-20 11:12:00','valide'),
(4,5,'2022-04-21 09:30:00','valide');


INSERT INTO Notification (idEtudiant, idEmetteur, type, dateAjout, statutLecture) VALUES
(1,5,'demande ajout','2022-04-20 11:10:00','oui'),
(1,2,'demande ajout','2022-04-20 11:15:00','non'),
(2,4,'demande ajout','2022-04-20 11:10:00','non'),
(3,5,'demande ajout','2022-04-20 11:10:00','non'),
(4,1,'demande ajout','2022-04-20 11:10:00','oui'),
(5,4,'demande ajout','2022-04-20 11:12:00','oui');

INSERT INTO Conversation(idConv, nom, dateCreation) VALUES
(1,'blabla','2022-05-01 10:00:00');

INSERT INTO Membre VALUES
(1,1),(4,1),(6,1);

INSERT INTO Notification (idEtudiant, type, dateAjout) VALUES
(1,'nouveau groupe', '2022-05-01 10:02:00'),
(4,'nouveau groupe', '2022-05-01 10:03:00'),
(6,'nouveau groupe', '2022-05-01 10:05:00');

INSERT INTO Message(contenu, dateEnvoi, conversation, emetteur) VALUES
('message 1', '2022-05-01 10:06:00', 1, 1);

INSERT INTO Notification (idEtudiant, idEmetteur, type, dateAjout) VALUES
(4,1,'message','2022-05-01 10:06:00'),
(6,1,'message','2022-05-01 10:06:00');

INSERT INTO Message(contenu, dateEnvoi, conversation, emetteur) VALUES
('message 2', '2022-05-01 10:07:00', 1, 6);

INSERT INTO Notification (idEtudiant, idEmetteur, type, dateAjout) VALUES
(1,1,'message','2022-05-01 10:07:00'),
(4,1,'message','2022-05-01 10:07:00');

INSERT INTO Message(contenu, dateEnvoi, conversation, emetteur) VALUES
('message 3', '2022-05-01 10:09:00', 1, 1);

INSERT INTO Notification (idEtudiant, idEmetteur, type, dateAjout) VALUES
(4,1,'message','2022-05-01 10:09:00'),
(6,1,'message','2022-05-01 10:09:00');

INSERT INTO Message(contenu, dateEnvoi, conversation, emetteur) VALUES
('message 4', '2022-05-01 10:12:00', 1, 4);

INSERT INTO Notification (idEtudiant, idEmetteur, type, dateAjout) VALUES
(1,1,'message','2022-05-01 10:12:00'),
(6,1,'message','2022-05-01 10:12:00');

INSERT INTO Message(contenu, dateEnvoi, conversation, emetteur) VALUES
('message 5', '2022-05-01 10:20:00', 1, 4);

INSERT INTO Notification (idEtudiant, idEmetteur, type, dateAjout) VALUES
(1,1,'message','2022-05-01 10:20:00'),
(6,1,'message','2022-05-01 10:20:00');

INSERT INTO Message(contenu, dateEnvoi, conversation, emetteur) VALUES
('message 6', '2022-05-01 10:22:00', 1, 1);

INSERT INTO Notification (idEtudiant, idEmetteur, type, dateAjout) VALUES
(4,1,'message','2022-05-01 10:22:00'),
(6,1,'message','2022-05-01 10:22:00');
