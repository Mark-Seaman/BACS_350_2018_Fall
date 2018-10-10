 <?php

    // Start the page
    $page_title = 'Project 11 Subscribers App';
    require 'header.php';

    echo '<h1>Subscribers , ID, Date, Text </h1>';

    // Connect to the database
    require 'db.php';


    // Show the list after the insert
    require 'select.php';


    // Add a record
    echo '<a href="insert.php">Add a record</a>';

    echo '<form action="insert.php" method="get">
        
        <p><label>ID:</label> &nbsp; <input type="text" name="ID"></p>
        <p><label>Date:</label> &nbsp; <input type="text" name="Date"></p>
        <p><label>Text:</label> &nbsp; <input type="text" name="Text"></p>
        
        <p><input type="submit" value="Add a Record"/></p>
        
    </form>';

    echo '<h1>Links</h1>';



    // Show links for page testing
    require 'test.php';


    // End the page
    require_once '../../footer.php';

?>