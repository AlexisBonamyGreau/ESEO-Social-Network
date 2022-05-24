<?php
    include 'core.php';

    $_TITRE_PAGE = 'Accueil projet RS ESEO';

    // echo $_POST['connexion_submit'].'</br>';
    // echo $_POST['mail'].'</br>';
    // echo $_POST['password'].'</br>';

    // EVENT SIGN IN
    if(isset($_POST['connexion_submit']) && $_POST['connexion_submit'] == 1){
        include 'connexion.php';
    }

    // EVENT SIGN UP
    if(isset($_POST['inscription_submit']) && $_POST['inscription_submit'] == 1){
        include 'inscription.php';
    }

    // EVENT LOG OUT
    if($_GET['logout'] == 1) {
        unset($_SESSION['compte']);
        header("Location: ./");
    }

    // close database
    $mysqli->close();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS ESEO - Se connecter</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
</head>

<body>
    <header>
        <img src="logo_eseo.png" alt="">
        <nav>
            <li>Accueil</li>
            <li>Etudiants</li>
        </nav>
    </header>

    <h1>Bienvenue sur RS ESEO</h1>

    <div class="corps">

        <?php
            if(empty($_SESSION['compte'])){
        ?>
        <form class="box connexion" method="post">
            <h2 class="section-title">
                Connexion
            </h2>
            <input class='item' id="mail" name="mail" type="text" placeholder="Email">
            <input class='item' name="password" type="password" id="defaultLoginFormPassword" placeholder="Mot de Passe">
            <button class="item button" name="connexion_submit" value="1" type="submit">Connexion</button>
            <a href="" class="cgv">Mot de passe perdu</a>
        </form>

        <form class="box inscription" method='post'>
            <h2 class="section-title">
                Inscription
            </h2>
            <input class="item" id="nom" name="nom" type="text" placeholder="Nom">
            <input class="item" id="prenom" name="prenom" type="text" placeholder="Prenom">
            <select class="item" name="annee" id="annee-select">
                <option value="0">Choisir une année...</option>
                <option value="1">E1</option>
                <option value="2">E2</option>
                <option value="3">E3</option>
                <option value="4">E4</option>
                <option value="5">E5</option>
            </select>
            <input class="item" id="mail" name="mail" type="text" placeholder="Email">
            <input class="item" name="password" type="password" id="defaultLoginFormPassword" placeholder="Mot de passe">
            <input class="item" name="password" type="password" id="defaultLoginFormPassword" placeholder="Confirmez le mot de passe">
            <button class="item button" name="inscription_submit" value="1" type="submit">Inscription</button>
        </form>
        </div>
            <?php
                }else{
            ?>
            <div>
                <h2>Vous êtes connecté !</h2>
                <a href="http://192.168.56.80/pwnd?logout=1">Se déconnecter</a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

    <footer>
        <p class="copyright">&copy; 2022 - by Alexis BONAMY - Tous droits réservés</p>
    </footer>
</body>

</html>