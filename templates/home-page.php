<?php
/**
 * Template Name: Home Page
 */

get_header();
?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <?php
         			while ( have_posts() ) : the_post();

                        echo 'test';
         			    do_shortcode('[whoami_skill]');
//         			    the_content();

         			endwhile; // End of the loop.
         			?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();



