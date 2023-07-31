<?php
get_header();
?>
<main class="recruitment-page">
    <section class="recruitment-banner">
        <?php echo wp_get_attachment_image(get_field('cdtd_image','option'), 'full') ?>
    </section>

    <div class="recruitment-inner">
        <section class="recruitment-intro">
            <div class="container">
                <div class="recruitment-intro__content position-relative ws-sgct">
                    <?php the_field('cdtd_content','option')?>
                </div>
            </div>
        </section>
        <section class="contact-link">
            <div class="container">
                <?php if (have_posts()) : ?>
                <div class="row g-4 g-lg-5 g-xl-7">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6">
                        <a href="<?php the_permalink(); ?>" class="contact-link-item overflow-hidden d-block position-relative img-block">
                            <img src="<?php hazo_post_thumbnail_full()?>" alt="<?php the_title();?>">
                            <p class="contact-link-item__title position-absolute text-center fw-bold"><?php the_title()?></p>
                        </a>
                    </div>
                    <?php endwhile; hazo_pagination();?>
                </div>
                <?php else :  get_template_part('template-parts/content', 'none'); endif; ?>
            </div>
        </section>
    </div>
</main>
<?php
get_footer();