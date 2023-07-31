<div class="service-item">
    <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
        <img src="<?php the_field('icon')?>" alt="service-icon">
    </div>
    <p class="service-item__title text-center fw-bold section-title--small text-uppercase">
        <?php the_title(); ?>
    </p>
    <div class="service-item__content">
        <div class="service-item__content-inner">
            <p class="service-item__desc">
                <?php the_field('short_description') ?>
            </p>
            <?php 
                if(get_field('service_redirect')){
                    $service_link = get_field('service_redirect_link');
                }else{
                    $service_link = get_the_permalink(); 
                }
            ?>
            <a href="<?php echo $service_link ?>" <?php if(get_field('service_redirect')){ echo 'target="_blank"';}?> class="button button--shadow button--center fw-bold font-ml">
                <?php echo __('Chi tiết','hazo'); ?>
            </a>
        </div>
        <div class="service-item__image-wrapper">
            <div class="service-item__image img-block">
                <img src="<?php hazo_post_thumbnail(); ?>" alt="">
            </div>
        </div>
    </div>
</div>