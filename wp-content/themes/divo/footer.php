<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divo
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
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

		<?php
		if (is_active_sidebar('footer-widget1')) {
			echo '<div class="footer-widget">';
			dynamic_sidebar('footer-widget1');
			echo '</div>';
		}
		?>

		<?php
		if (is_active_sidebar('footer-widget2')) {
			echo '<div class="footer-widget">';
			dynamic_sidebar('footer-widget2');
			echo '</div>';
		}
		?>

		<?php
		if (is_active_sidebar('footer-widget3')) {
			echo '<div class="footer-widget">';
			dynamic_sidebar('footer-widget3');
			echo '</div>';
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
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>