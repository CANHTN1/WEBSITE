<?php

/**
Template Name: Liên hệ
 */

get_header();
?>
<main>
    <section class="contact-banner bg-cover bg-no-repeat bg-center"
        style="background-image:url(<?php the_field('c1_background')?>)">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-5 d-none d-lg-block">
                </div>
                <div class="col-lg-6">
                    <h1 class="section-title section-title--shadow fw-bold text-center text-uppercase font-ml mb-0">
                        <?php the_title();?></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="contact-inner">
        <section class="contact-content">
            <div class="container">
                <div class="ws-sgct text-light-grey">
                    <?php the_content();?>
                </div>
            </div>
        </section>

        <section class="contact-link">
            <div class="container">
                <?php if(have_rows('c1_link_re')) { ?>
                <div class="row g-4 g-lg-5 g-xl-7">
                    <?php while(have_rows('c1_link_re')) : the_row() ;?>
                    <div class="col-md-6">
                        <?php $link = get_sub_field('link'); ?>
                        <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_url($link['target']); ?>" class="contact-link-item overflow-hidden d-block position-relative img-block">
                            <?php echo wp_get_attachment_image(get_sub_field('image'), 'full') ?>
                            <p class="contact-link-item__title position-absolute text-center fw-bold"><?php the_sub_field('title')?></p>
                        </a>
                    </div>
                    <?php endwhile;?>
                </div>
                <?php }?>
            </div>
        </section>
    </div>

</main>

<?php
get_footer(); 