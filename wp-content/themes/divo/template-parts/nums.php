<?php
if ($nums = carbon_get_theme_option('crb_nums_list')) {
?>

<?php
    if ($nums_bg = carbon_get_theme_option('crb_nums_bg') ){
        $nums_bg_img = wp_get_attachment_image_url($nums_bg, 'full');
    }
?>
    <section class="section-nums" id="numbers" style="background: url(<?php echo (!empty($nums_bg_img)) ? $nums_bg_img  : get_stylesheet_directory_uri().'/images/nums_bg.jpeg'; ?>); background-repeat: no-repeat; background-size: cover;
    background-position: center; background-attachment: fixed;">
        <div class="container">
            <h2 class="title">О нас в цифрах</h2>
            <ul class="nums-list">
                <?php
                foreach ($nums as $num) {
                ?>
                    <li class="num-item">
                        <div class="num-item__num">
                            <span class="js-anim-numbers"><?php echo $num['crb_num_num'] ?></span>
                            <span><?php echo $num['crb_num_word'] ?></span>
                        </div>
                        <p class="num-item__desc"><?php echo $num['crb_num_desc'] ?></p>
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