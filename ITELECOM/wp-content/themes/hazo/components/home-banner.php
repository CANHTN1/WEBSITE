<section class="home-banner flickity-before-show " data-flickity='{ "cellAlign": "left", "wrapAround": true,"imagesLoaded": true,"pageDots":false,"autoPlay": 4500,"pauseAutoPlayOnHover":false}'>
    <?php if(have_rows('banner')) {?>
        <?php while(have_rows('banner')) : the_row();?>
            <a href="<?php the_sub_field('banner_link')?>" class="home-banner__cell w-100 d-block">
                <picture>
                    <source media="(max-width:1023px )" srcset="<?php the_sub_field('banner_mobile')?>">
                    <?php echo wp_get_attachment_image(get_sub_field('banner_desktop'), 'full') ?>
                </picture>
            </a>
        <?php endwhile;?>
    <?php }?>
</section>