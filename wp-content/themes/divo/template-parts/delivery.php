<?php
if ($del_list = carbon_get_theme_option('crb_delivery_list')) {
?>
    <section class="section-delivery">
        <div class="container">
        <div class="section-title">
                <h2 class="title">
                   Доставка
                </h2>
            </div>
            <ul class="delivery-list">
                <?php
                foreach ($del_list as $del_item){
                    $del_item_img = $del_item['crb_delivery_img'];
                    $d_img_url = wp_get_attachment_image_url( $del_item_img, 'full');
                   
                    ?>
                    <li class="delivery-list__item">
                       <img src="<?php echo $d_img_url ?>" alt="Доставка">
                        <h3> <?php echo $del_item['crb_delivery_head'] ?> </h3>
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
