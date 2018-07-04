<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gulf
 */

?>

    <!-- test -->
		    <?php if (have_posts()) : ?>
		  <?php while (have_posts()) : the_post(); ?> 
		  	<div class="partner_block">
							<div class="partner_maps">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1478.5340298054905!2d30.519201345745287!3d50.440410282780526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ceff05ec5a03%3A0xa1b1cdd88000a3ad!2z0LLRg9C70LjRhtGPINCS0LXQu9C40LrQsCDQktCw0YHQuNC70YzQutGW0LLRgdGM0LrQsCwgOS8yLCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1521621366964" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="partner_content">
								<p class="name_partners"><?php the_title(); ?></p>
								<p><img src="<?php bloginfo('template_url'); ?>/src/img/icons/bt-lang-укр.png" alt=""> г.Город, обл. Область ул. Улица, 12</p>
								<p><img src="<?php bloginfo('template_url'); ?>/src/img/icons/bt-lang-укр.png" alt=""> +38 (091) 234-56-78</p>
								<p><img src="<?php bloginfo('template_url'); ?>/src/img/icons/bt-lang-укр.png" alt=""> info@mail.com</p>
								<p><img src="<?php bloginfo('template_url'); ?>/src/img/icons/bt-lang-укр.png" alt=""> www.link.com</p>
							</div>
						</div>
		   
		  <?php endwhile; ?>
		<?php endif; ?>
<!-- test -->

<?php 
	
 ?>
