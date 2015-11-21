<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php 
	dp_head_common();
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	
    global $current_user;

    $posts_allowance =  get_user_meta( $current_user->ID, 'allowance_limit' );

	wp_head();

?>

<link rel='stylesheet' id='bootstrap-css'  href='http://happystaffers.com/wp-content/plugins/easy-bootstrap-shortcodes/styles/bootstrap-oscitas.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='http://happystaffers.com/wp-content/plugins/easy-bootstrap-shortcodes/styles/bootstrap-oscitas.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-fa-icon-css'  href='http://happystaffers.com/wp-content/plugins/easy-bootstrap-shortcodes/styles/font-awesome.min.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrapstyle-css'  href='http://happystaffers.com/wp-content/plugins/bootstrap-collapse/css/bootstrap.css?ver=4.1.1' type='text/css' media='all' />

<link rel='stylesheet' id='newStyle-css'  href='http://happystaffers.com/wp-content/themes/atlas/css/newStyle.css' type='text/css' media='all' />
</head>
<body <?php body_class(); ?> >
<div class="spacer20"></div>
<header>
	<?php if(get_field('display_topbar','option')) { ?>
	<section id="top-bar">

		<div class="wrapper">

			<div class="three_fourth" id="topintro">

				<?php if(is_user_logged_in()) { ?>

					<?php if(tdp_hasMembershipLevel()) { ?>

						<?php 

						 get_currentuserinfo();

      						printf(__("Hello <a href='%s'>%s</a>, you can still post <strong>%s</strong> listings. <a href='%s'>Submit listing</a> | <a href='%s'>Manage Listings</a> | <a href='%s'>Logout</a>", "atlas"), tdp_url("account"), $current_user->display_name, $posts_allowance[0], get_field('submit_new_listing_page','option'), get_field('listings_management_page','option'), wp_logout_url( home_url() ) );
       					
       					?>

					<?php } else { ?>

						<?php 

						 get_currentuserinfo();

      						printf(__("Hello <a href='%s'>%s</a>, <a href='%s'>Logout</a>", "atlas"), tdp_url("account"), $current_user->display_name, wp_logout_url( get_permalink() ) );
       					
       					?>

					<?php } ?>
				
				<?php } else { ?>

					<?php the_field('top_bar_intro_text','option');?>

				<?php } ?>

			</div>

			<div class="one_fourth last" id="top-socials">
				<?php echo dp_social_icon(); ?>
				<?php 

				if(get_field('add_lang_switcher','option')) {

					do_action('icl_language_selector'); 

				}

				?>
			</div>

		</div>

	</section>

	<?php } ?>
	
	<div id='mobile-menu'>
			
		<div class="wrapper">

				<?php dropdown_menu( array(

						'theme_location'=>'primary_menu',
								
						// You can alter the blanking text eg. "- Menu Name -" using the following
						'dropdown_title' => '-- Main Menu --',

						// indent_string is a string that gets output before the title of a
						// sub-menu item. It is repeated twice for sub-sub-menu items and so on
						'indent_string' => '- ',

						'menu_class' => 'sf-menu',

						// indent_after is an optional string to output after the indent_string
						// if the item is a sub-menu item
						'indent_after' => ''

					) );
				?>

			<div id="select-icon" class="icon-sort"></div>
		
		</div>

	</div>

	<section id="header-container">

		<div class="wrapper">

			<section id="logo-wrapper" class="one_fourth">
				
				<?php  
									
					/*
					*	display the theme logo by checking if the default logo was overwritten in the backend.
					*/
					echo dp_logo(get_template_directory_uri().'/images/logo.png');
									
				?>

			</section><!-- end logo -->

			<section id="navigation-wrapper" class="three_fourth last">
				<nav class="col-md-10">
				<?php 
				if ( is_user_logged_in() ) 
				{ 
					// $theUser = wp_get_current_user();
					// if(get_object_vars($theUser)['roles'][0] == "subscriber")
					// {wp_nav_menu( array('theme_location' => 'primary_menu','menu_class' => 'sf-menu')); }
					
					// else if (get_object_vars($theUser)['roles'][0] == "basic_contributor")
					// {wp_nav_menu( array('menu' => 'Vendor Nav','menu_class' => 'sf-menu')); }
					
					// else
					// {wp_nav_menu( array('theme_location' => 'primary_menu','menu_class' => 'sf-menu')); }
					wp_nav_menu( array('theme_location' => 'primary_menu','menu_class' => 'sf-menu'));
				}
				else 
				{ wp_nav_menu(array('menu' => 'Visitor Nav', 'menu_id' => 'menu')); };
				//wp_nav_menu( array('theme_location' => 'primary_menu','menu_class' => 'sf-menu'));
				?>
				
				</nav>
				<button class="btn btn-hs login-btn col-md-2"><a href="http://happystaffers.com/login">LOGIN/REGISTER</a></button>
			</section><!-- end navigation -->
			<!--<section class="one_fourth last">
				<button class="btn btn-warning"><a href="http://happystaffers.com/login">Login/Register</a></button>
			</section>-->
			<div class="clearboth"></div>

		</div>

	</section>
	<div id="header-border"></div>
</header>