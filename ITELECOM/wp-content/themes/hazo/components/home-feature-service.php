<section class="home-feature-service hz-flickity-button">
    <div class="container">
        <h2 class="section-title section-title-has-line font-medium">
            <?php the_sub_field('title'); ?>
        </h2>


        <?php
        $featured_posts = get_sub_field('service_featured');
        if( $featured_posts ): ?>
        
        <div class="home-feature-service__carousel show-flk" data-flickity='{ "cellAlign": "left", "contain": true,"imagesLoaded": true,"autoPlay": 5000}'>

            <?php foreach( $featured_posts as $post ): 
            setup_postdata($post); ?>
            <?php 
                if(get_field('service_redirect')){
                    $service_link = get_field('service_redirect_link');
                }else{
                    $service_link = get_the_permalink(); 
                }
            ?>

                <div class="col-12 col-md-6 px-4 mb-4">
                    <div class="home-feature-service-item">
                        <a href="<?php echo $service_link; ?>" <?php if(get_field('service_redirect')){ echo 'target="_blank"';}?> class="home-feature-service-item__image img-block overflow-hidden">
                            <img src="<?php hazo_post_thumbnail() ?>" alt="">
                        </a>
                        <div class="home-feature-service-item__content">
                            <p class="home-feature-service-item__title text-big fw-bold">
                                <a href="<?php echo $service_link; ?>" <?php if(get_field('service_redirect')){ echo 'target="_blank"';}?>>
                                    <?php the_title() ?>
                                </a>
                            </p>
                            <div class="home-feature-service-item__desc text-light-grey">
                                <?php echo wp_trim_words( get_field('short_description'), 40, '...' ); ?>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="<?php echo $service_link; ?>" <?php if(get_field('service_redirect')){ echo 'target="_blank"';}?> class="button button--primary">
                                    <?php echo __('Chi tiết','hazo'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        
        </div>

        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

<?php the_sub_field('text')?>
    </div>
</section>