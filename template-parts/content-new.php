<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'category_name' => 'news',
    // 'order' => 'DESC',
    // 'offset' => 1,
    'category__not_in' => array( 16 ),
    // 'category__in' => array( 7 )
);

$events = new WP_Query( $args );

$excerpt = get_the_content();
$excerpt = substr($excerpt, 0, 250);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

$news = $result . ' ...';


if ($events->have_posts()):

    while($events->have_posts()): $events->the_post();

 ?>


<div class="col">
    <div class="card" style="width: 390px; margin-top: 7.5%; margin-bottom: 8%; background-color: #FFFFFF; border-radius: 15px; padding-bottom: -5%;">
        <?php the_post_thumbnail( array( 'class' => 'card-img-top img-card-top' ) ); ?>
        <div class="card-body">
            <p class="news-tags-top"><?php the_tags( ' ' ); ?></p>
            <h5 class="card-title"><?php the_title() ?></h5>
            <p class="card-date"><small class="text-muted"><?php echo get_the_date() ?></small></p>
            <p class="card-text-top"><?= $news; ?></p>
        </div>
    </div>
</div>

<?php 

    wp_reset_postdata();
endwhile;

endif;

 ?> 