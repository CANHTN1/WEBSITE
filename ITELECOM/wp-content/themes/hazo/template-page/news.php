<?php

/**
Template Name: Tin tức
 */

get_header();
?>

<?php  
$subcats = get_field('category'); ?>
<main>
    <section class="news-slider">
        <div class="container">
            <?php if(have_rows('n_slide')) { ?>
            <div class="news-slider-inner"
                data-flickity='{ "cellAlign": "left", "wrapAround": true,"imagesLoaded": true,"pageDots":false,"autoPlay": 4000}'>
                <?php while(have_rows('n_slide')) : the_row() ;?>
                <a href="<?php the_sub_field('link')?>" class="carousel-cell w-100 d-block">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php the_sub_field('image_mobile')?>">
                        <?php echo wp_get_attachment_image(get_sub_field('image'), 'full') ?>
                    </picture>
                </a>
                <?php endwhile;?>
            </div>
            <?php } ?>
        </div>
    </section>

    <section class="news-block">
        <div class="container">
            <div class="news-block__head d-flex flex-wrap justify-content-between align-items-center">
                <h2 class="home-news__title section-title section-title-has-line font-medium mb-0">
                    <?php the_field('title_news'); ?>
                </h2>
                <nav>
                    <div class="nav nav-tabs home-news-nav" id="nav-tab" role="tablist">
                        <?php $i=1; foreach ($subcats as $sc) {  ?>
                            <button class="nav-link <?php if($i==1) { echo 'active'; } ?>" id="home-news-<?php echo $sc->slug; ?>tab" data-bs-toggle="tab"
                            data-bs-target="#home-news-<?php echo $sc->slug; ?>" type="button" role="tab" aria-controls="home-news-<?php echo $sc->slug; ?>"
                            aria-selected="true"><?php echo $sc->name; ?></button>
                            
                        <?php $i++; } ?>
                    </div>
                </nav>
            </div>

            <div class="tab-content" id="home-news-tabContent">
                <?php $i=1; foreach ($subcats as $sc) {  ?>

            <div class="tab-pane fade <?php if($i==1) { echo 'show active'; } ?> " id="home-news-<?php echo $sc->slug; ?>" role="tabpanel" aria-labelledby="home-news-<?php echo $sc->slug; ?>-tab">
                <div class="home-news-list">

                <?php $id = $sc->term_id; ?>
                <?php  
                $argss = array(
                  'post_type' => 'post',
                  'showposts' => 5,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'category',
                      'field' => 'id',
                      'terms' => $id
                    )
                  )
                );
                $the_querys = new WP_Query( $argss );

                  $i=0;  while ( $the_querys->have_posts() ) : $the_querys->the_post(); $i++; ?>


                    <div class="home-news-item d-flex flex-wrap">
                        <a href="<?php the_permalink() ?>" class="home-news-item__image img-block overflow-hidden">
                            <img src="<?php if($i==1){hazo_post_thumbnail_full();}else{hazo_post_thumbnail();} ?>" alt="<?php the_title()?>">
                        </a>
                        <div class="home-news-item__content">
                            <p class="home-news-item__title fw-bold">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title(); ?>
                                </a>
                            </p>
                            <div class="home-news-item__desc text-light-grey">
                                <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                    <?php wp_reset_query() ?>
                    
                    <div class="home-news-link">
                        <a href="<?php echo $url = get_term_link($sc); ?>" class="button button--primary button--shadow"><?php pll_e('Xem thêm')?></a>
                    </div>
                </div>
            </div>
        <?php $i++; } ?>
             
            </div>
        </div>
    </section>

    <!-- VIDEO -->
    <section class="news-video">
        <div class="container">
            <?php global $post;  $featured_posts = get_field('n_video'); if ($featured_posts) : ?>
            <?php  $post_count = count(get_field('n_video')); ?>
            <div class="news-video__head d-flex justify-content-between align-items-center">
                <?php if(get_field('n_video_title')) { ?>
                <h2 class="section-title section-title-has-line mb-0"><?php echo the_field('n_video_title')?></h2>
              
                <?php } ?>
            </div>
            <div class="news-video__carousel hz-flickity-button <?php if($post_count < 4){echo 'disable-flickity-button';}?>"
                data-flickity='{ "cellAlign": "left", "contain": true,"imagesLoaded": true,"autoPlay": 4000}'>
                <?php foreach ($featured_posts as $post) : setup_postdata($post); ?>
                <div class="col-12 col-md-6 col-lg-4 px-4">
                    <?php get_template_part('template-parts/content','video') ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; wp_reset_postdata(); ?>
            <div class="d-flex justify-content-end mt-5">
                <?php  $link = get_field('n_video_link'); if($link) { ?>
                <a href="<?php echo esc_url($link['url']); ?>" class="button button--primary"
                    target="<?php echo esc_url($link['target']); ?>"><?php echo $link['title'] ?></a>
                <?php } ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();