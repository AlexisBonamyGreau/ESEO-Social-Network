<section class="menu">
    <h3>Vos conversations</h2>
    <?php
    // create a list of all the Conversation where the current user is involved
    $sql = "SELECT Conversation.* FROM Conversation, Membre
    WHERE Conversation.idConv = Membre.conversation
    AND Membre.etudiant = '".$_SESSION['compte']."'";
    $result = $mysqli->query($sql);
    if (!$result) {
        exit($mysqli->error);
    }

    $nb = $result->num_rows;
    if ($nb) {
        $conversations = $result->fetch_all(MYSQLI_ASSOC);
    }

    if ($nb == 0) {
        // if the user has no conversation, display a message
        ?>
        <p class='info'>Vous n'avez pas de conversation</p>
        <?php
    }

    // print the name of each conversation
    for ($i=0; $i<$nb; $i++) {
        ?>
        <div>
            <a href="http://192.168.56.80/pwnd?messages=1&id=<?php echo $conversations[$i]['idConv']; ?>">
                <?php
                echo $conversations[$i]['nom'];
                ?>
            </a>
        </div>
        <?php
    }
    ?>
    <div class="icon">
        <a href="http://192.168.56.80/pwnd?create_conversation=1">
            <img src="assets/plus.png" alt="">
        </a>
    </div>
</section>