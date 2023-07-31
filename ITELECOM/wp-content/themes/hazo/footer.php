<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hazo
 */

?>


<footer class="footer">
    <div class="footer-top text-white">
        <div class="container">
            <div class="row g-5">
                <div class="footer-top__menu">
                    <?php if(have_rows('f_menu','option')) {?>
                    <div class="row g-5 g-lg-2">
                        <?php while(have_rows('f_menu','option')) : the_row() ;?>
                        <div class="col-6 col-md-3">
                            <p class="fw-bold text-uppercase footer-item__title">
                                <?php the_sub_field('f_menu_title','option')?></p>
                            <?php if(have_rows('f_menu_link_re')) { ?>
                            <ul class="list-unstyled mb-0">
                                <?php while(have_rows('f_menu_link_re','option')) : the_row() ;?>
                                <?php  $menu_link = get_sub_field('f_menu_link'); ?>
                                <li>
                                    <a href="<?php echo esc_url($menu_link['url']); ?>"
                                        <?php echo esc_url($menu_link['target']); ?>><?php echo $menu_link['title'] ?></a>
                                </li>
                                <?php endwhile;?>
                            </ul>
                            <?php } ?>
                        </div>
                        <?php endwhile;?>
                    </div>
                    <?php }?>
                </div>
                <div class="footer-top__info">
                    <p class="fw-bold text-uppercase footer-item__title"><?php the_field('f_info_title','option')?></p>
                    <div class="footer-top__info-content ws-sgct">
                        <?php the_field('f_info_content','option')?>
                    </div>
                </div>
                <div class="footer-top__info-social">
                    <p class="fw-bold text-uppercase footer-item__title"><?php the_field('f_social_title','option')?>
                    </p>
                    <ul class="list-unstyled mb-0">
                        <?php if(get_field('f_facebook','option')) {?>
                        <li>
                            <a href="<?php the_field('f_facebook','option')?>" target="_blank"
                                class="d-flex align-items-center fw-bold facebook-color">
                                <span
                                    class="d-flex align-items-center justify-content-center"><?php echo svg('facebook')?></span>
                                <?php _e('Facebook','hazo')?>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(get_field('f_zalo','option')) {?>
                        <li>
                            <a href="<?php the_field('f_zalo','option')?>" target="_blank"
                                class="d-flex align-items-center fw-bold zalo-color">
                                <span
                                    class="d-flex align-items-center justify-content-center"><?php echo svg('zalo')?></span>
                                <?php _e('Zalo','hazo')?>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(get_field('f_instagram','option')) {?>
                        <li>
                            <a href="<?php the_field('f_instagram','option')?>" target="_blank"
                                class="d-flex align-items-center fw-bold instagram-color">
                                <span
                                    class="d-flex align-items-center justify-content-center"><?php echo svg('instagram')?></span>
                                <?php _e('Instagram','hazo')?>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(get_field('f_email','option')) {?>
                        <li>
                            <a href="mailto:<?php the_field('f_email','option')?>" target="_blank"
                                class="d-flex align-items-center fw-bold email-color">
                                <span
                                    class="d-flex align-items-center justify-content-center"><?php echo svg('email')?></span>
                                <?php _e('Email','hazo')?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <a href="<?php echo check_link(get_field('f_bct','option'))?>"
                        <?php if(get_field('f_bct','option')) echo 'target="_blank"'?>>
                        <img class="rounded-3" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/bct.jpg"
                            alt="Đăng ký bộ công thương">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <?php the_field('f_copyright','option')?>
        </div>
    </div>
</footer>

<div class="fixed-contact-btn position-fixed">
    <?php if(get_field('bc_phone','option')) { ?>
        <a href="tel:<?php the_field('bc_phone','option')?>"
            class="fixed-contact-item fixed-call position-relative d-flex align-items-center justify-content-center rounded-circle">
            <?php echo svg('phone')?>
        </a>
    <?php } ?>
</div>

<div class="backToTop rounded-circle position-fixed">
    <?php echo svg('arrow-up')?>
</div>

<?php the_field('script_body', 'option'); ?>
<?php wp_footer(); ?>

</body>

</html>