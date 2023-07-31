<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hazo
 */
?>
<div class="news-item img-hover">
    <a href="<?php the_permalink()?>" class="news-item__image img-block overflow-hidden">
        <img src="<?php hazo_post_thumbnail()?>" alt="<?php the_title()?>">
    </a>
    <p class="news-item__title fw-bold">
        <a href="<?php the_permalink()?>">
            <?php the_title()?>
        </a>
    </p>
    <div class="news-item__desc text-light-grey text-justify">
        <?php echo excerpt(30) ?>
    </div>
</div>