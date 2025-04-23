<?php
/*Template name: Остекление балконов
*/
?>

<?php get_header() ?>


<?php
get_template_part('template-parts/hero-block');
 get_template_part('template-parts/services');
 get_template_part('template-parts/works');
 get_template_part('template-parts/types');
 get_template_part('template-parts/order');
 get_template_part('template-parts/express');
 get_template_part('template-parts/catalog');
 get_template_part('template-parts/nums');
 get_template_part('template-parts/pays');
 get_template_part('template-parts/benefits');
 get_template_part('template-parts/production');
 get_template_part('template-parts/complect');
 get_template_part('template-parts/delivery');
 get_template_part('template-parts/offer');
 get_template_part('template-parts/faq');
 get_template_part('template-parts/feedback')
?>

<!-- <div data-ajax-block="hero-block"></div>
<div data-ajax-block="services"></div>
<div data-ajax-block="works"></div>
<div data-ajax-block="types"></div>
<div data-ajax-block="order"></div>
<div data-ajax-block="express"></div>
<div data-ajax-block="catalog"></div>
<div data-ajax-block="nums"></div>
<div data-ajax-block="pays"></div>
<div data-ajax-block="benefits"></div>
<div data-ajax-block="production"></div>
<div data-ajax-block="complect"></div>
<div data-ajax-block="delivery"></div>
<div data-ajax-block="offer"></div>
<div data-ajax-block="faq"></div>
<div data-ajax-block="feedback"></div> -->

<div class="container">
    <?php the_content() ?>
</div>

<?php get_footer() ?>