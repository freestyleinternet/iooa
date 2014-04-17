		<div class="social-media">
        	<div class="wrapper">
            	<ul class="social-icons">
                    <li><a class="facebook" href="#"></a></li>
                    <li><a class="linkedin" href="#"></a></li>
                    <li><a class="flickr" href="#"></a></li>
                    <li><a class="youtube" href="#"></a></li>
                    <li><a class="twitter" href="#"></a></li>
                </ul>
            </div>	
        </div>
        <footer>
        	<div class="wrapper">
                <div class="col4">
                    <?php
                        wp_nav_menu(
                            array(
                            'menu'		  => 'foot1',
                            'container'       => '',
                            'menu_class'	=> 'listone'
                        ));
                    ?>
                    <?php
                        wp_nav_menu(
                            array(
                            'menu'		  => 'foot2',
                            'container'       => '',
                            'menu_class'	=> 'listcap'
                        ));
                    ?>
                </div>
                <div class="col4">
                    <?php
                        wp_nav_menu(
                            array(
                            'menu'		  => 'foot3',
                            'container'       => '',
                            'menu_class'	=> 'firstcap'
                        ));
                    ?>
                    <?php
                        wp_nav_menu(
                            array(
                            'menu'		  => 'foot4',
                            'container'       => '',
                            'menu_class'	=> 'listred'
                        ));
                    ?>
                </div>
                <div class="col4">
                    <?php
                        wp_nav_menu(
                            array(
                            'menu'		  => 'foot5',
                            'container'       => '',
                            'menu_class'	=> 'listred'
                        ));
                    ?>
                </div>
       
                <div class="col4">
                    <ul>
                        <li><a href="#">CIOB SITES</a></li>
                        <?php while(the_repeater_field('website_links', 5)): ?>
                        	<li><a href="<?php the_sub_field('webslite_url', 5); ?>"><?php the_sub_field('company_name', 5); ?></a></li>
                        <?php  endwhile; ?>
                    </ul>
                </div>
                
            </div>
		</footer>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/source/twitterfeed.js"></script>
  <?php wp_footer(); ?>

</body>
</html>
