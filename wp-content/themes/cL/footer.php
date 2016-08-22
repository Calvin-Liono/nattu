<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="container">
			<div class="footer-wrapper">
				<div class="foot-menu-section one-third">
					<h3>USEFUL LINKS</h3>
					<?php wp_nav_menu( array( 'menu' => 'footer_menu' ) ); ?>
				</div>
				<div class="foot-contact-section one-third">
					<h3>CONTACT</h3>
					<a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a>
					<a href="tel:<?php the_field('contact_phone', 'option'); ?>"><?php the_field('contact_phone', 'option'); ?></a>
				</div>
				<div class="foot-social-section one-third">
					<h3>GET SOCIAL</h3>
					<?php
					if( have_rows('social_repeater', 'option') ):
						while ( have_rows('social_repeater', 'option') ) : the_row(); ?>
							<a href="<?php the_sub_field('social_link'); ?>"><img src="<?php the_sub_field('social_icon'); ?>"></a>
						<?php endwhile;
					endif;
					?>
				</div>
				<div class="clear"></div>
				<div class="copyright-section">
					<?php the_field('copyright_text', 'option'); ?>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
