<?php /* Template Name: Full Width Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="full-pageContainer">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('full-pageContent'); ?>>

				<?php the_content(); ?>

				

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
		<div id="fullWidthPageFooter" class="footerWidgetArea">
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
