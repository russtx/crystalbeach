<?php
/* Template Name: Search Bar Sesults */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="newPageContainer">

		<div class="slider">
                            <?php echo do_shortcode('[print_continuous_slider_plus_lightbox]'); ?>   
                     </div>

                    <div class="clearfix"></div>	

                    <div class="searchResults showalways">
                        <?php echo do_shortcode('[vrcalendar_searchbar_result /]'); ?>
                    </div>

		</section>
		<!-- /section -->
	</main>
            
            <div id="PageFooter" class="footerWidgetArea">
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


