<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lesson 05</title>
		<link rel="stylesheet" href="review.css">
	</head>
	
	<body>
    
		<header id="page-header">
			<img src="http://bacs200.unco.edu/BACS_200/img/Bear.png" alt="Bear" width="150">
			<h1>Post</h1>
		</header>
        
		<main>
            <aside>
                <h2>Parts of this Page</h2>
                <ul>
                    <li>Form Post</li>
				</ul>
            </aside>
			<hr>

			<h2>SQL</h2>


				<p>By: Jessica Herold</p>


<?php
    // Setup a page title variable
    $page_title = "Form View (to Post Data)";
    // Include the page start
    include 'header.php';
?>
    <h2>UI for form input using POST</h2>
    <form action="subscribe.php" method="post">
        <label>What is your name?</label>
        <input type="text" name="my_name">
        <input type="submit" value="Save"/>
    </form>
<?php
    // Include the page end
    include 'footer.php';
?>
<?php
    $name = filter_input(INPUT_POST, 'my_name');
    // Setup a page title variable
    $page_title = "View to Accept Data";
    // Include the page start
    include 'header.php';
?>
    <h2>My Name is <?php echo $name; ?></h2>
<?php
    // Include the page end
    include 'footer.php';
?>
<p>
</p>

        </main>
		<hr>
        <footer>
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