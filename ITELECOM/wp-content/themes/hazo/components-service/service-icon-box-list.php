<?php if(have_rows('box_icon')) { ?>


<div class="service-benefit-list mt-5">
    <?php while(have_rows('box_icon')) : the_row() ?>
    <div class="service-benefit-item d-flex flex-wrap">
        <div class="item__image rounded-circle overflow-hidden">
            <img src="<?php the_sub_field('image') ?>" alt="">
        </div>
        <div class="item__content">
            <?php the_sub_field('content') ?>
        </div>
    </div>
    <?php endwhile; ?>
</div>

<?php } ?>