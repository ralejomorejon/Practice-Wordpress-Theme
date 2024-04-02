<div class="aside m-sm-3 p-3 col-12 col-sm-6 ms-md-auto col-md-2 shadow-sm ">
    <?php if (is_active_sidebar('widget-right')): ?>
        <?php dynamic_sidebar('widget-right'); ?>
    <?php else: ?>
        <div>
            <h4>Sponsors</h4>
            <hr>
            <img class="img-fluid rounded-pill" src=<?php echo get_template_directory_uri() . "/assets/images/asideImg.jpg" ?> alt="">
            <ul class="text-center p-3">
                <li>Option</li>
                <li>Option</li>
                <li>Options</li>
            </ul>
        <?php endif ?>

    </div>