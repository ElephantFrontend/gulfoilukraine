<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<!--  -->
<div id="primary" class="content-media">
    <main id="main" class="site-main" role="main">
        <h1><?php single_term_title(); ?></h1>
        <hr>
        <!-- test -->
        <?php 
                $termID = get_queried_object()->term_id; // get_queried_object()->term_id; - динамическое получение ID текущей рубрики
                $taxonomyName = "category_product";
                $termchildren = get_term_children( $termID, $taxonomyName );

            echo '<ul>';

            foreach ($termchildren as $child) {
             $term = get_term_by( 'id', $child, $taxonomyName );
                echo '<li>' . $term->name . '</li>';
                echo $term->count;
                  // 
                           if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?> 
    <?php //single_term_title(); ?>
        <?php  ?>
        <?php the_title(); ?>
  <?php endwhile; ?>
<?php endif;                  
}
            echo '</ul>';
?>

        <!-- testtest test test -->
        <?php

            $args = array( 'post_type' => 'products_type' );

            $query = new WP_Query( $args );
            
            while( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'template-parts/content', 'category_product' );
            } wp_reset_postdata();
        ?>
    </main>
</div>
<!--  -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
