<section class="hero-section">
    <?php
    if ($hero_img = carbon_get_theme_option('crb_hero_image')) {
        $hero_img_url = wp_get_attachment_image_url($hero_img, 'full');

        echo '<img src="' . $hero_img_url . '" />';
    }

    echo '<div class="hero-section__inner"><div class="container">';

    if ($hero_head = carbon_get_theme_option('crb_hero_heading')) {

        echo '<h2>' . $hero_head . '</h2>';
    }

    if ($hero_desc = carbon_get_theme_option('crb_hero_description')) {

        echo '<div>' . $hero_desc . '</div>';
    }

    get_template_part('template-parts/countdown');
    ?>
    <a href="/Marquiz.html" class="btn cta-btn">Рассчитать стоимость</a>
    <?php
    echo '</div></div>';
    ?>



</section>