<?php
if ($services_list = carbon_get_post_meta(get_the_ID(), 'crb_services_items')) {
?>
    <section class="section-services">
        <div class="container">
            <div class="section-title">
                <h2 class="title">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'crb_services_head') ?>
                </h2>
                <div class="description">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'crb_services_desc') ?>
                </div>
            </div>

            <ul class="services-list">
                <?php
                foreach ($services_list as $services_item){
                    $services_img = $services_item['crb_service_img'];
                    $service_img_url = wp_get_attachment_image_url($services_img, 'crb_service_img');
                    ?>
                    <li class="services-list__item">
                        <img src="<?php echo $service_img_url ?>" alt="<?php echo carbon_get_post_meta(get_the_ID(), 'crb_services_head') ?>">

                        <h3> <?php echo $services_item['crb_service_head'] ?> </h3>

                        <p><?php echo $services_item['crb_service_desc'] ?></p>

                        <?php 
                            if ($cta_btn = carbon_get_theme_option('crb_cta_button')){
                                echo '<a class="btn" href="'.$cta_btn.'">Узнать стоимость</a>';
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