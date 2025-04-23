<?php if ($faq_items = carbon_get_theme_option('crb_faq_list')) {
?>
    <section class="section _faq-section" id="faq-section">
        <div class="container">
            <?php
            if ($why_head = carbon_get_theme_option('crb_faq_head')) {
            ?>
                <div class="section-title">
                    <h2 class="fromTop"><?php echo $why_head ?></h2>
                </div>
            <?php
            }
            ?>
            <div id="faq">
                <?php
                foreach ($faq_items as $faq_item) {
                ?>
                    <div class="faq-item">
                        <div class="faq-question-head" class="">
                            <h3><?php echo $faq_item['crb_faq_question'] ?></h3>
                            <div class="faq-marker"></div>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo $faq_item['crb_faq_answer'] ?></p>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php
}

?>