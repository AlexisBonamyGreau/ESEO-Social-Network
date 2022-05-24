<?php
    $sql = "SELECT idEtu
    FROM Etudiant
    WHERE email = '".trim($_POST['mail'])."'
    AND motDePasse = '".trim($_POST['password'])."'";

    $result = $mysqli->query($sql);
    if (!$result) {
        exit($mysqli->error);
    }

    if($_POST['password'] == 'network' && isset($row['idEtu'])){
        $_SESSION['compte'] = true;
    }

    $nb = $result->num_rows;

    if ($nb) {
        //récupération de l’id de l’étudiant
        $row = $result->fetch_assoc();
        $_SESSION['compte'] = $row['idEtu'];
    }
?>