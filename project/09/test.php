<?php

            include 'header.php';

            // Decide on the domain and page to test
            $domain = "https://ghaschbacs350.com";
            $page = "https://ghaschbacs350.com/bacs_350/project/09/index.php";

            // Create a link for the page
            echo "<h2>Test Page for </h2>
                <p>Start simple but start now.</p>
                <p>Make sure that the page exists and has valid HTML.";

            echo '<h3>Page Exists</h3>
                <p><a href="' . $page . '">' . $page . '</a></p>';

            // Run your page through the validator
            echo '<h3>Valid HTML</h3>
                <p><a href="http://validator.w3.org">HTML Validator</a></p>';

            include '../footer.php';
        ?>

        <hr>

        <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Funco-bacs.org%2Fbacs_350%2Fdemo%2Findex.php">HTML Validator for bacs 350 demo</a>