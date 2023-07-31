<?php


get_header();
?>
<main>
    <section class="contact-banner bg-cover bg-no-repeat bg-center"
        style="background-image:url(<?php the_field('banner-dichvu','option')?>)">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-5 d-none d-lg-block">
                </div>
                <div class="col-lg-6">
                    <h1 class="section-title section-title--shadow fw-bold text-center text-uppercase font-ml mb-0">
                        <?php if(get_field('service_title')) { ?>
                            <?php the_field('service_title')?>
                        <?php } else { ?>
                            <?php echo __('Dịch vụ Indochina Telecom','hazo'); ?>
                        <?php } ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="service-detail">
        <div class="container">
            <div class="row g-0 g-lg-5 g-xl-7">
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="sidebar-item sidebar-service">
                            <p class="sidebar-service__title section-title--small fw-bold font-ml position-relative">
                                <?php echo __('Sản phẩm & dịch vụ','hazo'); ?>
                                <span class="sidebar-service__close position-absolute"><?php echo svg('close')?></span>
                            </p>


                            <?php $wcatTerms = get_terms('service_cat', array('hide_empty' => 0, 'parent' =>0));  ?>
                            <?php $i=1; foreach($wcatTerms as $wcatTerm) : ?>

                            <div class="sidebar-service-inner">

                                <?php 
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  
                                    $args = array(

                                        'post_type' => 'service',
                                        'posts_per_page' => -1,
                                        'paged' =>$paged,
                                        'tax_query' => array(
                                            array(
                                              'taxonomy' => 'service_cat',
                                              'field' => 'slug',
                                              'terms' => $wcatTerm->slug
                                            )
                                        )
                                    );
                                    $services = new WP_Query( $args );     
                                    ?>

                                <?php if ( $services->have_posts() ) : ?>
                                <div class="sidebar-service-item">
                                    <p class="sidebar-service-item__head font-medium">
                                        <?php echo $wcatTerm->name; ?>
                                    </p>
                                    <nav>

                                        <ul>
                                            <?php while ( $services->have_posts() ) : $services->the_post(); ?>
                                            <li>
                                            <?php if(get_field('service_redirect')){
                                                        $service_link = get_field('service_redirect_link');
                                                    }else{
                                                        $service_link = get_the_permalink(); 
                                            } ?>
                                                <a href="<?php echo $service_link; ?>" <?php if(get_field('service_redirect')){ echo 'target="_blank"';}?>>
                                                    <?php the_title(); ?>
                                                </a>
                                            </li>
                                            <?php endwhile ?>
                                        </ul>
                                    </nav>
                                </div>

                                <?php endif; ?>
                            </div>

                            <?php  $i++; endforeach; ?>
                            <!---- room-item --->



                        </div>
                    </aside>
                </div>
                <div class="col-lg-8">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="service-sidebar-button button button--primary mb-5 d-inline-block d-lg-none">
                        <?php pll_e('Dịch vụ')?>
                    </div>
                    <div class="service-detail__content text-light-grey">

                        <h2 class="section-title--small text-primary fw-bold mb-4 mb-md-5">
                            <?php the_title(); ?>
                        </h2>


                        <?php
                        if (have_rows('single_service')) {
                            while (have_rows('single_service')) : the_row();
                                $module_name = get_row_layout();
                                switch ($module_name):
                                    case $module_name:
                                        get_template_part('components-service/' . $module_name);
                                endswitch;
                            endwhile;
                        }
                        ?>



                    </div>

                    <?php if(get_field('btn_reg') || get_field('link_reg') ) { ?>

                    <div class="service-promotion d-flex flex-wrap align-items-center justify-content-between bg-cover bg-no-repeat bg-center"
                        style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/assets/images/bg-dc.png)">
                        <p class="service-promotion__title text-primary section-title--small fw-bold text-center">
                            <?php the_field('btn_reg') ?>
                        </p>
                        <div class="service-promotion__button mt-4 mt-md-0">
                            <?php $link = get_field('link_reg'); ?>
                            <a href="<?php echo esc_url($link['url']) ?>"
                                class="button button--primary button--center"><?php echo $link['title'] ?></a>
                        </div>
                    </div>

                    <?php } ?>

                    <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();