 <!-- Team Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">

            <?php 

            $args = array(
                'post_type' => 'creative_team',
                'posts_per_page' => 6,
            );

            $query = new WP_Query($args);

            if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();

                        $team_designation = get_field('team_designation');
                        $team_social_info = get_field('team_social_info');
            ?>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <?php if(has_post_thumbnail()): ?>
                            <img class="img-fluid w-100" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <?php endif;?>
                            <div class="team-social">
                                <?php 
                                    if($team_social_info):
                                        foreach($team_social_info as $team_social):
                                            ?>
    
                                            <?php if($team_social['social_url'] && $team_social['social_icon']): ?>
    
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?php echo $team_social['social_url'];?>">
                                            <i class="<?php echo $team_social['social_icon']; ?> fw-normal"></i></a>
                                            
                                            <?php endif;?>
                                            
                                            
                                            <?php
    
                                            endforeach;
                                    endif;
                                ?>
                                
                                
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary"><?php the_title(); ?></h4>
                            <p class="text-uppercase m-0"><?php echo $team_designation; ?></p>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata(  );
            endif;
            ?>
                
            </div>
        </div>
    </div>
    <!-- Team End -->