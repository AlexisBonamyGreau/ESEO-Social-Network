<?php
    // First, we obtain the last "Etudiant" id
    $query = "SELECT COUNT(*)
    FROM Etudiant";

    $id = $mysqli->query($query);
    $id = $id->fetch_array();
    $id = intval($id[0]);

    // Then, we create an "Etudiant", using the id +1
    $sql = "INSERT INTO Etudiant (idEtu, nom, prenom, anneeScolaire, email, motDePasse)
        VALUES ($id + 1, '".trim($_POST['nom'])."', '".trim($_POST['prenom'])."', '".trim($_POST['annee'])."', '".trim($_POST['mail'])."', '".trim($_POST['password'])."')";
    if ($mysqli->query($sql) === TRUE) {
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
?>