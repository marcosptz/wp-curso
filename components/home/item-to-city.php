<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'category_name' => 'post',
    'order' => 'DESC',
    // 'category__not_in' => array( 5 ),
    // 'category__in' => array( 9 )
);

$events = new WP_Query( $args );

if ($events->have_posts()):
    while($events->have_posts()): $events->the_post();

 ?>

<article class="top-to">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center title-to">Conheça a Cidade</h1>
            </div>
        </div>
        <div class="row">
                <?php echo get_post_format() ?>
            <div class="col-6 image-to">
                <?php the_post_thumbnail( array( 580, 355 ) ); ?>
            </div>
            <div class="col-6 to-to">
                <p class="content-to"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ?>"><button class="button-to">CONHEÇA</button></a>
            </div>
        </div>
    </div>
</article>

<?php 

    endwhile;
    wp_reset_postdata();

endif

 ?> 