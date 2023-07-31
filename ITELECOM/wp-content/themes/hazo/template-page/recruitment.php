<?php

/**
Template Name: Tuyển dụng
 */

get_header();
?>

<main class="recruitment-page">
    <section class="recruitment-banner">
        <?php echo wp_get_attachment_image(get_field('recruitment_banner'), 'full') ?>
    </section>

    <div class="recruitment-inner">
        <section class="recruitment-intro">
            <div class="container">
                <div class="recruitment-intro__content position-relative ws-sgct">
                    <?php the_content();?>
                </div>
            </div>
        </section>
        <section class="contact-link">
            <div class="container">
                <?php if (have_rows('recruitment_re')) { ?>
                    <div class="row g-4 g-lg-5 g-xl-7">
                        <?php while (have_rows('recruitment_re')) : the_row(); ?>
                            <div class="col-md-6 recruitment-item-wrapper">
                                <?php $link = get_sub_field('link'); ?>
                                <a href="<?php if($link){echo esc_url($link['url']);} else{echo 'javascript:void(0)';}?>" target="<?php echo esc_url($link['target']); ?>" class="contact-link-item overflow-hidden d-block position-relative img-block">
                                    <?php echo wp_get_attachment_image(get_sub_field('image'), 'full') ?>
                                    <p class="contact-link-item__title position-absolute text-center fw-bold"><?php the_sub_field('title')?></p>
                                </a>
                            </div>
                        <?php endwhile;?>
                    </div>
               <?php } ?>
               <div class="d-flex justify-content-center mt-5">
                    <button class="button button--primary show-more-recruitment"><?php pll_e('Xem thêm')?></button>
               </div>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();