<?php
include 'header.php';
require_once 'db.php';

$port = '3306';
$dbname = 'anielhe3_subscribers';
$db_connect = "mysql:host=localhost:$port;dbname=$dbname";
$username = 'anielhe3';
$password = '3Spookie5Me!';

	
	// Open the database or die
try {
$db = new PDO($db_connect, $username, $password);
echo '<p><b>Successful Connection</b></p>';
} catch (PDOException $e) {
$error_message = $e->getMessage();
echo "<p>Error: $error_message</p>";
}

// Query for all subscribers
$query = "SELECT * FROM subscribers";

$statement = $db->prepare($query);
$statement->execute();

// Loop over all of the subscribers to make a bullet list
$subscribers = $statement->fetchAll();
echo '<ul>';
foreach ($subscribers as $s) {
echo '<li>' . $s['name'] . ', ' . $s['email'] . '</li>';
}
echo '</ul>';

//INSERT INTO subscribers(name, email);
//VALUES ('Jim Smith', 'jim.smith@unco.edu');



?>
<head>
<title>BACS 350 - Project #7</title>
</head>

<ul>
<li><a href="../01/index.php">Home Page</a></li>
<li><a href="https://github.com/Herrera-Daniel">Git Hub Profile</a></li>

</ul>


<?php
    // Include the page end
    include 'footer.php';
?>
