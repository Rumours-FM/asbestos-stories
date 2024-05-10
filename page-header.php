<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Cedarville+Cursive&family=League+Spartan:wght@100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tangerine:wght@400;700&family=Zeyada&display=swap" rel="stylesheet">
<title><?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
</title>

<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>
<body>

    <header class="container-fluid containerheader">
        <nav class="navbar navbar-expand-md navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><img alt="asbestos stories logo" src="http://170.187.231.66/~mesh20/sub1/wp-content/themes/asbestos_stories/images/AsbestosStories_Logo_2024_White.svg"></a>
        
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img alt="home button" src="http://170.187.231.66/~mesh20/sub1/wp-content/themes/asbestos_stories/images/home.svg"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Stories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Learn More</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img alt="search" src="http://170.187.231.66/~mesh20/sub1/wp-content/themes/asbestos_stories/images/search.svg"></a>
                </li>
            </ul>
            </div>
        </nav>

    <div class="row bg1">
    <div class="col-md-6 tag">
        <h1>About <b class="asbestos">Us</b></h1>
        <p>Who are we and what do we intend to achieve?</p>

    </div> <!-- container -->
    <div class="container img-fluid col-md-4 heropadding">
        <img class="heroimage img-fluid" alt="men standing in frront of truck at Wittenoom" src="http://170.187.231.66/~mesh20/sub1/wp-content/themes/asbestos_stories/images/heroimage2.png">
    </div>
</div>
<?php wp_head(); ?> 
    </header>