
    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
            </div>
            <div class="row g-0">

            <?php 
            
                $args = array(
                    'post_type' => 'creative_prices',
                    'posts_per_page' => 3,
                );
                $i = 0;

                $creative_price_query = new WP_Query($args);
                if($creative_price_query->have_posts()):
                    while($creative_price_query->have_posts()):
                        $creative_price_query->the_post();
                        $i++;
                            
                        $price_features = get_field('price_features');
                    
            ?>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="<?php if(($i % 2) == 0){echo "bg-white shadow position-relative";}else{echo "bg-light";} ?> rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1"><?php the_title(); ?></h4>
                            <small class="text-uppercase"><?php echo get_field('price_sub_headline');?></small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo get_field('price_currency'); ?></small><?php echo get_field('price_amount');?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/<?php echo get_field('subscription_plan'); ?> </small>
                            </h1>
                           
                           <?php 
                                foreach($price_features as $feature){
                           ?>
                            
                            <div class="d-flex justify-content-between mb-3">
                                <span>
                                    <?php echo $feature['price_feature_title']; ?>
                                </span>
                                <i class="<?php 
                                    if($feature['price_active']['value'] == 'show'){
                                        echo 'fa fa-check text-primary';
                                    }else{
                                        echo 'fa fa-times text-danger';
                                    }
                                ?> pt-1"></i>
                            </div>
                            
                            <?php 
                                 }
                            ?>
                            <a href="<?php echo get_field('price_btn_url'); ?>" class="btn btn-primary py-2 px-4 mt-4"><?php echo get_field('price_btn_text'); ?> </a>
                        </div>
                    </div>
                </div>

                <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
                
                ?>
                
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->