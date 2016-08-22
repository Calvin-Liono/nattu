<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
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
				<?php dynamic_sidebar("nattu-slogan"); ?>
			</div>
		</div>
	</div>

<?php get_footer();
