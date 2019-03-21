<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
    <title> <?php bloginfo('name'); ?> </title>
<?php wp_head() ?>
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="nav-block-header">
                <div class="btn-block">
                    <button class="main-btn btn-open">
                        <i class="fas fa-bars"></i>
                    </button>
                    <button class="main-btn btn-closed">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <nav id="nav" class="nav none">
                    <ul class="menu">
    <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>

                    </ul>
                </nav>
            </div>
           <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="main_logo">
           </a>
           <ul class="social">
                <li>
                    <a href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com/">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-vr-cardboard"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.google.com/">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.gmail.com/">
                        <i class="fas fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
