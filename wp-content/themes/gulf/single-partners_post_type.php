<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gulf
 */

get_header();
?>

<div id="primary" class="content-media">
    <main id="main" class="site-main" role="main">
        <?php
            while( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'products_type' );
            endwhile;
        ?>
    </main>
</div>
	
<?php
get_footer();
