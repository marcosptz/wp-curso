<?php 

if(have_posts() ):
    while( have_posts() ): the_post();
    
?>

<article>
    <?php echo get_post_format() ?> 
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail( array( 580, 355 ) ); ?>
    <p>Publish in <?php echo get_the_date() ?> by <?php the_author_posts_link(); ?></p>
    <p>Categories: <?php the_category( ' ' ); ?></p>
    <p><?php the_tags( 'Tags: ', ',' ); ?></p>
    <p><?php the_content(); ?></p>
</article>

<?php 
    endwhile;
else:

?>
<p>Não há posts para exibir</p>
<?php endif ?>