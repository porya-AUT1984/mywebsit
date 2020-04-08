<!DOCTYPE html>
<html<?php language_attributes()?>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/grid.css" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/queries.css" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/unslider.css" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Virtual technologiess</title>
    </head>

    <body>

        <header>

            <div class="mySlider">

                <ul>
                    <li><img src="<?php bloginfo('template_directory'); ?>/css/cssimg/img3.jpg" alt=""></li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/css/cssimg/img4.jpg" alt=""></li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/css/cssimg/img5.jpg" alt=""></li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/css/cssimg/img6.jpg" alt=""></li>
                </ul>

            </div>


            <div class="logo">

                <a href="index.html">
        <img src="img/logo1.png" alt="">
        </a>
            </div>

            <nav class="navigation">

                <ul>
                    <?php wp_nav_menu(array('theme_location' => 'primary' )) ;?>
                </ul>

            </nav>


            <div class="tagline">

                <p>I DESIGN AND DEVELOP USER FRIENDLY WEBSITES</p>
            </div>

            <div class="home-btn">
                <a href="contact.html">GET YOUR WEBSITE</a>
            </div>

        </header>
