<?php get_header(); ?>

<div class="content-area">
    <main>
        <section class="slide">
            <div class="container">
                <div class="row">
                    <?php get_template_part('components/home/item', 'search'); ?>
                </div>
            </div>
            <?php get_template_part('components/home/item', 'card-carousel'); ?>
        </section>
        <section class="services">
            <div class="container">
                <div class="row">
                    <?php get_template_part('components/home/item', 'to-city'); ?>
                </div>
            </div>
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="events col-md-12">
                        <?php get_template_part( 'components/home/item', 'events' ); ?> 
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-news"></div>
        <!-- <div class="bg-news-2"></div> -->
        <section class="">
            <div class="container">
                <div class="row">
                    <?php get_template_part( 'components/home/item', 'news' ); ?>
                </div>
            </div>
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="events col-md-12">
                        <?php get_template_part( 'components/home/item', 'visits' ); ?> 
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer() ?>