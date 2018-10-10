<!DOCTYPE html>
<html>
<title>Lesson 03</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
img { box-shadow: 2px 2px 5px black }
</style>
<body>

<!-- Header -->

    
<h1>Variables</h1>
<p>
    My Name is
    <?php echo "Jessie Herold"; ?>
<p>

<?php $first = "Jessie"; $last = "Herold" ?>
<p>
    My Name is
    <?php echo $first . $last; ?>
<p>
    
<?php

    $page_title = "Project #3";
    include "header.php";
    echo "<h1>" . $page_title . "</h2>";
    echo "<p>Help me ... I'm trapped inside this computer.</p>";
    include "footer.php";

?>
  

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
<div class="w3-bar w3-light-grey">
  <a href="#" class="w3-bar-item w3-button">HEADER</a>
  <a href="#portfolio" class="w3-bar-item w3-button">LINKS</a>
  <a href="#contact" class="w3-bar-item w3-button">Contact</a>
</div>
</div>
<!-- Page content -->
<div class="w3-content w3-padding-large w3-margin-top" id="portfolio">
<h2>Test Links</h2>
    <ul>
        <li><a href="https://unco-bacs.org/bacs_350/index.php">Class demo server</a></li>
        <li><a href="https://seamansguide.com/guide/PhpApps/Index">Class web server</a></li>
        <li><a href="/index.php">My server</a></li>
        <li><a href="../01">Project #1</a></li>
        <li><a href="../02">Project #2</a></li>
        <li><a href="index.php">Project #3 - index.php</a></li>
        <li><a href=".">Project #3 - directory</a></li>
        <li><a href="page.php">Project #3 - page.php</a></li>
        <li><a href="Bear3.png">Project #3 - Bear Logo</a></li>
        <li><a href="styles.css">Project #3 - styles.css</a></li>
    </ul>

  <!-- Images (Portfolio) -->
  <img src="dogs1.jpeg" alt="DOGGIE" class="w3-image" width="1000" height="500">
  <img src="dogs2.jpg" alt="DOGGIE" class="w3-image w3-margin-top" width="500" height="250">
  <img src="dogs3.jpg" alt="DOGGIE" class="w3-image w3-margin-top" width="1000" height="500">
	
  <!-- Contact -->
  <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
    <h3 class="w3-center">Contact</h3>
    <hr>
    <p>HEY!!!!!</p>

    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" required name="Name">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" required name="Email">
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" required name="Message">
      </div>
      <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
    </form><br>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>

  </div>

<!-- End page content -->
</div>

</body>
</html>

