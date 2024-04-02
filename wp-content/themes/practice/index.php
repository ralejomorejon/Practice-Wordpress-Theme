<?php get_header() ?>
<!-- Body start -->

<div class="container">

    <div class="row ">

        <h1>Index</h1>
        <div class="col-12 col-md-8 col-sm-12 ms-md-auto col-sm-12 col-md-4 m-md-2 py-3 px-5">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <?php get_template_part('/template-parts/body/card') ?>

                <?php endwhile; endif; ?>


        </div>
        <!-- aside -->
        <?php get_sidebar(); ?>
        <!-- aside end -->
    </div>
    <div class="">
        <?php get_template_part('template-parts/content', 'paginate') ?>
    </div>




</div>

</div>
</div>

<?php wp_footer() ?>
</body>

</html>