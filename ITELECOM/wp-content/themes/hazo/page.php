<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hazo
 */

get_header();
?>

<main>
    <section class="page-default-banner" style="background-image:url(<?php the_field('page_banner')?>)">
        <div class="container">
            <h1 class="text-center section-title section-title--shadow fw-bold text-uppercase text-center"><?php the_title();?></h1>
        </div>
    </section>

    <section class="page-default-wrapper">
        <div class="container">
            <div class="page-default-content bg-white ws-sgct">
                <?php the_content();?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
