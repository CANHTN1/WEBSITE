<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hazo
 */

get_header();
?>

<section class="page-default-banner bg-cover bg-center bg-no-repeat"
    style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/assets/images/page-df-banner.jpg)">
    <div class="container">
        <div class="page-breadcrumb">
            <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
        </div>
    </div>
</section>
<section class="post-detail">
    <div class="container">
        <div class="row justify-content-center g-0">
            <div class="col-lg-8">
                <h1 class="section-title--small font-medium"><?php the_title();?></h1>
                <div class="post-detail__info">
                    <?php $category = get_the_category();?>
                    <span class="post-category"><?php echo get_primary_category($category)?></span>
                    <span class="post-time text-light-grey"><em>(<?php echo get_the_date()?>)</em></span>
                </div>
                <div class="recruiment-detail-inner ws-sgct">
                    <?php  while (have_posts()) :
                            the_post();
                            the_content();
                        endwhile; ?>
                </div>
                <div class="post-share d-flex justify-content-end mt-4">
                    <div class="post-share-item">
                        <iframe
                            src="https://www.facebook.com/plugins/share_button.php?href=<?php the_permalink(); ?>&layout=button_count&size=small&width=90&height=20&appId"
                            width="90" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="post-share-item">
                        <div class="zalo-share-button" data-href="<?php the_permalink();?>" data-oaid="579745863508352884"
                            data-layout="1" data-color="blue" data-customize="false"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-post">
    <div class="container">
        <h2 class="section-title font-medium mb-5"><?php pll_e('Tin tức khác')?></h2>
        <?php  $custom_taxterms = wp_get_object_terms($post->ID, 'category', array('fields' => 'ids'));
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'desc',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'id',
                            'terms' => $custom_taxterms
                        )
                    ),
                    'post__not_in' => array($post->ID),
                );
                $related_items = new WP_Query($args);
                if ($related_items->have_posts()) : ?>
                <div class="row g-5 scroll-snap-mb">
                    <?php while ($related_items->have_posts()) : $related_items->the_post(); ?>
                        <div class="col-7 col-md-4">
                            <?php get_template_part('template-parts/content', get_post_type());?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif;  wp_reset_postdata(); ?>
    </div>
</section>
<?php
get_footer();