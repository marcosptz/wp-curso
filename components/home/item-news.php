<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'category_name' => 'news',
    'order' => 'DESC',
    'offset' => 1,
    // 'category__not_in' => array( 5 ),
    // 'category__in' => array( 7 )
);

$events = new WP_Query( $args );

$excerpt = get_the_content();
$excerpt = substr($excerpt, 0, 230);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

$news = $result . ' ...';

?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Notícias</h1>
        </div>
    </div>
</div>

<?php

if ($events->have_posts()):
    // while($events->have_posts()): $events->the_post();

 ?>

<article>
    <div class="container">
        <div class="row">
            <?php echo get_post_format() ?>
            <?php get_template_part('template-parts/content', 'new'); ?>
            <div class="col">
                <?php while($events->have_posts()): $events->the_post(); ?>
                    <div class="card mb-3" style="width: 630px; height: 225px; margin-top: 5%; background-color: #FFFFFF; border-radius: 8px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <?php the_post_thumbnail( array( 'class' => 'img-fluid img-card' ) ); ?>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p class="card-category news-tags"><?php the_tags( ' ' ); ?></p>
                                    <h5 class="card-title"><?php the_title() ?></h5>
                                    <p class="card-date"><small class="text-muted"><?php echo get_the_date() ?></small></p>
                                    <p class="card-text"><?= $news; ?></p>
                                </div>
                            </div>
                        </div>
                    </div><br>
                <?php endwhile ?>
            </div>
            <div class="col-12 text-center btn-card">
                <a href="<?php the_permalink() ?>"><button class="button-card">VER MAIS</button></a>
            </div>
        </div>
    </div>
</article>

<?php 

    wp_reset_postdata();

endif

 ?> 
