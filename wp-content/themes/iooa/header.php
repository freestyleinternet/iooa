<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "701044eb-d205-461c-95f2-1b96b1e3ee47", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
    
    <div class="topbar">
    	<div class="wrapper">
    		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/cibo-logo.svg" alt=""/></a>
            <ul>
              <li><a href="#">THE CIOB</a></li>
                <li><a href="#">EVENTS</a></li>
          </ul>	
        </div>
    </div>
    
    <header>
    	<div class="wrapper">
        	<div class="world">
            	<h1>INTERNATIONAL<br>OUTSTANDING<br>ACHIEVEMENT<br>AWARDS</h1>
                <h2>Award Night</h2><br>
                <h3>24th April 2014</h3>
            </div>
        </div>
    </header>
    
    <nav>
    	<div class="wrapper">
    		<div class="navigation">
                <?php
                        wp_nav_menu(
                            array(
                            'menu'		  => 'main-menu',
                            'container'       => '',
                            'menu_class'	=> 'holder'
                        ));
                    ?>
            </div>
        </div>
    </nav>

