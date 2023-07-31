<?php

/**
Template Name: Dịch vụ
 */

get_header();
?>
<main>
    <section class="contact-banner bg-cover bg-no-repeat bg-center"
        style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/assets/images/zz.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-5 d-none d-lg-block">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/Group.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="section-title section-title--shadow fw-bold text-center text-uppercase font-ml mb-0"><?php echo __('dịch vụ & sản phẩm','hazo'); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="page-nav">
        <div class="container">

            <?php echo do_shortcode('[dichvu-nav]'); ?>
            
        </div>
        <div class="page-nav__button d-block d-xl-none position-fixed fw-bold text-dark-grey">
            <?php echo __('Menu','hazo'); ?>
        </div>
    </section>

    <?php if(have_posts()) { ?>

    <section class="service">
        <div class="container">
            <div class="row g-3 g-md-5">
                <?php  while (have_posts()) : the_post(); ?>
                <div class="col-xs-12 col-6 col-md-4">
                    <?php get_template_part('template-parts/content', get_post_type());?>
                </div>

                <?php endwhile; ?>
                
            </div>
            <div class="hazo-pagination">
                <?php hazo_pagination(); ?>
            </div>
        </div>
    </section>

    <?php } ?>
</main>

<?php
get_footer();