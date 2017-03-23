<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COH_Theme
 */

get_header(); ?>

        <div class="coh-page-header">
            <?php $slug = basename(get_permalink());
            if ($slug === 'who-we-are') { ?>
                <img src="http://192.168.0.107:8888/wp-content/uploads/2017/03/header-1.png">
            <?php } else if ($slug === 'what-we-do') { ?>
                <img src="http://192.168.0.107:8888/wp-content/uploads/2017/03/header2-2.png">
            <?php } else if ($slug === 'get-involved') { ?>
                <img src="http://192.168.0.107:8888/wp-content/uploads/2017/03/header3.png">
            <?php }
            ?>
        </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
