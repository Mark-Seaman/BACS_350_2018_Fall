<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lesson 06</title>
		<link rel="stylesheet" href="review.css">
	</head>
	
	<body>
    
		<header id="page-header">
			<img src="http://bacs200.unco.edu/BACS_200/img/Bear.png" alt="Bear" width="150">
			<h1>Lesson 06</h1>
		</header>
        
		<main>
            <aside>
                <h2>Parts of this Page</h2>
                <ul>
                    <li>BACS 350 PROJECT 06</li>
                    <li><a href="../01">My homepage!</a></li>

                    
				</ul>
            </aside>
			<hr>

				<p>By: Jessica Herold</p>

<?php

// Form the DB Connection string
$port = '3306';
$dbname = 'jessigc3_subscribers';
$db_connect = "mysql:host=localhost:$port;dbname=$dbname";
$username = 'jessigc3_bacs350';
$password = 'Busterbrown22!';

echo "<h1>DB Connection</h1>" .
"<p>Connect String: $db_connect, $username, $password</p>";


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


// Add database row
$query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";

$statement = $db->prepare($query);

$statement->bindValue(':name', $name);
$statement->bindValue(':email', $email);

$statement->execute();
$statement->closeCursor();


?>
        </main>
        <footer>
        <hr>
			<h3>Jessie's GitHub</h3> <!-- Change website -->
			<p><a href="https://github.com/Jessiealane22">Jessie's Hub</a></p>
        <hr>
        <hr>
		<h2>Google Search</h2>
			<p>Use this form to search for content on Google.</p>

			<form action="http://google.com/search" target="_blank">
				<input type="search" name="q" size="30" maxlength="255">
				<input type="submit">
			</form>
		<hr>
            <p>By: <b>Jessica Herold</b> , <i> Feb 5 - Greeley, CO</i></p>
            <p>&copy; Copyright 2018 - Jessica, Jessie, Jess</p>
        </footer>
    </body>
</html>