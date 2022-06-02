<div class="page_content">
    <h2>Messages</h2>

    <?php
        if (isset($_GET['id'])) { 
            // select all the Message from the current Conversation
            $sql = "SELECT m.contenu, m.dateEnvoi, e.nom, e.prenom, e.idEtu
            FROM Message m, Etudiant e
            WHERE m.emetteur = e.idEtu
            AND m.conversation = '".trim($_GET['id'])."'
            ORDER BY m.dateEnvoi";
        
            $result = $mysqli->query($sql);
            if (!$result) {
                exit($mysqli->error);
            }
        
            $nb = $result->num_rows;
        
            if ($nb) {
                $messages = $result->fetch_all(MYSQLI_ASSOC);
            }

            // display all the messages
            for ($i=0; $i<$nb; $i++) {
                ?>
                <div class="message_date">
                        <?php
                        echo $messages[$i]['dateEnvoi'];
                        ?>
                </div>

                <div class="message">
                    
                    <?php
                    // if the sender is not the current user, display the name of the sender
                    if ($_SESSION['compte'] != $messages[$i]['idEtu']) {
                        ?>
                        <div class="message_sender">
                            <?php
                            echo $messages[$i]['nom']." ".$messages[$i]['prenom'];
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="message_content">
                        <?php
                        echo $messages[$i]['contenu'];
                        ?>
                    </div>

                    <?php
                    // if sender is the current user, display "Moi"
                    if ($_SESSION['compte'] == $messages[$i]['idEtu']) {
                        ?>
                        <div class="message_sender_me">
                            Moi
                        </div>
                        <?php
                    }
                    ?>
                    
                </div>
                <?php
            }
        }
        else {
            echo "Bienvenue dans vos conversations !";
            ?>
            <img src="assets/haussy.jpg" alt="">
            <?php
        }
    ?>
</div>