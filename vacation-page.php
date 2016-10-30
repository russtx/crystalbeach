<?php /* Template Name: Vacation Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="VacaPageContainer">
                    

                    <div class="pageTitle"><h1><?php the_title(); ?></h1></div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
                        <div id="VacaContent">
			<article id="post-<?php the_ID(); ?>" <?php post_class('vacaPageContent'); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
                        </div>
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

                    <aside class="VacaPageSidebar">
                        <?php dynamic_sidebar('widget-area-12') ?>
                    </aside>
                        
		</section>
		<!-- /section -->
	</main>
		
            </div>


<?php get_footer(); ?>

