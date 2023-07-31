<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hazo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php the_field('script_head', 'option'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>



    <header class="header sticky-top bg-white">
        <div class="container">
            <div class="header-inner d-flex align-items-center justify-content-between">
                <div class="header__bars d-block d-xl-none">
                    <?php echo svg('bars')?>
                </div>
                <div class="header__logo">
                    <?php
						$custom_logo_id = get_theme_mod('custom_logo');
						$image = wp_get_attachment_image_src($custom_logo_id, 'full');
						printf(
							'<a href="%1$s" title="%2$s"><img src="%3$s"></a>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							$image[0]
						);
					?>
                </div>
                <nav class="header__menu d-none d-xl-block">
                    <ul class="list-unstyled mb-0 d-flex flex-wrap align-items-center">
                        <?php
							wp_nav_menu(array(
								'theme_location'  => 'menu-1',
								'container'       => '__return_false',
								'fallback_cb'     => '__return_false',
								'items_wrap'      => '%3$s',
								'depth'           => 3,

							));
						?>
                    </ul>
                </nav>
                <div class="header__right d-flex align-items-center justify-content-between">
                    <div class="header__search position-relative d-none d-xl-block">
                        <p class="header__search-btn d-flex align-items-center">
                            <?php echo svg('search')?><span class=""><?php pll_e('Tìm Kiếm')?></span></p>
                        <form action="<?php echo get_home_url()?>" class="d-flex position-absolute">
                            <input type="text" name="s" placeholder="<?php pll_e('Tìm Kiếm')?>">
                            <button type="submit"><?php echo svg('search')?></button>
                        </form>
                    </div>
                    <?php  $link = get_field('header_hotro','option'); ?>
					<a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_url($link['target']); ?>" class="header__login d-none d-xl-block">
						<?php echo svg('user')?>
					</a>
                    <div class="header__language">
                        <ul class="list-unstyled mb-0 d-flex flex-wrap align-items-center justify-content-end">
                            <!-- <?php pll_the_languages(array('show_flags' => 0, 'display_names_as' => 'slug')); ?> -->
                            <?php echo do_shortcode('[gtranslate]'); ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <nav class="menu-mobile">
        <div class="menu-mobile-close">
            <?php echo svg('close')?>
        </div>
		<div class="menu-mobile-search">
			<form action="<?php echo get_home_url()?>" class="d-flex">
				<input type="text" name="s" placeholder="<?php pll_e('Tìm Kiếm')?>">
				<button type="submit"><?php echo svg('search')?></button>
			</form>
		</div>
        <ul class="list-unstyled mb-0">
            <?php
				wp_nav_menu(array(
					'theme_location'  => 'menu-1',
					'container'       => '__return_false',
					'fallback_cb'     => '__return_false',
					'items_wrap'      => '%3$s',
					'depth'           => 2,

				));
			?>
        </ul>
    </nav>
    <div class="overlay"></div>