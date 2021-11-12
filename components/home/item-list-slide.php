<?php
$query_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'category_name' => 'banner' //slug
);

$the_query = new WP_Query($query_args);
$news = array();

while ($the_query->have_posts()) {
    $the_query->the_post();
    $news[] = array(
        'id' => $post->ID,
        'title' => get_the_title(),
        'description' => get_the_excerpt(),
        'link' => get_post_permalink(),
        'img' => get_the_post_thumbnail_url(),
    );
}

if (!$news) {
    return;
}
?>

<div id="carousel-main-news" class="carousel slide" data-interval="false">
    <!-- <ol class="carousel-indicators" onclick="javascript: slideTransition()">
    <li data-target="#carousel-main-news" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-main-news" data-slide-to="1"></li>
    <li data-target="#carousel-main-news" data-slide-to="2"></li>
  </ol> -->
    <div class="carousel-inner container-banner">
        <?php

        set_query_var('news', $news[0]);
        set_query_var('first', true);
        get_template_part('components/home/item', 'card-slide');

        set_query_var('first', false);
        $anotherNews = array_slice($news, 1, 3);

        foreach ($anotherNews as $key => $row) {
            set_query_var('news', $row);
            get_template_part('components/home/item', 'card-slide');
        }
        ?>
    </div>    
    <a class="carousel-control-prev slide-arrow slide-arrow-prev w-5" id="teste" href="#carousel-main-news" role="button" data-slide="prev" onclick="javascript: slideTransition()">
        <img src="<?= get_template_directory_uri() . '/public/assets/images/arrow-slide-next-with-bg.svg'; ?>" width="125" height="125" alt="seta_anterior">
    </a>
    <a class="carousel-control-next slide-arrow slide-arrow-next w-5" href="#carousel-main-news" role="button" data-slide="next" onclick="javascript: slideTransition()">
        <img src="<?= get_template_directory_uri() . '/public/assets/images/arrow-slide-next-with-bg.svg'; ?>" width="125" height="125" alt="seta_proximo">
    </a>
</div> 