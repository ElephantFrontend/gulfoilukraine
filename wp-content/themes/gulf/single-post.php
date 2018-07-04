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
<div class="content">

<div class="wrapper">
	<div class="news_single_wrapper_page">
		<div class="new_single_content_head">
			<h3><?php the_title(); ?></h3>
			<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'middle');  ?>
			<img class="new_single_img" src="<?php echo $image_url[0];?>" alt="">
			
		</div>
			<div class="new_single_content">
				<?php the_post(); the_content();?>
			</div>
	</div>
</div>
</div>

<?php
get_footer();
