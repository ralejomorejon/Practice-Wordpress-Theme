<nav class="navbar navbar-expand-lg border-bottom border-light" data-bs-theme="dark">
    <div class="container-fluid">
        <img src=<?php echo get_template_directory_uri() . "/assets/images/bslogo.png" ?> alt=""
            class="img-fluid d.inline-block mr-3" width="50">
        <a class="navbar-brand" href="localhost/wordpress">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'navbar',
                    'container' => 'ul',
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-nav  mb-2 mb-lg-0',
                )
            );
            ?>
            <a href="" class="btn btn-danger mx-2">
                <?php echo apply_filters('hook_change_btn_text', 'Get Started Today') ?>
            </a>
            <?php do_action('hook_add_btn') ?>

        </div>
    </div>
</nav>