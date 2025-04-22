<?php
if ($fb_list = carbon_get_theme_option('crb_feedback_list')) {
?>
    <section class="section-feedback">
        <div class="container">
            <div class="section-title">
                <h2 class="title">
                    <?php echo carbon_get_theme_option('crb_feedback_head') ?>
                </h2>
            </div>
            <div class="swiper feedback-slider">
                <ul class="swiper-wrapper">
                    <?php
                    foreach ($fb_list as $fb_item) {
                        $fb_item_img = $fb_item['crb_feedback_img'];
                        $fb_img_url = wp_get_attachment_image_url($fb_item_img, 'full');

                    ?>
                        <li class="swiper-slide feedback-list__item">
                            <img src="<?php echo $fb_img_url ?>" alt="Отзывы наших клиентов">
                            <h4> <?php echo $fb_item['crb_feedback_name'] ?> </h4>
                            <div><?php echo $fb_item['crb_feedback_text'] ?></div>
                        </li>
                    <?php
                    }
                    ?>


                </ul>
                <div class="swiper-pagination slider-pagination"></div>
                
            </div>
            <div class="slider__button-prev">
                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.293259 5.657L5.95026 -1.23616e-07L7.36426 1.414L2.41426 6.364L7.36426 11.314L5.95026 12.728L0.293259 7.071C0.105788 6.88347 0.000472125 6.62916 0.000472148 6.364C0.000472171 6.09884 0.105788 5.84453 0.293259 5.657Z" fill="black" />
                    </svg>

                </div>
                <div class="slider__button-next">
                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.071 7.071L1.414 12.728L0 11.314L4.95 6.364L0 1.414L1.414 0L7.071 5.657C7.25847 5.84453 7.36379 6.09884 7.36379 6.364C7.36379 6.62916 7.25847 6.88347 7.071 7.071Z" fill="black" />
                    </svg>
                </div>
        </div>
    </section>
<?php
}
?>