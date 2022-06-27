<?php get_header(); ?>

<section class="site__main">
    <h1 class='front-page'>Catalogue de cours</h1>
    <div class='carte-cours-flex'>
    <?php
            if ( have_posts() ) :
                while ( have_posts()) : the_post()?>
                    <div>
                        <h2><?php the_title();?></h2>
                        
                        <?php
                            $lien = '</p> <a class="bouton" href="' 
                                    . get_permalink() . '"> '
                                    .substr(get_the_title(), 0,8)
                                    .' </a>';
                        ?>
                        
                        <p><?= wp_trim_words(get_the_content(), 20, $lien); ?>
                        
                    </div>
                <?php endwhile;?>
        <?php endif;?>
    </div>
</section>
<?php get_footer(); ?>