<?php get_header() 
/*
Template Name: Каталог
*/
?>

<!-- content -->
		<div class="content">
		<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
			<div class="wrapper">	
<!-- news -->
				<div class="catalog_wrapper_page">
					<div class="catalog_wrapper">
					<!-- test -->
	<?php
  $id = 269;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры

?>
<!-- -->
<div class="catalog_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
						<a href="<?php the_permalink(); ?>">
							<div class="catalog_block_content">
								<div class="catalog_block_text">
									<h3><?php the_title(); ?></h3>
									<hr>
									<p><?php _e("<!--:ru--> Выбрать <!--:--><!--:ua--> Обрати
 <!--:-->"); ?></p>
								</div>
							</div>
						</a>
						</div>
<!--  -->
	<?php
  $id = 272;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры

?>
<!-- -->
<div class="catalog_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
						<a href="<?php the_permalink(); ?>">
							<div class="catalog_block_content">
								<div class="catalog_block_text">
									<h3><?php the_title(); ?></h3>
									<hr>
									<p><?php _e("<!--:ru--> Выбрать <!--:--><!--:ua--> Обрати
 <!--:-->"); ?></p>
								</div>
							</div>
						</a>
						</div>
	<!--  -->
	<?php
  $id = 275;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры

?>
<!--  -->
<div class="catalog_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
						<a href="<?php the_permalink(); ?>">
							<div class="catalog_block_content">
								<div class="catalog_block_text">
									<h3><?php the_title(); ?></h3>
									<hr>
									<p><?php _e("<!--:ru--> Выбрать <!--:--><!--:ua--> Обрати
 <!--:-->"); ?></p>
								</div>
							</div>
						</a>
						</div>
	<!--  -->
	<?php
  $id = 278;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры

?>
<!--  -->
<div class="catalog_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
						<a href="<?php the_permalink(); ?>">
							<div class="catalog_block_content">
								<div class="catalog_block_text">
									<h3><?php the_title(); ?></h3>
									<hr>
									<p><?php _e("<!--:ru--> Выбрать <!--:--><!--:ua--> Обрати
 <!--:-->"); ?></p>
								</div>
							</div>
						</a>
						</div>
<!--  -->
	<?php
  $id = 281;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры

?>
<!-- -->
<div class="catalog_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
						<a href="<?php the_permalink(); ?>">
							<div class="catalog_block_content">
								<div class="catalog_block_text">
									<h3><?php the_title(); ?></h3>
									<hr>
									<p><?php _e("<!--:ru--> Выбрать <!--:--><!--:ua--> Обрати
 <!--:-->"); ?></p>
								</div>
							</div>
						</a>
						</div>
<!--  -->
	<?php
  $id = 284;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры

?>
<!-- -->
<div class="catalog_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
						<a href="<?php the_permalink(); ?>">
							<div class="catalog_block_content">
								<div class="catalog_block_text">
									<h3><?php the_title(); ?></h3>
									<hr>
									<p><?php _e("<!--:ru--> Выбрать <!--:--><!--:ua--> Обрати
 <!--:-->"); ?></p>
								</div>
							</div>
						</a>
						</div>
<!--  -->
	<?php
  $id = 287;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры

?>
<!-- -->
<div class="catalog_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
						<a href="<?php the_permalink(); ?>">
							<div class="catalog_block_content">
								<div class="catalog_block_text">
									<h3><?php the_title(); ?></h3>
									<hr>
									<p><?php _e("<!--:ru--> Выбрать <!--:--><!--:ua--> Обрати
 <!--:-->"); ?></p>
								</div>
							</div>
						</a>
						</div>

<!--  -->
				<?php
  $id = 290;// Обязательно передавать переменную
  $post = get_post($id); 
  $content = $post->post_content;
  $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры

?>
<!--  -->
<div class="catalog_block" style="background-image: url('<?php echo $thumbnail_attributes[0]; ?>');">
						<a href="http://gulfoilsupply.com.mt/lubricant-advisor/">
							<div class="catalog_block_content">
								<div class="catalog_block_text">
									<h3><?php the_title(); ?></h3>
									<hr>
									<p><?php _e("<!--:ru--> Выбрать <!--:--><!--:ua--> Обрати
 <!--:-->"); ?></p>
								</div>
							</div>
						</a>
						</div>
<!-- -->
					</div>
				</div>	
			</div>
		</div>

<!-- contackts -->
			<div class="contackts contackts_page">
				<!-- <form class="form_contackt" action="">
					<input class="form_name" type="text" name="name" placeholder="<?php// _e("<!--:ru--> Ф.И.О <!--:--><!--:ua--> П.I.Б <!--:-->"); ?>">
					<input class="form_email" type="email" name="email" placeholder="E-mail">
					<input class="form_subject" type="text" name="subject" placeholder="Тема">
					<textarea class="form_message" name="message" placeholder="<?php// _e("<!--:ru--> Введите сообщение <!--:--><!--:ua--> Введіть повідомлення <!--:-->"); ?>"></textarea>
					<input class="form_submit" type="submit" label="Отправить">
				</form> -->
				<?php if(qtrans_getLanguage() == "ru") : ?> <?php echo do_shortcode( '[contact-form-7 id="747" title="Contact formRU"]' ); ?>
				<?php endif ?> 
				<?php if(qtrans_getLanguage() == "ua") : ?> <?php echo do_shortcode( '[contact-form-7 id="748" title="Contact formUA"]' ); ?>
				<?php endif ?>
				<div class="contackts_text">
				<p>Телефон: <?php echo get_theme_mod('number1'); ?></p>
				<p>Факс: <?php echo get_theme_mod('fax'); ?></p>
				<p><?php echo get_theme_mod('email'); ?></p>
				<br>
				<p><?php _e("<!--:ru--> Почтовый индекс: <!--:--><!--:ua--> Поштовий iндекс: <!--:-->"); ?></p>
				<p><?php echo get_theme_mod('index'); ?></p>
				<p><?php echo get_theme_mod('adress'); ?></p>
				</div>
				<div class="map" style="overflow: hidden;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d760.9277751973777!2d30.52005622293618!3d50.440497101533325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ceff05ec5a03%3A0xa1b1cdd88000a3ad!2z0LLRg9C70LjRhtGPINCS0LXQu9C40LrQsCDQktCw0YHQuNC70YzQutGW0LLRgdGM0LrQsCwgOS8yLCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1521551455669" width="100%" height="300" frameborder="0" style="border:1px solid #002776; overflow: hidden; margin-top: 20px;" allowfullscreen></iframe>
				</div>
			</div>
<?php get_footer() ?>