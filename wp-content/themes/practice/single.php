<?php get_header() ?>
<!-- Body start -->

<div class="container-xxl">

    <article class="row px-3 py-5">
        <h2>Single</h2>
        <div class="col-12 mb-4 col-sm-12 col-md-8 m-2 py-0 px-5">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <!--start card  -->
                    <div class="card-background">
                        <div class="card-body my-5 p-3 blog-card text-light shadow-sm">


                            <h3 class="pt-2 text-light">
                                <?php the_title(); ?>
                            </h3>

                            <p class="mb-0">Author:
                                <strong>
                                    <?php the_author(); ?>
                                </strong>
                            </p>
                            <p class="mb-0">Category: <strong>
                                    <?php the_category('/'); ?>
                                </strong>
                            </p>
                            <p>Date:
                                <strong>
                                    <?php the_date(); ?>
                                </strong>
                            </p>
                            <p>
                                <?php the_taxonomies() ?>
                            </p>
                            <div class="card__img-container"><img class="img-fluid my-2" alt="" src=<?php the_post_thumbnail() ?> /></div>

                            <div class="">
                                <?php the_content(); ?>
                            </div>

                        </div>
                    </div>
                    <!--end card  -->
                <?php endwhile; endif; ?>

        </div>
        <!-- aside -->
        <?php get_template_part('template-parts/body/aside') ?>
        <!-- aside end -->


</div>
</main>
<?php get_footer(); ?>

</div>