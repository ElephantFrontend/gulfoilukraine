<?php get_header(); ?>
<!-- header_slider -->
		<div class="header_slider">

			<?php if ( get_field('header_slider_img1') ) {?>
			<?php  $slide1 = get_field('header_slider_img1');?>
                    <div class="slide" style="background-image: url('<?php echo $slide1[url];?>');">
						<p><?php the_field('header_slider_title1'); ?></p>
					</div>
                    <?php } else { ?>     
            <?php } ?>

            <?php if ( get_field('header_slider_img2') ) {?>
			<?php  $slide2 = get_field('header_slider_img2');?>
                    <div class="slide" style="background-image: url('<?php echo $slide2[url];?>');">
						<p><?php the_field('header_slider_title2'); ?></p>
					</div>
                    <?php } else { ?>     
            <?php } ?>

            <?php if ( get_field('header_slider_img3') ) {?>
			<?php  $slide3 = get_field('header_slider_img3');?>
                    <div class="slide" style="background-image: url('<?php echo $slide3[url];?>');">
						<p><?php the_field('header_slider_title3'); ?></p>
					</div>
                    <?php } else { ?>     
            <?php } ?>

            <?php if ( get_field('header_slider_img4') ) {?>
			<?php  $slide4 = get_field('header_slider_img4');?>
                    <div class="slide" style="background-image: url('<?php echo $slide4[url];?>');">
						<p><?php the_field('header_slider_title4'); ?></p>
					</div>
                    <?php } else { ?>     
            <?php } ?>

            <?php if ( get_field('header_slider_img5') ) {?>
			<?php  $slide5 = get_field('header_slider_img5');?> 
                    <div class="slide" style="background-image: url('<?php echo $slide5[url];?>');">
						<p><?php the_field('header_slider_title5'); ?></p>
					</div>
                    <?php } else { ?>     
            <?php } ?>

		</div>
