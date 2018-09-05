<?php

    // Form the DB Connection string
    $port = '3306';
    $dbname = 'tyzwprmy_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'tyzwprmy_350';
    $password = 'password123';

    echo "<h1>DB Connection</h1>" .
        "<p>Connect String:  $db_connect, $username, $password</p>";


    // Open the database or die
    try {
        $db = new PDO($db_connect, $username, $password);
        echo '<p><b>Successful Connection</b></p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }

?>
