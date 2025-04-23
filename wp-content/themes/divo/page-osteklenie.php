<?php
/*Template name: Остекление балконов
*/
?>

<?php get_header() ?>


<?php get_template_part('template-parts/hero-block') ?>
<?php get_template_part('template-parts/services') ?>
<?php get_template_part('template-parts/works') ?>
<?php get_template_part('template-parts/types') ?>
<?php get_template_part('template-parts/repeat-blocks/order') ?>
<?php get_template_part('template-parts/repeat-blocks/express') ?>
<?php get_template_part('template-parts/repeat-blocks/catalog') ?>
<?php get_template_part('template-parts/repeat-blocks/nums') ?>
<?php get_template_part('template-parts/repeat-blocks/pays') ?>
<?php get_template_part('template-parts/repeat-blocks/benefits') ?>
<?php get_template_part('template-parts/repeat-blocks/production') ?>
<?php get_template_part('template-parts/repeat-blocks/complect') ?>
<?php get_template_part('template-parts/repeat-blocks/delivery') ?>
<?php get_template_part('template-parts/offer') ?>
<?php get_template_part('template-parts/repeat-blocks/faq') ?>
<?php get_template_part('template-parts/repeat-blocks/feedback') ?>



<!-- <div data-ajax-block="hero-block"></div>
<div data-ajax-block="services"></div>
<div data-ajax-block="works"></div>
<div data-ajax-block="types"></div>
<div data-ajax-block="repeat-blocks/order"></div>
<div data-ajax-block="repeat-blocks/express"></div>
<div data-ajax-block="repeat-blocks/catalog"></div>
<div data-ajax-block="repeat-blocks/nums"></div>
<div data-ajax-block="repeat-blocks/pays"></div>
<div data-ajax-block="repeat-blocks/benefits"></div>
<div data-ajax-block="repeat-blocks/production"></div>
<div data-ajax-block="repeat-blocks/complect"></div>
<div data-ajax-block="repeat-blocks/delivery"></div>
<div data-ajax-block="offer"></div>
<div data-ajax-block="repeat-blocks/faq"></div>
<div data-ajax-block="repeat-blocks/feedback"></div> -->

<div class="container">
    <?php the_content() ?>
</div>

<?php get_footer() ?>