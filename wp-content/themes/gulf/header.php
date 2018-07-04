<?php wp_head() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gulf</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="it-rating" content="it-rat-6b125100fa800598990d53c01059eed2" />
	<link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"/>
</head>
<body>
	<!-- header -->
		<header>
			<div class="header_top">
			<span><a href="https://www.facebook.com/GulfOilUkraine/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/icon-fb.svg" alt="">Follow us</a></span>
				<p>

				<? echo qtranxf_generateLanguageSelectCode ('image'); ?>
					<?php
                            if(function_exists('icl_get_languages')){
                                $arr_lg = icl_get_languages('skip_missing=0');
                                if(!empty($arr_lg)){ ?>
                                    <?php
                                    $lang_html = '';
                                    foreach($arr_lg as $item){
                                        if (in_array($item['language_code'], array(''))) continue;
                                        $lang_html .= '<li class="language"><a title="'.esc_attr($item['translated_name']).'" href="'.esc_url($item['url']).'"></a></li>';
                                    }
                                    if($lang_html){
                                        echo '<ul class="dropdown-menu menu-depth-1">'.$lang_html.'</ul>';
                                    }
                                    ?>                     
                                <?php
                                }
                            }
                            ?>
				</p>
			</div>
			<menu class="header_menu">
				<div class="wrapper">
				<nav class="header_menu_nav">
				<?php
									wp_nav_menu( array(
										'theme_location' => 'menu_header_left',
										'menu_id'        => '',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
				?>
					<a href="<?php echo get_home_url ( ) ; ?>"><img class="logo_header" src="<?php bloginfo('template_url'); ?>/src/img/icons/svg/Gulf-logo.svg" alt=""></a>
					<?php
									wp_nav_menu( array(
										'theme_location' => 'menu_header_right',
										'menu_id'        => '',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
					?>
				</nav>
				</div>
				<img class="logo_header logo_header_xs" src="<?php bloginfo('template_url'); ?>/src/img/Gulf-logo.png" alt="">
			</menu>
			<!-- gamburger -->
			<section class="xsMenu">
				<div id="menu-burger">
				  <span class="menu-icon"></span>
				</div>
				<div id="overlay-menu">
				<nav role='navigation'>
				<?php
									wp_nav_menu( array(
										'theme_location' => 'menu_header_adaptive',
										'menu_id'        => '',
										'menu_class'        => '',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
				?>
				</nav>  
				</div>
			</section>
			<!-- gamburger -->
		</header>
