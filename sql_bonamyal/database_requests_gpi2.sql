-- REQUETE 1 : Tous les E3e
SELECT
    *
FROM
    Etudiant e
WHERE
    e.appartient = 3;


-- REQUETE 2 : Liste des articles publics (prénom, nom, annee de l'auteur par ordre alpha)
SELECT
    a.*,
    e.prenom,
    e.nom,
    s.nom
FROM
    Article a,
    Etudiant e,
    AnneeScolaire s
WHERE
    a.auteur = e.id AND e.appartient = s.idAnneeScolaire AND a.visibilite = 'public'
ORDER BY
    e.nom,
    e.prenom;


-- REQUETE 3 : Liste des articles (prénom, nom, annee, date, visib par ordre auteur croissant et date décroissante)
SELECT
    e.prenom,
    e.nom,
    s.nom,
    a.dateCreation,
    a.visibilite
FROM
    Article a,
    Etudiant e,
    AnneeScolaire s
WHERE
    a.auteur = e.id AND e.appartient = s.idAnneeScolaire
ORDER BY
    e.nom ASC,
    a.dateCreation DESC;


-- REQUETE 4 : Nb d'étudiants enregistrés
SELECT
    COUNT(*)
FROM
    Etudiant;


-- REQUETE 5 : Liste ami etudiant 4 + date ajout (ordre date croissant)
SELECT
    e.nom,
    e.prenom,
    a.dateAjout
FROM
    Amis a,
    Etudiant e
WHERE
    a.ami2 = e.id AND a.ami1 = 4
ORDER BY
    a.dateAjout;


-- REQUETE 6 : Liste notif reçues par etudiant 1 par type puis date croissante
SELECT
    *
FROM
    Notification n
WHERE
    n.receveur = 1
ORDER BY
    n.type,
    n.dateAjout;


-- REQUETE 7 : Afficher messages conversation 1, ordre chrono (date, contenu, prénom émetteur)
SELECT
    m.dateEnvoi,
    m.contenu,
    e.prenom
FROM
    Conversation c,
    Message m,
    Etudiant e
WHERE
    c.id = 1 AND m.conversation = 1 AND m.emetteur = e.id
ORDER BY
    m.dateEnvoi;