<?php get_header() ?>
<!-- Body start -->

<div class="container-xxl">

    <article class="row px-3 py-5">
        <h4>Archive practices</h4>
        <div class="col-12 mb-4 col-sm-12 col-md-8 m-2 py-0 px-5">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <?php get_template_part('/template-parts/body/card') ?>

                <?php endwhile; endif; ?>


        </div>
        <?php get_sidebar(); ?>
        <div class="">
            <?php get_template_part('template-parts/content', 'paginate') ?>
        </div>

</div>
</main>
<?php get_footer(); ?>

</div>