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
    		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/cibo-logo.svg" alt=""/></a>
            <?php if( have_rows('top_links', 5) ): ?>
            <ul>
              	<?php while(the_repeater_field('top_links', 5)): ?>
                	<li><a href="<?php the_sub_field('website_address', 5); ?>" target="_blank"><?php the_sub_field('link_name', 5); ?></a></li>
                <?php  endwhile;  ?>
          </ul>
          <?php endif; ?>	
        </div>
    </div>
    
    <header>
    	<div class="wrapper">
        	<div class="world">
                <h1><a href="<?php bloginfo('url'); ?>"><?php echo the_field('banner_strap_line', 5); ?></a></h1>
                <?php if( get_field('awards_night_date', 5) ): ?>
                	<h2>Award Night</h2><br>
                	<h3><?php echo the_field('awards_night_date', 5); ?></h3>
                <?php endif; ?>
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

