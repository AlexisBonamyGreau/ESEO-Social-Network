<div class="page">
    <?php
        if(!empty($_SESSION['compte'])){
            include 'menu.php';
        }
    ?>
    <div class="page_content">
        <h2>Etudiants</h2>

        <?php
            $sql = "SELECT nom, prenom
            FROM Etudiant
            ORDER BY nom, prenom";
        
            $result = $mysqli->query($sql);
            if (!$result) {
                exit($mysqli->error);
            }
        
            $nb = $result->num_rows;
        
            if ($nb) {
                $notifs = $result->fetch_all(MYSQLI_ASSOC);
            }

            for ($i=0; $i<$nb; $i++) {
                ?>
                <div class='infobox'>
                    <p class='students'>
                        <?php
                        echo $notifs[$i]['nom'].' ';
                        echo $notifs[$i]['prenom'];
                        ?>
                    </p>
                </div>
                <?php
            }
        ?>
    </div>
</div>