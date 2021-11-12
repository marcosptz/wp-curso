<?php

// $args = array(
//     'post_type' => 'post',
//     'posts_per_page' => 3,
//     'category_name' => 'visits',
//     'order' => 'DESC',
//     // 'offset' => 1,
//     // 'category__not_in' => array( 5 ),
//     // 'category__in' => array( 16 )
// );

// $visits = new WP_Query( $args );

// $excerpt = get_the_content();
// $excerpt = substr($excerpt, 0, 250);
// $result = substr($excerpt, 0, strrpos($excerpt, ' '));

// $visit = $result . ' ...';

?>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Lugares Mais Visitados</h1>
        </div>
    </div>
</div>

<?php

// if ($visits->have_posts()):
    // while($events->have_posts()): $events->the_post();

 ?>

<article class="artic">
    <div class="container">
        <div class="row">
            <?php echo get_post_format() ?>
            <div class="col">
                <?php get_template_part('template-parts/content', 'what-to-do'); ?>
                <?php get_template_part('template-parts/content', 'where-to-eat'); ?>
                <?php get_template_part('template-parts/content', 'where-to-stay'); ?>
            </div>
            <div class="col-12 text-center btn-card">
                <a href="<?php the_permalink() ?>"><button class="button-card">VER MAIS</button></a>
            </div>
        </div>
    </div>
</article>

<?php 

//     wp_reset_postdata();

// endif

 ?> 
