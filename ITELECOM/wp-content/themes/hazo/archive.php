<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hazo
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="contact-banner bg-cover bg-no-repeat bg-center"
        style="background-image:url(<?php the_field('archive_bg',get_queried_object())?>)">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-5 d-none d-lg-block">
                    
                </div>
                <div class="col-lg-6">
                    <h1 class="section-title section-title--shadow fw-bold text-center text-uppercase mb-0">
                        <?php the_archive_title();?></h1>
                </div>
            </div>
        </div>
    </section>


    <?php $terms = get_field('menu_news','option');?>

    <section class="page-nav">
        <div class="container">
            <div class="page-nav__list">
                <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center text-uppercase">

                    <?php foreach ($terms as $term) { ?>
                    <?php $link = get_term_link($term); ?>
                    <li class="">
                        <a href="<?php echo $link; ?>"><?php echo $term->name; ?></a>
                    </li>
                   

                    <?php } ?> 
                </ul>
                <div class="page-nav__close d-flex align-items-center justify-content-center d-xl-none">
                    <?php echo svg('close')?>
                </div>
            </div>
        </div>
        <div class="page-nav__button d-block d-xl-none position-fixed fw-bold text-dark-grey">Menu</div>
    </section>

    <div class="news">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="row g-3 g-md-5">
                    <?php $i=0; while (have_posts()) : the_post(); $i++;?>
                    <div class="col-6 col-md-4">
                        <?php get_template_part('template-parts/content', get_post_type());?>
                    </div>
                    <?php endwhile;?>
                </div>
                <?php hazo_pagination();?>
            <?php else : get_template_part('template-parts/content', 'none'); endif; ?>
        </div>
    </div>


</main><!-- #main -->

<?php
get_footer();