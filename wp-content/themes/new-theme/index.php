<?php get_header() ?>
<!-- Body start -->

<div class="container-fluid">

    <div class="row justify-content-center">
        <!--start card  -->
        <div class="col-12 col-md-3 col-sm-6 m-5">
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
                <img class="img-fluid" src=<?php echo get_template_directory_uri() . "/assets/images/img1.jpeg" ?>
                    alt="">
                <a href="single">
                    <h3>
                        <?php the_title() ?>
                    </h3>
                </a>
            </div>
            <!--end card  -->
        </div>
        <!--start card  -->
        <div class="col-12 col-md-3 col-sm-6 m-5">
            <div class="card-body blog-card">
                <p class="mb-0">Author:</p>
                <p class="mb-0">Category:</p>
                <p>Date:</p>
                <img class="img-fluid" src=<?php echo the_post_thumbnail() ?> alt="">
                <a href="single">
                    <h3>Title</h3>
                </a>
            </div>
            <!--end card  -->
        </div>
        <div class="aside m-sm-3 p-3 col-sm-6 shadow-sm col-md-3 offset-md-2 col-12 border rounded-3">
            <div>
                <h4>Sponsors</h4>
                <img class="img-fluid" src=<?php echo get_template_directory_uri() . "/assets/images/asideImg.jpg" ?>
                    alt="">
                <ul class="text-center">
                    <li>Option</li>
                    <li>Option</li>
                    <li>Option</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php wp_footer() ?>
</body>

</html>