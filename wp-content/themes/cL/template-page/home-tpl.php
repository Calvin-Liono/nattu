<?php
/*
 *  Template name: Home Page
 *
*/

get_header(); ?>

<div class="owl-carousel" id="owl-project">
    <?php $images = get_field('home_page_banner');
    foreach ($images as $image): ?>
        <img class="lazyOwl" data-src="<?php echo $image['sizes']['banner']; ?>" src="<?php echo $image['sizes']['banner']; ?>">
    <?php endforeach;?>
</div>

<div class="cta-div">
    <div class="container">
        <?php
        if( have_rows('home_cta') ):
            while ( have_rows('home_cta') ) : the_row(); ?>
                <div class="cta-block">
                    <div class="cta-heading">
                        <?php the_sub_field('cta_heading'); ?>
                    </div>
                    <div class="cta-image">
                        <img src="<?php the_sub_field('cta_image'); ?>">
                    </div>
                    <div class="cta-text">
                        <?php the_sub_field('cta_excerpt'); ?>
                    </div>
                </div>
            <?php endwhile;
        endif;
        ?>
        <div class="clear"></div>
        <div class="shop-button">
            <?php dynamic_sidebar("shop-button"); ?>
        </div>
    </div>
</div>

<script>
    jQuery(window).load(function(){
        jQuery("#owl-project").owlCarousel({
            items : 1,
            lazyLoad : true,
            loop : true,
            margin : 0,
            autoplay : true,
            nav : true,
            navigationText : ["left","right"],
        });
    });
</script>

<?php
get_footer();

