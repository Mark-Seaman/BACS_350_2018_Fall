<?php

    // Connect to the database
    require_once 'db.php';


    // Pick out the inputs
    $id = filter_input(INPUT_GET, 'id');
    $date = filter_input(INPUT_GET, 'date');
    $text = filter_input(INPUT_GET, 'text');

//    echo "Title: $title, Author: $author";


    // Show if insert is successful or not
    try {
        
        // Add database row
        $query = "INSERT INTO contacts (id, date, text) VALUES (:id, :date, :text);";

        $statement = $db->prepare($query);

        $statement->bindValue(':id', $id);        
        $statement->bindValue(':date', $date);
        $statement->bindValue(':text', $text);

        $statement->execute();
        $statement->closeCursor();
        
        header('Location: index.php');
//        echo '<p><b>Add Book successful</b></p>';
        
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }

?>
