<?php get_header() ?>
<!-- Body start -->

<div class="container-xxl">

    <article class="row px-3 py-5">
        <div class="col-12 mb-4 col-sm-12 col-md-8 m-2 py-0 px-5">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <div>
                        <h3 href="">
                            <?php the_content(); ?>
                        </h3>
                    </div>
                <?php endwhile; endif; ?>


        </div>

        <div class="">
            <?php get_template_part('template-parts/content', 'paginate') ?>
        </div>

</div>
</main>
<?php get_footer(); ?>

</div>