<?php
/*Template name: Загородные дома
*/
?>

<?php get_header() ?>


<?php
// get_template_part('template-parts/hero-block');
//  get_template_part('template-parts/services');
//  get_template_part('template-parts/works');
//  get_template_part('template-parts/types');
//  get_template_part('template-parts/order');
//  get_template_part('template-parts/express');
//  get_template_part('template-parts/catalog');
//  get_template_part('template-parts/nums');
//  get_template_part('template-parts/pays');
//  get_template_part('template-parts/benefits');
//  get_template_part('template-parts/production');
//  get_template_part('template-parts/complect');
//  get_template_part('template-parts/delivery');
//  get_template_part('template-parts/offer');
//  get_template_part('template-parts/faq');
//  get_template_part('template-parts/feedback')
?>

<div data-ajax-block="houses-hero-block"></div>
<div data-ajax-block="houses-services"></div>
<div data-ajax-block="houses-works"></div>
<div data-ajax-block="houses-types"></div>
<div data-ajax-block="order"></div>
<div data-ajax-block="express"></div>
<div data-ajax-block="houses-catalog"></div>
<div data-ajax-block="nums"></div>
<div data-ajax-block="pays"></div>
<div data-ajax-block="benefits"></div>
<div data-ajax-block="production"></div>
<div data-ajax-block="complect"></div>
<div data-ajax-block="delivery"></div>
<div data-ajax-block="houses-offer"></div>
<div data-ajax-block="faq"></div>
<div data-ajax-block="houses-feedback"></div>

<!-- <div class="container">
    <?php //the_content() ?>
</div> -->
<div class="container">
    <?php if (get_field("shablon_seo_teksta")) { ?>
        <?php the_field("shablon_seo_teksta"); ?>
    <?php } ?>
</div>

<?php get_footer() ?>