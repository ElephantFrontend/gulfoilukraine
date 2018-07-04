<?php get_header() 
/*
Template Name: Полезная информация
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
			<div class="news_wrapper_page">
				<div class="news_blocks_wrapper">
			<!-- test -->
              <?php
				if ( have_posts() ) : // если имеются записи в блоге.
					query_posts('cat=183,&order=ASC&posts_per_page=8');   // указываем ID рубрик, которые необходимо вывести.
					while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
				?>
						
							<div class="news_block korysna_block">
				<a href="<?php the_field('link_file'); ?>">
					<p class="news_block_title"><?php  trim_title_words(10, ''); ?></p>
					<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
						<div class="news_block_img" style="background-image: url(<?php  echo $image_url[0];?>);">
						
						</div>
					<div class="korysna_block_hover">
						<img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/download_icon.svg"" alt="">
					</div>
				</a>
				</div>
				<?php
					 endwhile;  // завершаем цикл.

			    $countcat = get_category(44 ,false);
 if (  $countcat->count > 8 ) : ?>
	<script>
		var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
		var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
		var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
		var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
	</script>
	<!-- <div id="true_loadmore" class="btn_y">Загрузить ещё</div> -->
<?php endif; 
			   
					endif;
					
					wp_reset_query();                
			?>	  

				</div>
			</div>	
		</div>
	</div>


<?php get_footer() ?>
