<?php get_header(); ?>

	<main id="main" role="main">
		<div class="wrapper">
			<div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
			<?php while ( have_posts() ) : the_post(); ?>
    			
                <section>
                    <div class="head">
                    	<h1><?php the_title(); ?></h1>
                    </div>
                    <?php the_content(); ?>
                    <div class="downloads">
                    	<h2>ENTER NOW</h2>
                    	<p>Lorem Ipsum is simply dummy text of the printing the and typesetting industry. Lorem Isum has been the to industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" target="_blank">DOWNLOAD THE FORM (pdf 134kb)</a>
                    </div>

                </section>
                
                <aside>
                	<div class="steps-bx">
                    	<h2>HOW TO ENTER</h2>	
                        <dl>
                          <dt>1</dt>
                          <dd>Read the rules of entry</dd>
                          <dt>2</dt>
                          <dd>Download and complete the entry form</dd>
                          <dt>3</dt>
                          <dd>Send to address: running here. running here. running here. running here.</dd>
                        </dl>
                    </div>
                    
                  	<div class="border-bx">
                   		<h2>SPONSORS</h2>
                    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/morgan-sindall-logo.jpg" alt="logo name"/>
                    </div>
                    
                    <div class="awards-bx">
                   		<h2>THE NIGHT OF THE AWARDS</h2>
                        <a class="red-btn thinner" href="#">READ MORE</a>
                    </div>
                    
                    <div id="slideshow-1">
                        <div id="cycle-1" class="cycle-slideshow"
                            data-cycle-slides=" .slide"
                            data-cycle-timeout="0"
                            data-cycle-prev=".cycle-prev"
                            data-cycle-next=".cycle-next"
                            data-cycle-caption="#alt-caption"
                            data-cycle-caption-template="{{}}"
                            data-cycle-fx="tileBlind">
                            <div class="cycle-prev"></div>
                            <div class="cycle-next"></div>
                            <div class="slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-big.jpg" alt=""/></div>
                            <div class="slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-big1.jpg" alt=""/></div>
                            <div class="slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-big.jpg" alt=""/></div>
                            <div class="slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-big1.jpg" alt=""/></div>
                            <div class="slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-big.jpg" alt=""/></div>
                            <div class="slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-big1.jpg" alt=""/></div>
                            <div class="slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-big.jpg" alt=""/></div>
                            <div class="slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-big1.jpg" alt=""/></div>
                        </div>
                    </div>
                    
                    <div id="slideshow-2">
                        <div id="cycle-2" class="cycle-slideshow"
                            data-cycle-slides=".slides"
                            data-cycle-timeout="0"
                            data-cycle-fx="carousel"
                            data-cycle-carousel-fluid=true
                            data-allow-wrap="false">
                            <div class="slides"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-thumb.jpg" alt=""/></div>
                            <div class="slides"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-thumb1.jpg" alt=""/></div>
                            <div class="slides"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-thumb.jpg" alt=""/></div>
                            <div class="slides"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-thumb1.jpg" alt=""/></div>
                            <div class="slides"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-thumb.jpg" alt=""/></div>
                            <div class="slides"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-thumb1.jpg" alt=""/></div>
                            <div class="slides"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-thumb.jpg" alt=""/></div>
                            <div class="slides"><img src="<?php bloginfo('template_directory'); ?>/assets/images/slide-thumb1.jpg" alt=""/></div>
                        </div>
                    </div>
         
                </aside>
                
            <?php endwhile; ?>
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
