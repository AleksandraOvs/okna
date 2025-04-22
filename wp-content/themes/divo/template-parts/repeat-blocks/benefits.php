<?php
if ($benefits_list = carbon_get_theme_option('crb_benefits_list')) {
?>
    <section class="section-benefits">
        <div class="container">
        <div class="section-title">
                <h2 class="title">
                    <?php echo carbon_get_theme_option('crb_benefits_head') ?>
                </h2>
                <div class="description">
                    <?php echo carbon_get_theme_option('crb_benefits_text') ?>
                </div>
            </div>

            <ul class="benefits-list">
                <?php
               
                foreach ($benefits_list as $benefit_item){
                    $benefit_item_img = $benefit_item['crb_benefits_img'];
                    $b_img_url = wp_get_attachment_image_url($benefit_item_img, 'full');
                   
                    ?>
                    <li class="benefits-list__item">
                       <img src="<?php echo $b_img_url ?>" alt="Преимущества">
                        <h3> <?php echo $benefit_item['crb_benefits_head'] ?> </h3>
                        <p><?php echo $benefit_item['crb_benefits_desc'] ?></p>
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