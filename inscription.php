<?php
    $sql = "SELECT idEtu
    FROM Etudiant
    WHERE email = '".trim($_POST['mail'])."'
    AND motDePasse = '".trim($_POST['password'])."'";

    $result = $mysqli->query($sql);
    if (!$result) {
        exit($mysqli->error);
    }

    $query = "SELECT COUNT(*)
    FROM Etudiant";
    $id = $mysqli->query($query);
    $id = $id->fetch_array();
    $id = intval($id[0]);
    $sql = "INSERT INTO Etudiant (idEtu, nom, prenom, anneeScolaire, email, motDePasse)
        VALUES ($id + 1, '".trim($_POST['nom'])."', '".trim($_POST['prenom'])."', '".trim($_POST['annee'])."', '".trim($_POST['mail'])."', '".trim($_POST['password'])."')";
    if ($mysqli->query($sql) === TRUE) {
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
?>