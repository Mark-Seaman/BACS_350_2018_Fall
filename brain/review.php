<?php

    require_once 'views.php'; 
    require_once 'log.php';
    require_once 'files.php';
    require_once 'review_data.php';
    
    
    // Page content

    $notes =  render_reviews_view();

    $content = render_markdown_file('reviews.md') . $notes;
    
    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "Design Review App", 
        "style"      => 'https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css',
        "content"    => $content);

    echo render_page($settings);

?>