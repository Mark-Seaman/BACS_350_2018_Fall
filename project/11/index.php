<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Project 11</title>
        <?php
            include 'header.php';
        ?>
    </head>
    
    <body>
        <header>
            <img src="../Bear3.png" alt="Bear Logo">
            <h1>BACS 350 - Demo Server</h1>
        </header>
        <main>

            <h2>Project 11</h2>
            <hr>
            <?php
            
                require 'db.php';
                require 'select.php';
                require 'test.php';
            ?>
            <hr>
            
            
        </main>

    </body>
    
    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</html>

