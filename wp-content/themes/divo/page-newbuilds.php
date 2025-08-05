<?php
/*Template name: Новостройки
*/
?>

<?php get_header() ?>

<div data-ajax-block="nb-hero-block"></div>
<div data-ajax-block="nb-services"></div>
<div data-ajax-block="nb-works"></div>
<div data-ajax-block="nb-types"></div>
<div data-ajax-block="order"></div>
<div data-ajax-block="express"></div>
<div data-ajax-block="nb-catalog"></div>
<div data-ajax-block="nums"></div>
<div data-ajax-block="pays"></div>
<div data-ajax-block="benefits"></div>
<div data-ajax-block="production"></div>
<div data-ajax-block="complect"></div>
<div data-ajax-block="delivery"></div>
<div data-ajax-block="nb-offer"></div>
<div data-ajax-block="faq"></div>
<div data-ajax-block="nb-feedback"></div>

<div class="container">
    <?php the_content() ?>
</div>

<?php get_footer() ?>