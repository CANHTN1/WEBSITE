<section class="home-partner">
    <div class="container">
        <h2 class="section-title section-title-has-line font-medium"><?php the_sub_field('title')?></h2>
    </div>
    <div class="container">
        <?php if(have_rows('partner_re')) { ?>
        <div class="row g-4 g-md-5 mt-4 mt-md-5 scroll-snap-md">
            <?php $i=0; while(have_rows('partner_re')) : the_row(); $i++;?>
                <div class="col-7 col-md-5 col-lg-20p">
                    <a href="<?php echo check_link(get_sub_field('link'))?>" <?php if(get_sub_field('link')) echo 'target="_blank"'?> class="home-partner-item img-block">
                        <?php echo wp_get_attachment_image(get_sub_field('image'), 'full') ?>
                    </a>
                </div>
            <?php endwhile;?>
        </div>
        <?php } ?>
        <div class="d-flex justify-content-center mt-5">
            <?php  $link = get_sub_field('partners_link') ;?>
            <?php if($link) { ?>
            <a href="<?php echo esc_url($link['url']); ?>" class="button button--primary"
                target="_blank"><?php echo $link['title'] ?></a>
            <?php } ?>
        </div>
    </div>
</section>