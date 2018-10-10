
<?php



    // Start the page

    require_once 'views.php';

 

    $site_title = 'BACS 350 - Bear Notes';

    $page_title = 'Objects for Data';

    begin_page($site_title, $page_title);





    // Page Content

    echo '<p><a href="..">Solutions</a></p>';

    echo '<p><a href="milestones.php">Milestones</a></p>';



    

    // Bring in BearNotes logic

    require_once 'BearNotes.php';





    // Render a list of BearNotes

    $BearNotes->show_BearNotes();

    



    // Show the add form

    $BearNotes->add_form();





    // Button to clear

    echo '<a href="delete.php">Reset Subscribers</a>';





    end_page();

?>