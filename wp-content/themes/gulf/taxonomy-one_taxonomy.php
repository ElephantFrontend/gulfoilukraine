<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        

<?php 
$all_terms = get_terms( 'one_taxonomy', array( 'hide_empty' => 0 ) );
foreach (  $all_terms as $term ) { # внешний цикл
    echo "<h3>$term->name</h3>";
    echo "<ul>";
    $query = new WP_Query( array(
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'one_taxonomy',
                'field'    => 'slug',
                'terms'    => $term->slug,
            )
        )
    ));
    
    while ( $query->have_posts() ) { # внутренний цикл
        $query->the_post();
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php  
    } # конец внутреннего
    echo "</ul>";
} # конец наружного
?>

<?php
get_footer();
