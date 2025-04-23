<?php
if ($order_list = carbon_get_theme_option('crb_order_list')) {
?>
    <section class="section-order">
        <div class="container">
            <div class="section-title">
                <h2 class="title">
                    Как сделать заказ
                </h2>
            </div>

            <div class="order-list">
                <?php
                $i = 0;
                foreach ($order_list as $order_item) {
                    $i++;
                ?>
                    <div class="order-list__item">
                        <div class="num">
                            <div><?php echo $i ?></div>
                        </div>

                        <div class="order-list__item__content">
                            <h3> <?php echo $order_item['crb_order_item_head'] ?> </h3>
                            <p><?php echo $order_item['crb_order_item_desc'] ?></p>
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