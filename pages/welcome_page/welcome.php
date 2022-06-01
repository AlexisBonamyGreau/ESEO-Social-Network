<div class="page">
    <?php
        include 'menu.php';
    ?>
    <div class="page_content">
        <h2>Votre fil d'actualités</h2>

        <?php
            $sql = "SELECT a.contenu, a.dateCreation, e.nom, e.prenom
            FROM Article a, Etudiant e
            WHERE a.auteur = e.idEtu
            AND a.visibilite = 'public'
            ORDER BY a.dateCreation";
        
            $result = $mysqli->query($sql);
            if (!$result) {
                exit($mysqli->error);
            }
        
            $nb = $result->num_rows;
        
            if ($nb) {
                $notifs = $result->fetch_all(MYSQLI_ASSOC);
            }

            if ($nb == 0) {
                echo "Vous n'avez aucune notification...";
            }

            for ($i=0; $i<$nb; $i++) {
                ?>
                <p class="infos">
                    <?php
                    echo $notifs[$i]['prenom'].' '.$notifs[$i]['nom'].' - '.$notifs[$i]['dateCreation'];
                    ?>
                </p>
                <div class='infobox infobox3'>
                    <p class="article">
                        <?php
                        echo $notifs[$i]['contenu'].'<br>';
                        ?>
                    </p>
                </div>
            <?php
            }
            ?>
    </div>
</div>