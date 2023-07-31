
<?php if(have_rows('box_icon')) { ?>

<div class="row mt-5">
    <?php while(have_rows('box_icon')) : the_row() ?>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-5">
                <div class="service-procedure__image">
                    <img src="<?php the_sub_field('image') ?>" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="ws-sgct">
                   <?php the_sub_field('content') ?>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
   
</div>

<?php } ?>