<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category_name' => 'banner',
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
        margin: 100px auto;
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
  </style>

  <section class="center slider">

    <?php 

    if ($visits->have_posts()):
        while($visits->have_posts()): $visits->the_post();

    ?>

    <!-- <div>
        <div class="card mb-3" style="width: 960px; height: 288px; margin-top: 5%; background-color: #FFFFFF; border-radius: 8px; margin-left: -3%;">
            <div class="row g-0">
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
    </div> -->

    <div>
        <?php the_post_thumbnail( array( 'class' => 'img-fluid img-card-visits' ) ); ?>
    </div>

    <!-- <div>
      <img src="http://placehold.it/350x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=6">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=7">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=8">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=9">
    </div> -->

<?php 

    wp_reset_postdata();

    endwhile;

endif;

?> 

  </section>



  <!-- <section class="variable slider">
    <div>
      <img src="http://placehold.it/200x300?text=2">
    </div>
    <div>
      <img src="http://placehold.it/200x300?text=2">
    </div>
    <div>
      <img src="http://placehold.it/100x300?text=3">
    </div>
    <div>
      <img src="http://placehold.it/200x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/300x300?text=6">
    </div>
  </section> -->

  <section class="lazy slider" data-sizes="50vw">
    <div>
      <img data-lazy="http://placehold.it/350x300?text=1-350w" data-srcset="http://placehold.it/650x300?text=1-650w 650w, http://placehold.it/960x300?text=1-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <img data-lazy="http://placehold.it/350x300?text=2-350w" data-srcset="http://placehold.it/650x300?text=2-650w 650w, http://placehold.it/960x300?text=2-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <img data-lazy="http://placehold.it/350x300?text=3-350w"  data-srcset="http://placehold.it/650x300?text=3-650w 650w, http://placehold.it/960x300?text=3-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <img data-lazy="http://placehold.it/350x300?text=4-350w"  data-srcset="http://placehold.it/650x300?text=4-650w 650w, http://placehold.it/960x300?text=4-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <img data-lazy="http://placehold.it/350x300?text=5-350w"  data-srcset="http://placehold.it/650x300?text=5-650w 650w, http://placehold.it/960x300?text=5-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <!-- this slide should inherit the sizes attr from the parent slider -->
      <img data-lazy="http://placehold.it/350x300?text=6-350w"  data-srcset="http://placehold.it/650x300?text=6-650w 650w, http://placehold.it/960x300?text=6-960w 960w">
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
        $('.variable-width').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true
        });
      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>

