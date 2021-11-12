<?php

$args1 = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'category_name' => 'banner',
    'order' => 'DESC',
    // 'offset' => 1,
    // 'category__not_in' => array( 5 ),
    // 'category__in' => array( 9 )
);

$args2 = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'category_name' => 'banner',
    'order' => 'DESC',
    'offset' => 1,
    // 'category__not_in' => array( 5 ),
    // 'category__in' => array( 9 )
);
$args3 = array(
    'post_type' => 'post',
    'posts_per_page' =>1,
    'category_name' => 'banner',
    'order' => 'DESC',
    'offset' => 2,
    // 'category__not_in' => array( 5 ),
    // 'category__in' => array( 9 )
);

$slide1 = new WP_Query( $args1 );
$slide2 = new WP_Query( $args2 );
$slide3 = new WP_Query( $args3 );

 ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

<?php

if ($slide1->have_posts()):
  while($slide1->have_posts()): $slide1->the_post();

$excerpt = get_the_content();
$excerpt = substr($excerpt, 0, 100);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

$visit = $result . ' (...)';

?>

    <div class="carousel-item active">
      <?php the_post_thumbnail(); ?>
      <div class="carousel-caption d-none d-md-block">
        <div class="col-4" style="margin: 15% auto;">
          <h1><?php the_title() ?></h1>
          <p><?= $visit; ?></p>
          <a href="<?php the_permalink() ?>"><button class="button-to">CONHEÇA A ROTA</button></a>
        </div>
      </div>
    </div>

<?php 

wp_reset_postdata();
endwhile;

endif;

if ($slide2->have_posts()):
  while($slide2->have_posts()): $slide2->the_post();

$excerpt = get_the_content();
$excerpt = substr($excerpt, 0, 100);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

$visit = $result . ' (...)';

?> 

    <div class="carousel-item">
      <?php the_post_thumbnail(); ?>
      <div class="carousel-caption d-none d-md-block">
        <div class="col-4" style="margin: 15% auto;">
          <h1><?php the_title() ?></h1>
          <p><?= $visit; ?></p>
          <a href="<?php the_permalink() ?>"><button class="button-to">CONHEÇA A ROTA</button></a>
        </div>
      </div>
    </div>

<?php 

wp_reset_postdata();
endwhile;

endif;

if ($slide3->have_posts()):
  while($slide3->have_posts()): $slide3->the_post();

$excerpt = get_the_content();
$excerpt = substr($excerpt, 0, 100);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

$visit = $result . ' (...)';

?> 


    <div class="carousel-item">
      <?php the_post_thumbnail(); ?>
      <div class="carousel-caption d-none d-md-block">
        <div class="col-4" style="margin: 15% auto;">
          <h1><?php the_title() ?></h1>
          <p><?= $visit; ?></p>
          <a href="<?php the_permalink() ?>"><button class="button-to">CONHEÇA A ROTA</button></a>
        </div>
      </div>
    </div>

<?php 

wp_reset_postdata();
endwhile;

endif;

?> 


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

