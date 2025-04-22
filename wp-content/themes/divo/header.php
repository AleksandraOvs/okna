<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'divo'); ?></a>

		<header id="masthead" class="site-header">

			<div class="site-header__top">
				<div class="container">
					<div class="site-header__top__left">
						<div class="site-logo">
							<a href="<?php echo get_home_url();  ?>">
							<?php
							$header_logo = get_theme_mod('header_logo');
							$img = wp_get_attachment_image_src($header_logo, 'full');
							if ($img) : echo '<img src="' . $img[0] . '" alt="">';
							endif;
							?>
							</a>
						</div><!-- .site-branding -->
					</div>


					<div class="site-links">
						<?php
						if ($site_buttons = carbon_get_theme_option('crb_header_links')) {
						?>
							<div class="site-links__list">
								<?php
								foreach ($site_buttons as $site_button) {
								?>
									<a href="<?php echo $site_button['crb_hlink_link'] ?>" class="btn btn-grey">
										<?php echo $site_button['crb_hlink_text'] ?>
									</a>
								<?php
								}
								?>
							</div>
						<?php
						}
						?>
						<div class="site-links__contacts">
							<?php
							if ($contact_shedule = carbon_get_theme_option('crb_shedule')) {
								echo '<span>' . $contact_shedule . '</span>';
							}
							?>
							<?php
							if ($contact_phone = carbon_get_theme_option('crb_phone_link')) {
							?>
								<a class="link _phone" href="<?php echo $contact_phone ?>">
									<span>
									<?php
									if ($contact_phone_text = carbon_get_theme_option('crb_phone')) {
										echo $contact_phone_text;
									} else {
										echo 'Кнопка';
									}
									?>
									</span>
								</a>
							<?php
							}
							?>
						</div>

						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>

					</div><!-- .site-links and contacts -->

					
				</div><!-- .container -->
			</div><!-- .site-header__top -->

			<div class="header-navigation">
				<div class="container">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu'            => '',
								'container'       => 'nav',
								'container_class' => 'main-navigation',
								'container_id'    => '',
								//'menu_class'      => 'menu',
								'menu_id'         => 'site-navigation',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								//'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							)
						);
						?>
					
				</div>
			</div>
		</header><!-- #masthead -->