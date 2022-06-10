<?php get_header(); ?>
<h1 class='front-page'>Catalogue de cours</h1>
<div class='carte-cours-flex'>
<?php
        if ( have_posts() ) :
            while ( have_posts()) : the_post()?>
            <div>
             <h2><?php the_title();?></h2>
            
             <?php
                 $lien = '<br> <a class="bouton" href="' 
                        . get_permalink() . '"> '
                        .get_the_title() . ' </a>';
             ?>
             
            <?= wp_trim_words(get_the_content(), 20, $lien); ?>
            
            </div>
        <?php endwhile;?>
    <?php endif;?>
</div>
<?php get_footer(); ?>