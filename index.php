<?php get_header(); ?>
<h1>Mon premier modèle Wordpress</h1>
<?php
        if ( have_posts() ) :
            while ( have_posts()) : the_post()?>
            <?php the_title();?>
            <br>
        <?php endwhile;?>
    <?php endif;?>

<?php get_footer(); ?>