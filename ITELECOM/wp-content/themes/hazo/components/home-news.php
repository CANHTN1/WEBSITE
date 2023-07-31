<?php  
$subcats = get_sub_field('taxonomy'); ?>

<section class="home-news">
    <div class="container">
        <div class="home-news__head d-flex flex-wrap justify-content-between align-items-center">
            <h2 class="home-news__title section-title font-medium mb-0">
                <?php the_sub_field('title'); ?>
            </h2>
            <nav>
                <div class="nav nav-tabs home-news-nav" id="nav-tab" role="tablist">
                    <?php $i=1; foreach ($subcats as $sc) {  ?>
                        <button class="nav-link <?php if($i==1) { echo 'active'; } ?>" id="home-news-<?php echo $sc->slug; ?>tab" data-bs-toggle="tab"
                        data-bs-target="#home-news-<?php echo $sc->slug; ?>" type="button" role="tab" aria-controls="home-news-<?php echo $sc->slug; ?>"
                        aria-selected="true"><?php echo $sc->name; ?></button>
                        
                    <?php $i++; } ?>
                </div>
            </nav>
        </div>

        
        <div class="tab-content" id="home-news-tabContent">
        <?php $i=1; foreach ($subcats as $sc) {  ?>

            <div class="tab-pane fade <?php if($i==1) { echo 'show active'; } ?> " id="home-news-<?php echo $sc->slug; ?>" role="tabpanel" aria-labelledby="home-news-<?php echo $sc->slug; ?>-tab">
                <div class="home-news-list">

                <?php $id = $sc->term_id; ?>
                <?php  
                $argss = array(
                  'post_type' => 'post',
                  'showposts' => 5,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'category',
                      'field' => 'id',
                      'terms' => $id
                    )
                  )
                );
                $the_querys = new WP_Query( $argss );

                   $i=0; while ( $the_querys->have_posts() ) : $the_querys->the_post(); $i++; ?>


                    <div class="home-news-item d-flex flex-wrap">
                        <a href="<?php the_permalink() ?>" class="home-news-item__image img-block overflow-hidden">
                            <img src="<?php if($i==1){hazo_post_thumbnail_full();}else{hazo_post_thumbnail();} ?>" alt="">
                        </a>
                        <div class="home-news-item__content">
                            <p class="home-news-item__title fw-bold">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title(); ?>
                                </a>
                            </p>
                            <div class="home-news-item__desc text-light-grey">
                                <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                    <?php wp_reset_query() ?>
                    
                    
                    <div class="home-news-link">
                        <a href="<?php echo $url = get_term_link($sc); ?>" class="button button--primary button--shadow"><?php pll_e('Xem thêm')?></a>
                    </div>
                </div>
            </div>
        <?php $i++; } ?>
          
        </div>


    </div>
</section>
