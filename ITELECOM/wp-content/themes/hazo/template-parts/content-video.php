<a href="<?php the_field('video_link')?>" data-fancybox class="video-item img-block img-hover overflow-hidden">
    <img src="<?php hazo_post_thumbnail()?>" alt="<?php the_title()?>">
    <span class="video-item__play"></span>
    <p class="video-item__title position-absolute fw-bold"><?php the_title();?></p>
</a>