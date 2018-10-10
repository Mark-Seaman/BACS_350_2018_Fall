<?php

    // Connect to the database
    require_once 'db.php';


    // Query for all subscribers
    $query = "SELECT * FROM contacts";

    $statement = $db->prepare($query);
    $statement->execute();

    echo '<h2>contacts in List</h2>';

    // Loop over all of the subscribers to make a bullet list
    $CustomerContact = $statement->fetchAll();
    echo '<ul>';
    foreach ($CustomerContact as $s) {
        echo '<li>' . $s['id'] . ', ' . $s['name'] . ', ' . $s['address'] . ', ' . $s['phone'] . '</li>';
    }
    echo '</ul>';

?>
