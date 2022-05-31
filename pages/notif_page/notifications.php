<div class="page">
    <?php
        include 'menu.php';
    ?>
    <div class="page_content">
        <h2>Notifications</h2>

        <?php
            $sql = "SELECT n.type, e.nom, e.prenom, n.statutLecture, n.dateAjout
            FROM Notification n, Etudiant e
            WHERE n.idEmetteur = e.idEtu
            AND n.idEtudiant = '".$_SESSION['compte']."'
            ORDER BY n.dateAjout";
        
            $result = $mysqli->query($sql);
            if (!$result) {
                exit($mysqli->error);
            }
        
            $nb = $result->num_rows;
        
            if ($nb) {
                $notifs = $result->fetch_all(MYSQLI_ASSOC);
            }

            for ($i=0; $i<$nb; $i++) {
                if($notifs[$i]['statutLecture'] == 'oui') {
                    ?>
                    <div class='infobox infobox2'>
                        <p class="notif ital">
                            <?php
                            if($notifs[$i]['type'] == 'message') {
                                echo 'Vous avez reçu un message de'.' '.$notifs[$i]['nom'].' '.$notifs[$i]['prenom'];
                            }
                            if($notifs[$i]['type'] == 'demande ajout') {
                                echo $notifs[$i]['nom'].' '.$notifs[$i]['prenom'].' vous a demandé en ami';
                            }
                            if($notifs[$i]['type'] == 'nouveau groupe') {
                                echo 'Vous avez été ajouté dans un groupe';
                            }
                            ?>
                        </p>
                    </div>
                    <?php
                }

                else {
                    ?>
                    <div class='infobox'>
                        <p class="notif">
                            <?php
                            if($notifs[$i]['type'] == 'message') {
                                echo 'Vous avez reçu un message de'.' '.$notifs[$i]['nom'].' '.$notifs[$i]['prenom'];
                            }
                            if($notifs[$i]['type'] == 'demande ajout') {
                                echo $notifs[$i]['nom'].' '.$notifs[$i]['prenom'].' vous a demandé en ami';
                            }
                            if($notifs[$i]['type'] == 'nouveau groupe') {
                                echo 'Vous avez été ajouté dans un groupe';
                            }
                            ?>
                        </p>
                    </div>
                    <?php
                }
                ?>
            <?php
            }
            ?>
    </div>
</div>