<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COH_Theme
 */

get_header(); ?>

    <div class="coh-media-1">
        <img class="cover" src="http://192.168.0.107:8888/wp-content/uploads/2017/03/header_image.png">
        <span class="coh-media-text">We shine a light on<br>poverty and injustice<br>in San Francisco.</span>
    </div>

    <div id="coh-mission-statement" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php

            $args=array(
              'title' => 'Mission statement',
              'showposts'=> 1     // set number of post you want to display
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post();

                get_template_part( 'template-parts/content', get_post_format() );

              endwhile;
            }
          wp_reset_query();  // Restore global post data stomped by the_post().
        ?>

        </main><!-- #main -->
    </div><!-- #coh-mission-statements -->
        
    <div class="coh-media-2">
        <img src="http://192.168.0.107:8888/wp-content/uploads/2017/03/header_image_2.png">
    </div>
        
    <div id="coh-impact-statements" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php

            $args=array(
              'title' => 'Impact statements',
              'showposts'=> 1     // set number of post you want to display
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post();

                get_template_part( 'template-parts/content', get_post_format() );

              endwhile;
            }
          wp_reset_query();  // Restore global post data stomped by the_post().
        ?>

        </main><!-- #main -->
    </div><!-- #coh-impact-statements -->
    
    <div id="coh-get-involved" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php

            $args=array(
              'title' => 'Get involved',
              'showposts'=> 1     // set number of post you want to display
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post();

                get_template_part( 'template-parts/content', get_post_format() );

              endwhile;
            }
          wp_reset_query();  // Restore global post data stomped by the_post().
        ?>

        </main><!-- #main -->
    </div><!-- #coh-get-involved -->

<?php
//get_sidebar();
get_footer();
