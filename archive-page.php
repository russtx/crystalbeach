<?php
/*
Template Name: Archives Page
*/
get_header(); ?>

	<main role="main">
            <?php echo do_shortcode('[smartslider3 slider=1]'); ?>
		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

            <div class="footerWidgetArea">
                <div class="footer-widget, footer-1">
                <?php dynamic_sidebar('widget-area-3') ?>
                </div>
                <div class="footer-widget, footer-2">
                <?php dynamic_sidebar('widget-area-4') ?>
                </div>
                <div class="footer-widget, footer-3">
                <?php dynamic_sidebar('widget-area-5') ?>
                </div>
            </div>

<?php get_footer(); ?>


