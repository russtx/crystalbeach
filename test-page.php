<?php

/*Template Name: New*/

get_header(); ?>

<div class="clearfix"></div>

	<main role="main">
		<!-- section -->
		<section class="newPageContainer">
                  
                        

                     <div class="slider">
                            <?php echo do_shortcode('[print_continuous_slider_plus_lightbox]'); ?>   
                     </div>

                     <div class="showalways"> 
                        <?php echo do_shortcode('[vrcalendar_searchbar id="1" /]'); ?> 
                     </div>          

                     <div class="vacaHomes">

                        <h2 class="orangeBlock">Vacation Rental homes</h2>  

                     </div>   
          <div class="homeGallery grid">    
                     <?php
                $args = array( 'post_type' => 'rental-home','cat'      => 3,'orderby' => 'menu_order date',	'order'   => 'ASC',  'posts_per_page' => '200' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
<div class="rentalHomes grid-item">
<?php $key="external_link_key"; $single=1; $external_link = get_post_meta($post->ID, $key, $single); ?>  

<?php if($external_link == ""){ ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php ;}
else{ ?>
	<a href="<?php echo $external_link; ?>" title="<?php the_title(); ?>" target="_blank"> <?php the_post_thumbnail(); ?></a> <?php } ?>
                        <h4><?php the_content(); ?></h4>
</div>                            

<?php endwhile; ?>   
                        
          </div><!--homeGallery -->              
		</section>
		<!-- /section -->
                <div class="clearfix"></div> 
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


