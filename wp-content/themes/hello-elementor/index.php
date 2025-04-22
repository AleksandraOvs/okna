<?php
/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$seo_meta = '';
if (get_the_ID()) {
    $seo_meta = get_post_meta(get_the_ID(), 'shablon_seo_teksta');
    if (is_array( $seo_meta )) {
        $seo_meta = array_shift($seo_meta);
    } else {
        $seo_meta = '';
    }
}
if (!isset($_GET['is_ajax'])) {
    get_header();
    ?>

    <?php if (mb_strlen($seo_meta) > 50) { ?>
        <main id="ajax-template-part">
            <script>
				var asyncLoad = window.asyncLoad;
				window.asyncLoad = [];
				(async function($) {
					jQuery.holdReady( true );
					let url = document.location.href;

					if (url.indexOf('?') !== -1) {
						url += "&is_ajax=1"
					} else {
						url += "?is_ajax=1"
					}
					await fetch(url).then(function(response) {
						return response.text();
					}).then(function(string) {
						try {
							// Add page content
							document.querySelector('#ajax-template-part').innerHTML =
								string.replaceAll(" e-con e-parent", " e-con e-parent lzl-ed e-lazyloaded");

							jQuery.holdReady( false );
							 
							asyncLoad.forEach(function(func) {
								try {
									func();
                                } catch(e) {
								
                                }
							});

							//reviews widget
							window.elementorFrontend.hooks.doAction('frontend/element_ready/pp-testimonials.default', jQuery('.elementor-widget-pp-testimonials'), jQuery);

							//faq widget
							window.elementorFrontend.hooks.doAction('frontend/element_ready/pp-faq.default', jQuery('.elementor-widget-pp-faq'), jQuery);

							if (typeof countDownHome !== "undefined") {
								// countdown
								countDownHome(jQuery);
							}

							jQuery('.loader-container').remove();

							jQuery('#seo-meta').show();
						} catch (e) {
							jQuery('.loader-container').remove();
							console.log(e);
							console.trace();
						}
					});
				})();
            </script>
        </main>
    <?php }?>
    <?php
}

if (!isset($_GET['is_ajax']) && mb_strlen($seo_meta) > 50) {
    ob_start();
}
$is_elementor_theme_exist = function_exists( 'elementor_theme_do_location' );

if ( is_singular() ) {
    if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'single' ) ) {
        get_template_part( 'template-parts/single' );
    }
} elseif ( is_archive() || is_home() ) {
    if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'archive' ) ) {
        get_template_part( 'template-parts/archive' );
    }
} elseif ( is_search() ) {
    if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'archive' ) ) {
        get_template_part( 'template-parts/search' );
    }
} else {
    if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'single' ) ) {
        get_template_part( 'template-parts/404' );
    }
}
if (!isset($_GET['is_ajax']) && mb_strlen($seo_meta) > 50) {
    ob_clean();
}
if (!isset($_GET['is_ajax']) && mb_strlen($seo_meta) > 50) {?>
    <div class="loader-container" style="position: fixed;
    width: 100%;
    height: 100%;
    background-color: #fff;
    opacity: 0.5;
    top: 0;">
        <div class="custom-loader">
        </div>
    </div>

    <div id="seo-meta" style="margin:0 70px;display:none;">
        <div>
            <?php echo $seo_meta; ?>
        </div>
    </div>
    <?php
}

if (!isset($_GET['is_ajax'])) {
    get_footer();
}
