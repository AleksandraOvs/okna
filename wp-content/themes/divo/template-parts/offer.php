<?php
if ($offer = carbon_get_post_meta(get_the_ID(), 'crb_offer_bg')) {
    $offer_img = wp_get_attachment_image_url($offer, 'full');
?>

    <section class="section-offer" id="offer" style="background: url(<?php echo (!empty($offer_img)) ? $offer_img  : get_stylesheet_directory_uri().'/images/x7.webp'; ?>); background-repeat: no-repeat; background-size: cover;
    background-position: center; background-attachment: fixed;">
        <div class="container">
            <h2 class="title"><?php echo $offer_head = carbon_get_post_meta(get_the_ID(), 'crb_offer') ?></h2>
            <?php 
                if ($offer_text = carbon_get_post_meta(get_the_ID(), 'crb_offer_text')){
                    ?>
                    <div class="offer-text">
                        <?php echo $offer_text ?>
                    </div>
                    <?php
                }
            ?>
        </div>
    </section>
<?php
}
?>