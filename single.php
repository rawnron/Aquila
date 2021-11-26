<?php 
/**
 * Single post template.
 * 
 * @package Aquila
 */
get_header();
?>

<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
            <?php
        if ( have_posts() ) :
            ?>
            <div class="post-wrap">
                <?php 
                    if ( is_home() && ! is_front_page() ) {
                      ?>
                        <header class="mb-5">
                            <h1 class="page-title screen-reader-title">
                                <?php single_post_title(); ?>
                            </h1>
                        </header>
                      <?php  
                    }

                    // Case: $index = 0;
                    //start the loop
                        while ( have_posts() ) : the_post();
                        

                        ?>
                        <div class="col">
                            <?php get_template_part( 'template-parts/content' ); ?>
                        </div>
                        <?php


                        endwhile;
                    ?>
            </div>
            <?php
            else :

            get_template_part( 'template-parts/content-none' );

        endif;
        ?>
            <!--Next and previous link for page navigation.-->
            <div class="prev-link"><?php previous_post_link(); ?></div>
            <div class="next-link"><?php next_post_link(); ?></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
        </div>
    </main>
</div>

<?php 

get_footer();
    
