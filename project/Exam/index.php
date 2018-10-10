 <?php

    // Start the page
    $page_title = 'BACS 350 - Application Exam - Contacts App';
    require 'header.php';

    echo '<h1>My Contact List</h1>';

    // Connect to the database
    require 'db.php';


    // Show the list after the insert
    require 'select.php';


    // Add a record
    echo '<a href="insert.php">Add a Contact</a>';

    echo '<form action="insert.php" method="get">
        
        <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
        <p><label>Address:</label> &nbsp; <input type="text" name="address"></p>
        <p><label>Phone:</label> &nbsp; <input type="text" name="phone"></p>
        
        <p><input type="submit" value="Add Contact"/></p>
        
    </form>';

    echo '<h1>Exam Notes</h1>';

    // Display the To Do list during development
    require 'todo.html';

    // Show links for page testing
    require 'test.php';


    // End the page
    require_once '../../footer.php';

?>