<section class="home-service">
    <div class="container">

        <?php $link = get_sub_field('link');

        $linkurl = $link['url'];
        $name = $link['title']; ?>
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="section-title section-title-has-line font-medium mb-0">
                <?php the_sub_field('title'); ?>
            </h2>
            <a href="<?php echo esc_url($linkurl) ?>" class="section-link d-none d-xl-inline">
                <?php echo $name; ?>
            </a>
        </div>

         <?php
        $featured_posts = get_sub_field('service_featured');
        if( $featured_posts ): ?>

        <div class="home-service__carousel hz-flickity-button mt-5 show-flk">

            <?php foreach( $featured_posts as $post ): 
            setup_postdata($post); ?>
            <?php 
                if(get_field('service_redirect')){
                    $service_link = get_field('service_redirect_link');
                }else{
                    $service_link = get_the_permalink(); 
                }
            ?>
                <div class="col-6 col-md-4 col-xl-20p px-3 px-md-4 my-4">
                    <div class="home-service-item">
                        <div class="home-service-item__icon mx-auto d-flex align-items-center justify-content-center rounded-circle">
                            <?php $svgImg = get_field('icon'); ?>
                            <?php echo file_get_contents( $svgImg ); ?>
                        </div>
                        <p class="home-service-item__title fw-bold text--medium">
                            <a href="<?php echo $service_link; ?>" <?php if(get_field('service_redirect')){ echo 'target="_blank"';}?>>
                                <?php the_title() ?>
                            </a>
                        </p>
                        <div class="home-service-item__desc text-justify">
                            <?php the_field('short_description'); ?>
                        </div>
                        <a href="<?php echo $service_link; ?>" <?php if(get_field('service_redirect')){ echo 'target="_blank"';}?> class="button button--primary button--shadow">
                            <?php echo __('Chi tiết','hazo'); ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
           
        </div>


        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <div class="d-flex d-xl-none justify-content-center pt-4">
            <a href="<?php echo esc_url($linkurl) ?>" class="button button--primary"><?php echo $name; ?></a>
        </div>
    </div>
</section>