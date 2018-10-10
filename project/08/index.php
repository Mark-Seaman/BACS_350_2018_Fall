

<?php
    // Setup a page title variable
    $page_title = "Project 10";
    // Include the page start
    include 'header.php';
    // Include the main page content
    echo '<h1>MAIN TEXT</h1><p>BODY</p>';
    // Include the page end
    
	
    // Decide on the domain and page to test
    $domain = "https://unco-bacs.org";
    $page = "$domain/bacs_350/demo/index.php";

    // Create a link for the page
    echo "<h2>Test Page for $page</h2>
        <p>Start simple but start now.</p>
        <p>Project 10 Shenanigans";

    echo '<h3>Page Exists</h3>
        <p><a href="' . $page . '">' . $page . '</a></p>';

    // Run your page through the validator
    echo '<h3>Valid HTML</h3>
        <p><a href="http://validator.w3.org">HTML Validator</a></p>';
        
     echo '<h3>Valid HTML</h3>
        <p><a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Funco-bacs.org%2Fbacs_350%2Fdemo%2Findex.php">HTML Validator</a></p>';
		
		
$domain = "unco-bacs.org";
    echo "<p>domain = $domain</p>";


$page = "$domain/bacs_350/demo/index.php";
echo "<p>page = $page</p>";


$validator = "https://validator.w3.org/nu/";
echo "<p>validator = $validator</p>";

$href = "$validator?doc=$page";
echo "<p>href = $href</p>";



 echo '<h3>Valid HTML</h3>
 <p><a href="$href">HTML Validator</a></p>';
/*
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
	*/
	
	include 'db.php';
	include 'select.php';
	include 'add.php';
	include 'add_form.php';
	?>

	
<?php
	include 'footer.php';
 ?>

