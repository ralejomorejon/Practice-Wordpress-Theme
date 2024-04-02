<?php get_header() ?>
<!-- Body start -->

<div class="container">

    <div class="row ">

        <h1>Taxonomy page</h1>
        <div class="col-12 col-md-8 col-sm-12 ms-md-auto col-sm-12 col-md-4 m-md-2 py-3 px-5">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <div class="card-background mb-5">
                        <div class="card-body blog-card ">
                            <p class="mb-0">Author:
                                <?php the_author() ?>
                            </p>
                            <p class="mb-0">
                                <?php the_taxonomies() ?>

                            </p>
                            <p>Date:
                                <?php the_date() ?>
                            </p>
                            <a href=<?php the_permalink(); ?>>
                                <div class="card__img-container"> <img class="img-fluid" src=<?php the_post_thumbnail('300') ?>>
                                </div>

                            </a>

                            <h3 class="text-light">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                    </div>

                <?php endwhile; endif; ?>


        </div>
        <div class="aside m-sm-3 p-3 col-12 col-sm-6 ms-md-auto col-md-2 shadow-sm border border-2 rounded-3">
            <div>
                <h4>Sponsors</h4>
                <img class="img-fluid" src=<?php echo get_template_directory_uri() . "/assets/images/asideImg.jpg" ?>
                    alt="">
                <ul class="text-center p-3">
                    <li>Option</li>
                    <li>Option</li>
                    <li>Optionss</li>
                </ul>
            </div>
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