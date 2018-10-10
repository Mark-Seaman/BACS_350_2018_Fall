<?php



    // Add a new record

    function add_BearNotes($db, $title, $date, $body) {



        // Show if insert is successful or not

        try {



            // Add database row

            $query = "INSERT INTO BearNotes (title, date, body) VALUES (:title, :date, :body);";

            $statement = $db->prepare($query);

            $statement->bindValue(':name', $name);

            $statement->bindValue(':email', $email);

            $statement->execute();

            $statement->closeCursor();

            return true;

             

        } catch (PDOException $e) {

            $error_message = $e->getMessage();

            echo "<p>Error: $error_message</p>";

            die();

        }

        

    }





    // Delete all database rows

    function clear_BearNotes($db) {

        

        try {

            $query = "DELETE FROM BearNotes";

            $statement = $db->prepare($query);

            $row_count = $statement->execute();

            return true;

        } catch (PDOException $e) {

            $error_message = $e->getMessage();

            echo "<p>Error: $error_message</p>";

            die();

        }

        

    }





    // Query for all BearNotes

    function query_BearNotes ($db) {



        $query = "SELECT * FROM BearNotes";

        $statement = $db->prepare($query);

        $statement->execute();

        return $statement->fetchAll();



    }



?>