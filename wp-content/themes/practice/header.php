<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head() ?>
</head>

<body>


    <header>
        <?php get_template_part('template-parts/header/nav') ?>


    </header>
    <main class="text-light" data-bs-theme="dark">
        <div class="container text-center ">
            <h2 class="display-3 pt-3">
                <?php the_title(); ?>
            </h2>
            <hr>

        </div>