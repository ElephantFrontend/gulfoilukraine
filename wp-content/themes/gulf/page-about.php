<?php get_header() 
/*
Template Name: О нас
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
				<div class="about_wrapper_page">
					<p class="text_center title_block"><?php _e("<!--:ru--> О Нас <!--:--><!--:ua--> Про нас <!--:-->"); ?></p>
					<p><?php the_field('text_about'); ?></p>
					
					<div class="image_wrapper">
					<!--  -->
					<?php
    $images = acf_photo_gallery('photogellery_about', $post->ID); 
    if( count($images) ):
        foreach($images as $image):
            $id = $image['id'];
            $title = $image['title']; 
            $caption= $image['caption'];
            $full_image_url= $image['full_image_url']; 
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); 
            $thumbnail_image_url= $image['thumbnail_image_url']; 
            $url= $image['url']; 
            $target= $image['target']; 
            $alt = get_field('photo_gallery_alt', $id); 
            $class = get_field('photo_gallery_class', $id);
?>

        <?php if( !empty($url) ){ ?> <?php } ?>
           <div class="image_block"><img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"> </div>
        <?php if( !empty($url) ){ ?></a><?php } ?>
<?php endforeach; endif; ?>
					</div>
					<p class="text_center title_block"><?php _e("<!--:ru--> История Gulf <!--:--><!--:ua--> Iсторiя Gulf <!--:-->"); ?></p>
					<p><?php the_field('history_compani'); ?></p>
						
					<div class="image_wrapper">
					<?php
    $images = acf_photo_gallery('photogellery_history_company', $post->ID); 
    if( count($images) ):
        foreach($images as $image):
            $id = $image['id'];
            $title = $image['title']; 
            $caption= $image['caption'];
            $full_image_url= $image['full_image_url']; 
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); 
            $thumbnail_image_url= $image['thumbnail_image_url']; 
            $url= $image['url']; 
            $target= $image['target']; 
            $alt = get_field('photo_gallery_alt', $id); 
            $class = get_field('photo_gallery_class', $id);
?>
        <?php if( !empty($url) ){ ?> <?php } ?>
           <div class="image_block"><img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"> </div>
        <?php if( !empty($url) ){ ?></a><?php } ?>
<?php endforeach; endif; ?>
					</div>

					<p class="text_center title_block"><?php _e("<!--:ru--> Overview of Gulf Oil International <!--:--><!--:ua--> Overview of Gulf Oil International <!--:-->"); ?></p>
					<p><?php the_field('text_tree_block'); ?></p>
				</div>	
			</div>
		</div>

<?php get_footer() ?>