<?php
if ($types_list = carbon_get_post_meta(get_the_ID(), 'crb_types_items')) {
?>
    <section class="section-types">
        <div class="container">
            <div class="section-title">
                <h2 class="title">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'crb_types_head') ?>
                </h2>
            </div>

            <ul class="types-list">
                <?php
                foreach ($types_list as $types_item) {
                    $types_img = $types_item['crb_type_img'];
                    $types_img_url = wp_get_attachment_image_url($types_img, 'crb_type_img');
                ?>
                    <li class="types-list__item">
                        <img src="<?php echo $types_img_url ?>" alt="Виды окон">

                        <h3> <?php echo $types_item['crb_type_head'] ?> </h3>

                        <p><?php echo $types_item['crb_type_desc'] ?></p>

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