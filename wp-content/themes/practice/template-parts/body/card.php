<!--start card  -->
<div class="col-12 col-md-8 col-sm-6 m-5">
    <div class="card-background">
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
            <div class="card__img-container">
                <img class="img-fluid" src='<?php echo the_post_thumbnail() ?>' alt="">
            </div>
            <a href='<?php the_permalink(); ?>'>
                <h3>
                    <?php the_title() ?>
                </h3>
            </a>
        </div>
    </div>
    <!--end card  -->
</div>