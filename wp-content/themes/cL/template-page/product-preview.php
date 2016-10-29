<?php
/*
 *  Template name: Product Overview Page
 *
*/

get_header(); ?>
<?php wp_reset_query(); ?>
    <div class="inner-page-section">
        <div class="container">
            <div class="inner-center">
                <div class="inner-heading">
                    <?php the_title(); ?>
                </div>
                <div class="inner-content">
                    <?php the_content(); ?>
                </div>
                <div class="repeater-container">
                    <?php
                    if( have_rows('product_overview_repeater') ):
                        while ( have_rows('product_overview_repeater') ) : the_row(); ?>
                            <div class="repeater-product">
                                <div class="repeater-left">
                                    <img src="<?php the_sub_field('product_image'); ?>">
                                </div>
                                <div class="repeater-right">
                                    <div class="repeater-heading">
                                        <?php the_sub_field('product_heading'); ?>
                                    </div>
                                    <div class="repeater-content">
                                        <?php the_sub_field('product_description'); ?>
                                    </div>
                                    <?php if(get_sub_field('product_link')){ ?>
                                        <div class="repeater-button">
                                            <a href="<?php the_sub_field('product_link'); ?>">View more</a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="clear"></div>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <?php dynamic_sidebar("nattu-slogan"); ?>
            </div>
        </div>
    </div>

<?php get_footer();
