<?php
if ($_POST['content'] != '') {
    $query = "SELECT COUNT(*)
    FROM Message";

    $id = $mysqli->query($query);
    $id = $id->fetch_array();
    $id = intval($id[0]);

    // Then, we create a "Message", using the id +1
    $sql = "INSERT INTO Message (idMess, contenu, dateEnvoi, conversation, emetteur)
        VALUES ($id + 1, '".trim($_POST['content'])."', '".date('Y-m-d H:i:s')."', 1, '".trim($_SESSION['compte'])."')";
    if ($mysqli->query($sql) === TRUE) {
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>