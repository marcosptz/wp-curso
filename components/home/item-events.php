<?php

$args = array(
    'post_type' => 'events',
    'posts_per_page' => 6,
    // 'category_name' => 'eventos',
    // 'category__not_in' => array( 5 ),
    // 'category__in' => array( 6 )
);

$events = new WP_Query( $args );

$excerpt = get_the_content();
$excerpt = substr($excerpt, 0, 70);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

$event = $result . ' ...';

$data = get_field('data');

if ($events->have_posts()):
    // while($events->have_posts()): $events->the_post();

?>

<br><br><article>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center events">
                <div class="container">
                    <div class="row">
                        <h2 class="col-12 text-h">Eventos</h2>
                        <div class="col-1">
                            <p class="fixo-p"></p>
                        </div>
                        <div class="col-5">
                            <p class="text-end text-p">EVENTOS FIXOS</p>
                        </div>
                        <div class="col-1">
                            <p class="esporadico-p"></p>
                        </div>
                        <div class="col-5">
                            <p class="text-start text-p">EVENTOS ESPORÁRICOS</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php while($events->have_posts()): $events->the_post(); ?>
            <div class="col">
                <?php echo get_post_format() ?> 
                <div class="card" style="width: 300px; height: 215px; border-radius: 8px; margin-left: auto; margin-right: auto; background-color: #FAFAFA" >
                    <div class="card-body">
                        <div class="decor">
                            <h6 class="card-subtitle mb-2 text-muted text-center"><?php the_tags( ' ' ); ?></h6>
                        </div>
                        <div class="container">
                        <!-- <a href="#"> -->
                            <div class="row">
                                <div class="col-4 borde">
                                    <h1 class="card-text-dia"><?php the_field('dia'); ?></h1>
                                    <h5 class="card-text-mes"><?php the_field('mes'); ?></h5>
                                    <div class="<?php the_field('tipo_de_evento'); ?>">
                                    </div>
                                </div>
                                <div class="col-8 py-4">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?= $event; ?></p>
                                    <p class="card-text">Localização</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- </a> -->
                </div><br><br>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="col-12 text-center">
            <a href=""><button class="button-to">VER MAIS</button></a>
        </div>
        
    </div>
</article><br><br>

<?php 
    wp_reset_postdata();

endif

 ?> 