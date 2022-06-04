<div class="page_content">
    <h2>Messages</h2>

    <?php
        if(isset($_POST['message_submit']) && $_POST['message_submit'] == 1 && $_POST['content'] != ''){
            include 'pages/messages_page/send_message.php';
        }

        if (isset($_GET['id'])) { 
            // message box
            ?>
            <form class="message_box" method='post'>
                <input class="message_entry" id="content" name="content" type="text" autocomplete="off" placeholder="Envoyer un message...">
                <button class="item button" name="message_submit" value="1" type="submit">Envoyer</button>
            </form>

            <?php
            // select all the Message from the current Conversation
            $sql = "SELECT m.contenu, m.dateEnvoi, e.nom, e.prenom, e.idEtu
            FROM Message m, Etudiant e
            WHERE m.emetteur = e.idEtu
            AND m.conversation = '".trim($_GET['id'])."'
            ORDER BY m.dateEnvoi DESC";
        
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
                            echo $messages[$i]['prenom']." ".$messages[$i]['nom'];
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