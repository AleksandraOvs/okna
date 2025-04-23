<?php
if ($catalog_list = carbon_get_theme_option('crb_catalog')) {
?>
    <section class="section-catalog">
        <div class="container">
            <div class="section-title">
                <h2 class="title">
                    <?php echo carbon_get_theme_option('crb_production_head') ?>
                </h2>
            </div>

            <ul class="catalog-list">
                <?php
                foreach ($catalog_list as $catalog_item) {
                    $cat_img = $catalog_item['crb_catalog_img'];
                    $cat_img_url = wp_get_attachment_image_url($cat_img, 'full');
                ?>
                    <li class="catalog-list__item">
                        <img class="catalog__img" src="<?php echo $cat_img_url ?>" alt="Каталог окон" alt="">
                        <h3> <?php echo $catalog_item['crb_catalog_head'] ?> </h3>
                        <div class="catalog__price"><?php echo $catalog_item['crb_catalog_price'] ?></div>
                        <div class="catalog-list__item__content">
                            <?php echo $catalog_item['crb_catalog_text'] ?>
                        </div>
                        <?php
                        if ($cat_link = $catalog_item['crb_catalog_button']) {
                            echo '<a class="btn cta-button" href="' . $cat_link . '">Заказать</a>';
                        }
                        ?>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </section>
<?php
}
?>