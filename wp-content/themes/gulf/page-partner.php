<?php get_header() 
/*
Template Name: Партнеры
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

				<div class="partners_wrapper_page">
<?php 
	// вытаскиваем все рубрики в массив $categories, описание параметров функции смотрите чуть ниже
$categories = get_terms('partners_category', 'orderby=name&hide_empty=0');
 
// если рубрики, соответствующие заданным параметрам, существуют,
if($categories){
 
	// тогда создаем выпадающий список из них
	echo '<select class="select_partners" onchange="if (this.value) window.location.href = this.value">';?>
 	<option selected><?php _e("<!--:ru--> Выберите область <!--:--><!--:ua--> Виберіть область

 <!--:-->"); ?></option>
	<?php  // обращаемся к каждому объекту массива (в данном случае рубрика)
	foreach ($categories as $cat){?>
 		
		<?php  // выводим элемент списка, где атрибут value равен ID рубрики, а $cat->name - название рубрики
		echo "<option value='{$cat->slug}'>{$cat->name}</option>";
	}
	echo '</select>';
}
 ?>
					<div class="partner_block_wrapper">
					<?php 
                $query = new WP_Query( array(
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'partners_category',
            'field'    => 'slug',
            'operator' => 'AND',
            
        )
    )
) );
                if ( have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                            
                            <div class="partner_block">
							<div class="partner_maps">
								<?php 

$location = get_field('map');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>

<?php endif; ?>
							</div>
							<div class="partner_content">
								<p class="name_partners"><?php the_title(); ?></p>

								<?php if ( get_field('location') ) {?>
								                        <p><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/partners-pin-icon.svg" alt=""> <?php the_field('location'); ?></p>
								        <?php } else { ?>
								            
								<?php } ?>
								<?php if ( get_field('phone') ) {?>
								                        <p><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/partners-phone-icon.svg" alt=""> <?php the_field('phone'); ?></p>
								        <?php } else { ?>
								            
								<?php } ?>
								<?php if ( get_field('email') ) {?>
								                        <p><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/partners-mail-icon.svg" alt=""> <?php the_field('email'); ?></p>
								        <?php } else { ?>
								            
								<?php } ?>
								<?php if ( get_field('site') ) {?>
								                        <p><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/partners-link-icon.svg" alt=""> <?php the_field('site'); ?></p>
								        <?php } else { ?>
								            
								<?php } ?>
							</div>
						</div>

            <?php endwhile;
           ?>
	
<?php  
            endif;
         ?>
					</div>
				</div>	
			</div>
		</div>


<?php get_footer() ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChZ5M1Am6jTEPNPIJ-SUvuAepuxNKMFGw"></script>
<script defer type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>