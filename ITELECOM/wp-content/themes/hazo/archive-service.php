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

    <section class="service">
        <div class="container">
            <div class="row g-3 g-md-5">
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-phone')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ </p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi m
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-sms')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ</p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi mới thành lập không những cần quan tâm
                                    và xây dựng chiến lược hoạt động tốt mà còn phải nỗ lực hoàn thiện dịch vụ ...
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-landline-phone')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ</p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi mới thành lập không những cần quan tâm
                                    và xây dựng chiến lược hoạt động tốt mà còn phải nỗ lực hoàn thiện dịch vụ ...
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-internet')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ</p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi mới thành lập không những cần quan tâm
                                    và xây dựng chiến lược hoạt động tốt mà còn phải nỗ lực hoàn thiện dịch vụ ...
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-infrastucture')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ</p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi mới thành lập không những cần quan tâm
                                    và xây dựng chiến lược hoạt động tốt mà còn phải nỗ lực hoàn thiện dịch vụ ...
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-support')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ</p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi mới thành lập không những cần quan tâm
                                    và xây dựng chiến lược hoạt động tốt mà còn phải nỗ lực hoàn thiện dịch vụ ...
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-landline-phone')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ</p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi mới thành lập không những cần quan tâm
                                    và xây dựng chiến lược hoạt động tốt mà còn phải nỗ lực hoàn thiện dịch vụ ...
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-meeting')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ</p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi mới thành lập không những cần quan tâm
                                    và xây dựng chiến lược hoạt động tốt mà còn phải nỗ lực hoàn thiện dịch vụ ...
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-6 col-md-4">
                    <div class="service-item">
                        <div class="service-item__icon d-flex align-items-center justify-content-center rounded-circle">
                            <?php echo svg('service-087')?>
                        </div>
                        <p class="service-item__title text-center fw-bold section-title--small text-uppercase">Tên dịch
                            vụ</p>
                        <div class="service-item__content">
                            <div class="service-item__content-inner">
                                <p class="service-item__desc">
                                    Một doanh nghiệp, tổ chức, công ty kể từ khi mới thành lập không những cần quan tâm
                                    và xây dựng chiến lược hoạt động tốt mà còn phải nỗ lực hoàn thiện dịch vụ ...
                                </p>
                                <a href="#" class="button button--shadow button--center fw-bold font-ml">Chi tiết</a>
                            </div>
                            <div class="service-item__image img-block">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/fs-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hazo-pagination">
                <ul>
                    <li><a href=""><?php echo svg('arrow-left','15')?></a></li>
                    <li class="active"><a href="">1</a>
                    </li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href=""><?php echo svg('arrow-right','15')?></a></li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();