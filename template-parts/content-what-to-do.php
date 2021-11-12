<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category_name' => 'what-to-do',
    'order' => 'DESC',
    // 'offset' => 1,
    // 'category__not_in' => array( 5 ),
    // 'category__in' => array( 16 )
);

$visits = new WP_Query( $args );

$excerpt = get_the_content();
$excerpt = substr($excerpt, 0, 250);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

$visit = $result . ' ...';


// if ($visits->have_posts()):
//     while($visits->have_posts()): $visits->the_post();

?>


  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 1000px;
        height: 288px;
        /* margin: 100px auto; */
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }

    .card-slick{
        color: white;
    }

    @media screen and (max-width: 670px) {
        .slider {
        width: 500px !important;
        height: 288px;
        /* margin: 100px auto; */
        }
        .card-slick {
            width: 500px;
        }
    }

  </style>

<div class="container p-3">
    <div class="row">
        <div class="col">
            <h4 class="text-center">O que Fazer?</h4>
        </div>
    </div>
</div>

<section class="center slider">

    <?php 

    if ($visits->have_posts()):
        while($visits->have_posts()): $visits->the_post();

    ?>

    <div>
        <div class="card card-slick mb-3" style="width: 920px; height: 288px; background-color: #FFFFFF; border-radius: 8px; margin-left: -3%;">
            <div class="row g-3">
                <div class="col-md-7">
                    <?php the_post_thumbnail( array( 'class' => 'img-fluid img-card-visits' ) ); ?>
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p class="card-category-tags"><?php the_tags( ' ' ); ?></p>
                        <p class="card-date"><small class="text-muted"><?php echo get_the_date() ?></small></p>
                        <p class="card-text"><?= $visit; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 

    wp_reset_postdata();

    endwhile;

endif;

?> 

</section>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 3
      });
    });
</script>

