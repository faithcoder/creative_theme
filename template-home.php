<?php get_header();
    /*
        Template Name: Creative Home
    */
?>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

            <?php 

            $args = array(
                'post_type' => 'sliders',
                'posts_per_page' => 3,
            );

            $creative_sliders = new WP_Query($args);
            $i = 0;
            if($creative_sliders->have_posts()):
                while($creative_sliders->have_posts()):
                    $creative_sliders->the_post();
                    $i++;   
            ?>
                <div class="carousel-item <?php if($i == 1){echo 'active';} ?>">
                    <img class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php echo get_field('slider_sub_title');?></h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php the_title(); ?></h1>
                            <a href="<?php echo get_field('slider_btn_one_url');?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo get_field('slider_btn_one_text');?></a>
                            <a href="<?php echo get_field('slider_btn_two_url');?>" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo get_field('slider_btn_two_text');?></a>
                        </div>
                    </div>
                </div>
            <?php 
            endwhile;
            wp_reset_postdata();
        endif;

            ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <?php get_template_part('template-parts/content', 'about'); ?>

    <?php get_template_part('template-parts/content', 'features'); ?>

    <?php get_template_part('template-parts/content', 'service'); ?>

    <?php get_template_part('template-parts/content', 'pricing'); ?>

    <?php get_template_part('template-parts/content', 'quote'); ?>

    <?php get_template_part('template-parts/content', 'testimonial'); ?>

   <?php get_template_part('template-parts/content', 'team'); ?>
   <?php get_template_part('template-parts/content', 'blog'); ?>


    

     

<?php get_footer(); ?>