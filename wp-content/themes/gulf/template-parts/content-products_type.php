<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gulf
 */

?>


<!-- content -->
		<div class="content">
		<!-- <img class="image_bg" src="src/img/ribbon-blue.svg" alt=""> -->
			<div class="wrapper">
				<div class="tovar_wrapper_page">
				<!-- переходы на другие категории -->

				
				<!-- content -->

					<div class="tovar_content_wrapper">
						<div class="tovar_content_left">
							<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
							<div class="tovar_img" style="background-image: url(<?php  echo $image_url[0];?>);"></div>
							<?php $file = get_field('detailed_description'); ?>
							<div class="tovar_button_wrapper">
							<div class="tovar_button"><a href="<?php echo $file['url']; ?>"><span><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/arrow_button_basket.svg" alt=""><?php _e("<!--:ru--> Подробное описание <!--:--><!--:ua--> Докладний опис <!--:-->"); ?></span></a></div>
							<div class="tovar_button"><a href="<?php the_field('go_to_the_store'); ?>"><span><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/basket.svg" alt=""><?php _e("<!--:ru--> Перейти в магазин <!--:--><!--:ua--> Перейти до магазину <!--:-->"); ?></span></a></div>
							</div>
							<div class="tovar_packaging">
								<!-- Вывод Литража -->
					<?php// $posts = get_posts ("post_type=products_type"); ?>  
           <?php //if ($posts) : ?>
            <?php //foreach ($posts as $post) : setup_postdata ($post); ?>
									
									<?php $litrack = get_field('litrack'); ?>
									<?php //print_r($litrack); ?>
									
									<?php if( $litrack && in_array('1l:1L', $litrack) ): ?>
											 <img src="<?php bloginfo('template_url'); ?>/src/img/fasovka/1L.svg" alt=""> 
									<?php endif; ?>
									
									<?php if( $litrack && in_array('4l:4L', $litrack) ): ?>
											 <img src="<?php bloginfo('template_url'); ?>/src/img/fasovka/4L.svg" alt=""> 
									<?php endif; ?>

									<?php  if( $litrack && in_array('5l:5L', $litrack) ): ?>
											 <img src="<?php bloginfo('template_url'); ?>/src/img/fasovka/5L.svg" alt=""> 
									<?php endif; ?>

									<?php  if( $litrack && in_array('20l:20L', $litrack) ): ?>
											 <img src="<?php bloginfo('template_url'); ?>/src/img/fasovka/20L.svg" alt=""> 
									<?php endif; ?>

									<?php  if( $litrack && in_array('60l:60L', $litrack) ): ?>
											 <img src="<?php bloginfo('template_url'); ?>/src/img/fasovka/60L.svg" alt=""> 
									<?php endif; ?>
									
									<?php  if( $litrack && in_array('200l:200L', $litrack) ): ?>
											 <img src="<?php bloginfo('template_url'); ?>/src/img/fasovka/200L.svg" alt=""> 
									<?php endif; ?>

									<?php  if( $litrack && in_array('1000l:1000L', $litrack) ): ?>
											 <img src="<?php bloginfo('template_url'); ?>/src/img/fasovka/1000L.svg" alt=""> 
									<?php endif; ?>			
					   <?php 
                 //endforeach;
                  //wp_reset_postdata();
                   ?>
                   <?php// endif; ?>
					<!-- Вывод Литража -->
							</div>
						</div>
						<div class="tovar_content_right">

							<p class="text_center text_upper tovar_content_right_title"><?php the_title(); ?></p>
							<p><?php the_content(); ?></p>
							<span>		
								<p class="tovar_content_right_title"><?php _e("<!--:ru--> ОСОБЕННОСТИ И ПРЕИМУЩЕСТВА <!--:--><!--:ua--> ОСОБЛИВОСТІ І ПЕРЕВАГИ <!--:-->"); ?></p>
								<p class="tovar_content_right_content"><?php the_field('features_benefits'); ?></p>
							</span>
							<span>
								<p class="tovar_content_right_title"><?php _e("<!--:ru--> ПРИМЕНЕНИЕ <!--:--><!--:ua--> ЗАСТОСУВАННЯ <!--:-->"); ?></p>
								<p class="tovar_content_right_content"><?php the_field('application'); ?></p>
							</span>
							<span>
								<p class="tovar_content_right_title"><?php _e("<!--:ru--> СТАНДАРТЫ И ДОПУСКИ <!--:--><!--:ua--> СТАНДАРТИ І ДОПУСКИ <!--:-->"); ?></p>
								<p class="tovar_content_right_content"><?php the_field('standards'); ?></p>
							</span>
						</div>
					</div>


				<!-- похожие товары блок -->
					<hr>
						<p class="text_center text_upper tovar_content_right_title"><?php _e("<!--:ru--> Похожие товары <!--:--><!--:ua--> Схожі товари <!--:-->"); ?></p>
					<hr>
					<div class="commodious_wrapper">
					<?php 
$all_terms = get_terms( 'one_taxonomy', array( 'hide_empty' => 0 , 'number' => 4, 'orderby' => 'count') );
foreach (  $all_terms as $term ) { # внешний цикл?>
					<?php $query = new WP_Query( array(
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'one_taxonomy',
                'field'    => 'slug',
                'terms'    => $term->slug,
            )
        )
    ));?>
     <?php while ( $query->have_posts() ) { # внутренний цикл
        $query->the_post();
        ?>
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
       		<div class="commodius_block">
       			<a href="<?php the_permalink(); ?>">
					<p><?php the_title(); ?></p>
					<div class="commodious_img" style="background-image: url('<?php echo $image_url[0]; ?>');"></div>
				</a>
			</div>
        <?php  
    } # конец внутреннего?>
   
<?php  } # конец наружного
?>
						
						<!-- <div class="commodius_block">
							<p>Lorem ipsum init amit ipsum lorem random text.</p>
							<div class="commodious_img"></div>
						</div>
						<div class="commodius_block">
							<p>Lorem ipsum init amit ipsum lorem random text.</p>
							<div class="commodious_img"></div>
						</div>
						<div class="commodius_block">
							<p>Lorem ipsum init amit ipsum lorem random text.</p>
							<div class="commodious_img"></div>
						</div> -->
					</div>
				</div>
			</div>
		</div>



