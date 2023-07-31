<?php

/**
Template Name: Giới thiệu
 */

get_header();
?>
<main>
    <section class="page-banner bg-cover bg-no-repeat bg-center" style="background-image:url(<?php the_field('page_banner')?>)">
        <div class="container">
            <h1 class="section-title page-banner-title section-title--shadow text-uppercase fw-bold d-inline-block"><?php the_title();?></h1>
        </div>
    </section>
    
    <?php echo do_shortcode('[my_shortcode_menu name="menu_about"]') ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <section class="about-content">
        <div class="container">
            <div class="ws-sgct text-light-grey">
                <?php the_content();?>
            </div>
        </div>
    </section>
<?php endwhile; endif;?>
</main>

<?php
get_footer();