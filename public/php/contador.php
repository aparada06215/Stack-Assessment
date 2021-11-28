<?php

    if (array_key_exists('id', $_POST))    
    {
        if ( isset($_POST["id"]) ) {
            $id = $_POST["id"];           
        } else {
            echo 'There is no id value POST';
        }
    }

    $mysqli = new mysqli("127.0.0.1", "root", "", "stackassessmentdb");

    // incremento en la db el contador
    $query = $mysqli->query("UPDATE counter SET visitors=visitors + 1");    
    $result = $mysqli->query("SELECT * FROM counter");
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    $mysqli->close();    
    
    echo $row['visitors'];
?>