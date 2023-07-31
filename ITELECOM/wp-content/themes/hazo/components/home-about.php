<section class="home-about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <div class="home-about__image img-block">
                    <?php echo wp_get_attachment_image(get_sub_field('image'), 'full') ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="section-title font-medium section-title-has-line"><?php the_sub_field('title')?></h2>
                <div class="home-about__desc ws-sgct text-light-grey">
                    <?php the_sub_field('content')?>
                </div>
                <?php  $link = get_sub_field('button'); ?>
                <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_url($link['target']); ?>" class="button button--primary button--shadow">
                    <?php echo $link['title']?>
                </a>
            </div>
        </div>
    </div>
</section>