<!-- content -->
		<div class="content">
			<div class="wrapper">
				<div class="two_block-link_wrapper">
					<div class="two_block-link">
						<a href="<?php the_field('contacts_partners'); ?>">
							<span class="one_img"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/icon-partners.svg" alt=""></span> 
							 <span class="two_img"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/icon-partners-hover.svg" alt=""></span> 
							
					
							<span><?php _e("<!--:ru--> Контакты Партнеров <!--:--><!--:ua--> Контакти Партнерів <!--:-->"); ?></span>
						</a>
					</div>
					<div class="two_block-link">
						<a href="<?php the_field('selection_of_oil'); ?>">
							<span class="two_img"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/icon-oil-hover.svg" alt=""></span>
							<span class="one_img"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/icon-oil.svg" alt=""></span>
							<span><?php _e("<!--:ru--> Подбор Масла <!--:--><!--:ua--> Підбір Оливи <!--:-->"); ?></span>
						</a>
					</div>
				</div>

				<div class="two_block-link_wrapper">
					<div class="two_block-link_big">
						<a href="<?php the_field('catalog'); ?>">
							<div class="block-link_big_img">
								
							</div>
							<div class="block-link_big_title">
								<p class="text_bold"><?php _e("<!--:ru--> Каталог Товаров <!--:--><!--:ua--> Каталог Товарiв <!--:-->"); ?></p>
								<img class="arrow_right_big vissible_img" src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/bt_go.svg" alt="">
								<img class="arrow_right_big hidden_img" src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/bt_go-hover.svg" alt="">
							</div>
						</a>
					</div>
					<div class="two_block-link_big">
						<a href="<?php the_field('go_to_shop'); ?>">
							<div class="block-link_big_img block-link_big_img_two">
								
							</div>
							<div class="block-link_big_title">
									<p class="text_bold"><?php _e("<!--:ru--> Перейти в Магазин <!--:--><!--:ua--> Перейти до Магазину <!--:-->"); ?></p>
									<img class="arrow_right_big vissible_img" src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/bt_go.svg" alt="">
									<img class="arrow_right_big hidden_img" src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/bt_go-hover.svg" alt="">
							</div>
						</a>
					</div>
				</div>

				<div class="block_text_photo_wrapper">
					<a href="<?php the_field('about_url'); ?>">
						<div class="block_text">
							<p class="middle_text"><?php _e("<!--:ru--> О Нас <!--:--><!--:ua--> Про Нас <!--:-->"); ?></p>
							<p><?php the_field('text_block_about'); ?></p>
						</div>
						<div class="block_text_photo">
							<img class="arrow_right_big vissible_img" src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/bt_go.svg" alt="">
							<img class="arrow_right_big hidden_img" src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/bt_go-hover.svg" alt="">
						</div>
					</a>
				</div>
				<div class="one_block-link">
						<a href="<?php the_field('useful_information'); ?>">
							<span class="one_img"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/icon-info-orange.svg" alt=""></span> 
							 <span class="two_img"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/icon-info-white.svg" alt=""></span> 
							
					
							<span><?php _e("<!--:ru--> Полезная Информация <!--:--><!--:ua--> Корисна Iнформацiя<!--:-->"); ?></span>
						</a>
					</div>
			</div>
		</div>

		<div class="wrapper">
		<!-- news -->
		<section class="news">
			<p class="title_block"><?php _e("<!--:ru--> Новости <!--:--><!--:ua--> Новини <!--:-->"); ?></p>
			<div class="news_wrapper">
			<!-- test -->
			<?php $posts = get_posts ("category=44"); ?>  
           <?php if ($posts) : ?>
            <?php foreach ($posts as $post) : setup_postdata ($post); ?>
						
							<div class="news_block">
				<a href="<?php the_permalink(); ?>">
					<p class="news_block_title"><?php  trim_title_words(5, ''); ?></p>
					<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
						<div class="news_block_img" style="background-image: url(<?php  echo $image_url[0];?>);">
							<p><span><img src="" alt=""> <?php echo get_the_date('m.d.y'); ?></span></p>
						</div>
					<p class="news_block_content">
						<?php the_truncated_post(200); ?>
					</p>
				</a>
				</div>
					   <?php 
                   endforeach;
                   wp_reset_postdata();
                   ?>
                   <?php endif; ?>
			</div>
			<a class="link" href="<?php _e("<!--:ru-->http://gulfoilukraine.com/ru/novini/<!--:--><!--:ua-->http://gulfoilukraine.com/novini/<!--:-->"); ?>"><?php _e("<!--:ru--> Все Новости <!--:--><!--:ua--> Усi Новини <!--:-->"); ?></a>
		</section>
		</div>
		<!-- video_footer -->
		<div class="video">
		</div>

		<!-- contackts -->
		<div class="contackts">
			<p class="title_block"><?php _e("<!--:ru--> Обратная связь <!--:--><!--:ua--> Зворотній зв’язок <!--:-->"); ?></p>
			<div class="contackts">
				<!-- <form class="form_contackt" action="">
					<input class="form_name" type="text" name="name" placeholder="<?php //_e("<!--:ru--> Ф.И.О <!--:--><!--:ua--> П.I.Б <!--:-->"); ?>">
					<input class="form_email" type="email" name="email" placeholder="E-mail">
					<input class="form_subject" type="text" name="subject" placeholder="Тема">
					<textarea class="form_message" name="message" placeholder="<?php// _e("<!--:ru--> Введите сообщение <!--:--><!--:ua--> Введіть повідомлення <!--:-->"); ?>"></textarea>
					<input class="form_submit" type="submit" value="<?php// _e("<!--:ru--> Отправить <!--:--><!--:ua--> Надiслати <!--:-->"); ?>">
				</form> -->
				<!--  -->

				<!--  -->
				<?php if(qtrans_getLanguage() == "ru") : ?> <?php echo do_shortcode( '[contact-form-7 id="747" title="Contact formRU"]' ); ?>
				<?php endif ?> 
				<?php if(qtrans_getLanguage() == "ua") : ?> <?php echo do_shortcode( '[contact-form-7 id="748" title="Contact formUA"]' ); ?>
				<?php endif ?>
			</div>
		</div>
		
<?php get_footer(); ?>

