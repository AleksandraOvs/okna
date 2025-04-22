<?php
if ($prods_list = carbon_get_theme_option('crb_production_items')) {
?>
    <section class="section-production">
        <div class="container">
            <div class="section-title">
                <h2 class="title">
                    Производство
                </h2>
            </div>
            <ul class="production-list">
                <?php
                foreach ($prods_list as $prod_item) {
                    $prod_item_img = $prod_item['crb_production_img'];
                    $p_img_url = wp_get_attachment_image_url($prod_item_img, 'full');

                ?>
                    <li class="production-list__item">
                        <img src="<?php echo $p_img_url ?>" alt="Производство">
                        <h3> <?php echo $prod_item['crb_production_head'] ?> </h3>
                        <p><?php echo $prod_item['crb_production_text'] ?></p>
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