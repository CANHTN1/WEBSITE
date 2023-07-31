<?php

/**
Template Name: Chi tiết liên hệ
 */

get_header();
?>
<main>
    <section class="contact-banner bg-cover bg-no-repeat bg-center"
        style="background-image:url(<?php the_field('c2_background')?>)">
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

    <div class="contact-it">
        <div class="container">
            <div class="contact-it-inner position-relative">
                <h2 class="section-title--small contact-it-title text-center font-medium"><?php the_field('c2_title')?></h2>
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="ws-sgct">
                            <?php the_field('c2_content')?>
                        </div>
                        <div class="contact-it-info">
                            <?php if(have_rows('c2_info_re')) { ?>
                                <ul class="list-unstyled mb-0">
                                    <?php while(have_rows('c2_info_re')) : the_row() ;?>
                                        <li>
                                            <span><?php echo svg(get_sub_field('icon'))?></span>
                                            <div class="contact-it-info__content">
                                                <?php the_sub_field('info')?>
                                            </div>
                                        </li>
                                    <?php endwhile;?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <?php $form = get_field('c2_form'); if($form) { ?>
                                <?php echo do_shortcode('[cf7form cf7key="'. $form->post_name .'"]')?>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(get_field('c2_maps')) { ?>
            <div class="contact-it-iframe position-relative">
                <?php the_field('c2_maps')?>
            </div>
        <?php } ?>
    </div>

</main>

<?php
get_footer(); 