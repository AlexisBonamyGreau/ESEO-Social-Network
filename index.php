<?php
    include 'core/core.php';

    $_TITRE_PAGE = 'Accueil projet RS ESEO';

    // echo $_POST['connexion_submit'].'</br>';
    // echo $_POST['mail'].'</br>';
    // echo $_POST['password'].'</br>';

    // EVENT SIGN IN
    if(isset($_POST['connexion_submit']) && $_POST['connexion_submit'] == 1){
        include 'pages/log_page/connexion.php';
    }

    // EVENT SIGN UP
    if(isset($_POST['inscription_submit']) && $_POST['inscription_submit'] == 1 && $_POST['password'] == $_POST['password_confirm']){
        include 'pages/log_page/inscription.php';
    }

    // EVENT LOG OUT
    if(isset($_GET['logout']) && $_GET['logout'] == 1) {
        unset($_SESSION['compte']);
        header("Location: ./");
    }
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
        <img src="assets/logo_eseo.png" alt="">
        <nav>
            <a href="http://192.168.56.80/pwnd?home=1" class="cgv">Accueil</a>
            <a href="http://192.168.56.80/pwnd?students=1"  class="cgv">Etudiants</a>
        </nav>
    </header>

    <?php
        if(empty($_SESSION['compte'])){
            // ETUDIANTS
            if($_GET['students'] == 1){
                include 'pages/students_page/students.php';
            }
            else{
                include 'pages/log_page/log.php';
            }

        }else{
            // WELCOME
            if(isset($_GET['welcome']) && $_GET['welcome'] == 1) {
                include 'pages/welcome_page/welcome.php';
            }

            // PROFILE
            if(isset($_GET['profile']) && $_GET['profile'] == 1){
                include 'pages/user_page/profile.php';
            }

            // FRIENDS
            if(isset($_GET['friends']) && $_GET['friends'] == 1){
                include 'pages/friends_page/friends.php';
            }       
            
            // MESSAGES
            if(isset($_GET['messages']) && $_GET['messages'] == 1){
                include 'pages/messages_page/messages.php';
            }

            // NOTIF
            if(isset($_GET['notif']) && $_GET['notif'] == 1){
                include 'pages/notif_page/notifications.php';
            }

            // ACCUEIL
            if(isset($_GET['home']) && $_GET['home'] == 1){
                include 'pages/welcome_page/welcome.php';
            }

            // ETUDIANTS
            if(isset($_GET['students']) && $_GET['students'] == 1){
                include 'pages/students_page/students.php';
            }
        }
        // close database
        $mysqli->close();
    ?>

    <footer>
        <p class="copyright">&copy; 2022 - by Alexis BONAMY - Tous droits réservés</p>
    </footer>
</body>

</html>