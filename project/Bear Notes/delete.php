<?php

       

    // Prevent caching

    header("Pragma: no-cache");

    header("Expires: 0");

    header("Cache-Control: no-store, no-cache, must-revalidate");





    // Connect to the database

    require_once 'BearNotes.php';





    // Delete all records

    if ($BearNotes->clear()) {

//        echo '<p><b>Clear successful</b>&nbsp;<a href="index.php">BearNotes</a></p>';

//        $this->query();

          header("Location: index.php");

    }



?>