<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

	<head>

		<meta charset="<?php bloginfo('charset'); ?>">

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>



		<link href="//www.google-analytics.com" rel="dns-prefetch">

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon1.ico" rel="shortcut icon">

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans:400,800,700,600,300,300italic,400italic,600italic,700italic,800italic|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		

		<meta name="viewport" content="width=device-width" />

		<meta name="description" content="<?php bloginfo('description'); ?>">



		<?php wp_head(); ?>

		<script>

        // conditionizr.com

        // configure environment tests

        conditionizr.config({

            assets: '<?php echo get_template_directory_uri(); ?>',

            tests: {}

        });



        </script>

        

	</head>

	<body <?php body_class(); ?>>



		<!-- wrapper -->

		<div class="wrapper">



			<!-- header -->

			<header class="header clear" role="banner">

                                        

                            

                                        <div class="socialIcons">

                                        <a href="https://www.facebook.com/crystalbeachcom-189056824450366/?fref=ts" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/facebook35.png" alt="facebook" >
                                        </a>
                                                
                                         <a href="https://twitter.com/CrystalBeach" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/twitter35.png" alt="twiiterk" >
                                        </a>

                                        <a href="https://www.instagram.com/crystalbeachcom/" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/instagram35.png" alt="instagram" >
                                        </a>

                                        </div>    

                                           

                            

                            <div class="headerTitle"><h1>Crystal Beach.com</h1></div>

                                        

                            

					<!-- logo -->

					<div class="logo">

						<a href="<?php echo home_url(); ?>">

							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->

							<img src="<?php echo get_template_directory_uri(); ?>/img/cb_logo.png" alt="Logo" class="logo-img">

						</a>

                                            </div> 

					<!-- /logo -->

                                            

					



					<!-- nav -->

					 

  



					<nav class="nav" role="navigation">

					<input class="menu-btn" type="checkbox" id="menu-btn" />	

					<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

						

						<?php html5blank_nav(); ?>

					</nav>

					<!-- /nav -->



			</header>

			<!-- /header -->

