<?php get_header() ?>
<!-- Body start -->

<div class="container">

    <div class="row ">
        <h2>Home</h2>

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
                            <p class="mb-0">Category:
                                <?php the_category(',') ?>
                            </p>
                            <p>Date:
                                <?php the_date() ?>
                            </p>
                            <a href=<?php the_permalink(); ?>>
                                <div class="card__img-container"> <img class="img-fluid" src=<?php the_post_thumbnail('300') ?>>
                                </div>

                            </a>

                            <h3 class="text-light">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                    </div>

                <?php endwhile; endif; ?>


        </div>
        <!-- aside -->
        <?php get_sidebar(); ?>
        <!-- aside end -->
        <div class="">
            <?php get_template_part('template-parts/content', 'paginate') ?>
        </div>




    </div>

</div>
</div>

<?php wp_footer() ?>
</body>

</html>