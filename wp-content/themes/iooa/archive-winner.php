<?php 
/*
	Template Name: Winner Landing Page
*/
get_header(); ?>

	<main role="main">

		<div class="container">
            <div class="wall">
                <article>
					<div class="no-mask textcontent first"> 
						<h1>INTERNATIONAL<br>OUTSTANDING<br>ACHIEVEMENT<br>AWARDS</h1>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/brand-block.jpg" alt=""/> 
                     </div>
                	<div class="mask">
                        <a href="<?php bloginfo('url'); ?>"><div class="absolute-center"><p>Enter Now</p></div></a>
                    </div>
                </article>
                
                <?php
					$args = array( 'post_type' => 'winner', 'posts_per_page' => 9);
					$wp_query = new WP_Query($args);
						while ( have_posts() ) : the_post(); 
				?>
                <article>
                	<div class="no-mask"> 
						<h1><?php the_field('title_for_home_page_wall'); ?></h1>
                      	<a class="red-btn" href="<?php echo get_permalink(); ?>">Enter Now</a>
                   	 	<?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail('walltile');
							}
						?>
                     </div>
                	<div class="mask"> 
                        <a href="<?php echo get_permalink(); ?>"><div class="absolute-center"><p>VIEW</p> </div></a>
                    </div>
                </article>
                <?php endwhile; ?>
                
                <article>
                	<div class="no-mask textcontent"> 
						<h1>THE JUDGES</h1>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/block-judges.jpg" alt=""/> 
                    </div>
                	<div class="mask"> 
                        <a href="http://www.google.com"><div class="absolute-center"><p>View Judges</p> </div></a>
                    </div>
                </article>
                <article>
                	<div class="no-mask textcontent"> 
						<h1>BOOK A TABLE</h1>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/block-booking.jpg" alt=""/>
                    </div>
                	<div class="mask"> 
                        <a href="http://www.google.com"><div class="absolute-center"><p>Book Now</p> </div></a>
                    </div>
                </article>
            </div>
        </div>

	</main> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
