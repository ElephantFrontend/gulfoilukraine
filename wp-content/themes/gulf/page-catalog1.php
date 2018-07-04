<?php get_header() 
/*
Template Name: Для легких
*/
?>

<!-- content -->
		<div class="content">
			<div class="wrapper">	
<!-- news -->
				<div class="catalog_wrapper_page">
                                <div class="category_link_wrapper">
                <?php
  $id = 269;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры
?>
<div class="category_link_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
        <a href="<?php the_permalink(); ?>">
            <span><?php the_title(); ?></span>
        </a>
</div>
    <!--  -->
    <?php
  $id = 272;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры
?>
<div class="category_link_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
        <a href="<?php the_permalink(); ?>">
            <span><?php the_title(); ?></span>
        </a>
</div>
    <!--  -->
    <?php
  $id = 275;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры
?>
<div class="category_link_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
        <a href="<?php the_permalink(); ?>">
            <span><?php the_title(); ?></span>
        </a>
</div>
    <!--  -->
    <?php
  $id = 278;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры
?>
<div class="category_link_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
        <a href="<?php the_permalink(); ?>">
            <span><?php the_title(); ?></span>
        </a>
</div>
    <!--  -->
    <?php
  $id = 281;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры
?>
<div class="category_link_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
        <a href="<?php the_permalink(); ?>">
            <span><?php the_title(); ?></span>
        </a>
</div>
    <!--  -->
    <?php
  $id = 284;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры
?>
<div class="category_link_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
        <a href="<?php the_permalink(); ?>">
            <span><?php the_title(); ?></span>
        </a>
</div>
                </div>
					<div class="catalog_wrapper">
                    <div class="category_wrapper_page">
                    <div id="accordeon">
<!-- TEST -->
<?php 
$all_terms = get_terms( 'one_taxonomy', array( 'hide_empty' => 0 ) );
foreach (  $all_terms as $term ) { # внешний цикл?>
    <div class="acc-head">
        <p><?php echo $term->name ?></p>
      </div>
   <?php $query = new WP_Query( array(
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'one_taxonomy',
                'field'    => 'slug',
                'terms'    => $term->slug,
            )
        )
    ));?>
    <div class="acc-body">
    <?php while ( $query->have_posts() ) { # внутренний цикл
        $query->the_post();
        ?>
       
         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      
        <?php  
    } # конец внутреннего?>
    </div>
<?php  } # конец наружного
?>

    </div>
</div>
<!-- TEST -->
</div>
</div>
</div>
</div>

<?php get_footer() ?>

<script>
    $(document).ready(function() {
  //прикрепляем клик по заголовкам acc-head
    $('#accordeon .acc-head').on('click', f_acc);
});

function f_acc(){
//скрываем все кроме того, что должны открыть
  $('#accordeon .acc-body').not($(this).next()).slideUp(800);
// открываем или скрываем блок под заголовоком, по которому кликнули
    $(this).next().slideToggle(800);
}
</script>