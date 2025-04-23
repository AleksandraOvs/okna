<?php
if ($works_list = carbon_get_theme_option('crb_works_items')) {
?>
    <section class="section-services">
        <div class="container">
            <div class="section-title">
                <h2 class="title">
                    <?php echo carbon_get_theme_option('crb_works_head') ?>
                </h2>
                <div class="description">
                    <?php echo carbon_get_theme_option('crb_works_desc') ?>
                </div>
            </div>

            <div class="works-list">
                <?php
                foreach ($works_list as $works_item){
                    $works_img = $works_item['crb_work_img'];
                    $works_img_url = wp_get_attachment_image_url($works_img, 'full');
                    ?>
                    <a href="<?php echo $works_img_url ?>" data-fancybox="gallery" class="works-list__item">
                        <img src="<?php echo $works_img_url ?>" alt="<?php echo carbon_get_post_meta(get_the_ID(), 'crb_work_head') ?>">

                </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php
}
?>