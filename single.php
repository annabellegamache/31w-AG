<?php get_header(); ?>
<section class="site__main">
    <div class="single__main">
        <?php
                        $titre = get_the_title();
                        $nom =   substr($titre, 8, -6);
                        $sigle = substr($titre, 0, 8);
                        $heure = substr($titre,-6);
                    ?>
        <h1><?=$nom; ?></h1>
        <?php
                if ( have_posts() ) :
                    while ( have_posts()) : the_post()?>
                    <p><?php the_content();?></p> 
                    
                    <code><?=$sigle; ?></code>
                    
                <?php endwhile;?>
            <?php endif;?>
    </div>
</section>
<?php get_footer(); ?>

