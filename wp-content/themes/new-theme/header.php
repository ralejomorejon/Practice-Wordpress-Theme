<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head() ?>
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg border-bottom border-light" data-bs-theme="dark">
            <div class="container-fluid">
                <img src=<?php echo get_template_directory_uri() . "/assets/images/bslogo.png" ?> alt=""
                    class="img-fluid d.inline-block mr-3" width="50">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'navbar',
                            'container' => 'ul',
                            'theme_location' => 'navbar',
                            'menu_class' => 'navbar-nav  mb-2 mb-lg-0',

                        )
                    );
                    ?>




                </div>
            </div>
        </nav>

    </header>
    <main class="text-light" data-bs-theme="dark">
        <div class="container text-center ">
            <h2 class="display-3 pt-3">
                <?php the_title(); ?>
            </h2>
            <hr>

        </div>