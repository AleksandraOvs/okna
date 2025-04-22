<?php
if ($ex_photos = carbon_get_theme_option('crb_express_photos')) {
?>
    <section class="section-express">
        <div class="container">
            <div class="section-express__photo">
                <?php
                foreach ($ex_photos as $ex_photo) {
                    $photo = $ex_photo['crb_express_img'];
                    $photo_img = wp_get_attachment_image_url($photo, 'full');
                    echo '<img class="exp__photo" src="' . $photo_img . '" alt="Срочное изготовление окон" />';
                }
                ?>
            </div>
            <div class="section-express__content">
                <h2> <?php echo carbon_get_theme_option('crb_express_head') ?> </h2>
                <div>
                    <?php echo carbon_get_theme_option('crb_express_text') ?>
                </div>
                <?php
                if ($cta_btn = carbon_get_theme_option('crb_cta_button')) {
                    echo '<a class="btn cta-btn" href="' . $cta_btn . '">Рассчитать стоимость</a>';
                }
                ?>

            </div>

        </div>
    </section>
<?php
}
?>