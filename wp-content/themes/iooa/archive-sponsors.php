<?php 
/*
	Template Name: Sponsors Landing Page
*/
get_header(); ?>

	<main id="main" role="main">
		<div class="wrapper">
			<div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>

                <section class="posts">
					<?php
						$custom_query = new WP_Query( 'pagename=sponsors' );
							while ( $custom_query->have_posts() ) : $custom_query->the_post();
							?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <?php
							endwhile;
						// reset post data (important!)
						wp_reset_postdata();
					?>
                    
                     <?php 
						  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						  
						  $args = array( 'post_type' => 'sponsors', 'posts_per_page' => 6);
						  $wp_query = new WP_Query($args);
						  
						  while ( have_posts() ) : the_post(); 
					  ?>
                      <article>
                          <a href="<?php echo get_permalink(); ?>">
                              <?php 
                                  if ( has_post_thumbnail() ) { 
                                      the_post_thumbnail('sponsor', array('class' => 'alignright'));
                                  }
                              ?>
                              <h1><?php the_title(); ?></h1>
                              <p><?php echo truncate($post->post_content, 180); ?></p>
                          </a>
                      </article>
                      <?php endwhile; ?>
                       <ul class="navigation">
                          <li class="left"><?php next_posts_link( '&larr; Older posts' ); ?></li>
                          <li class="right"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></li>
                      </ul> 
                      
                      <?php
							$custom_query = new WP_Query( 'pagename=sponsors' );
							while ( $custom_query->have_posts() ) : $custom_query->the_post();
						?>
                       <div class="seealso">
                            <h3>See also</h3>
                            <ul>	
                            	<?php while(the_repeater_field('see_also_links')): ?>
                                <li><a href="<?php echo the_sub_field('link_to_page'); ?>"><?php echo the_sub_field('link_name'); ?></a></li>
                                <?php  endwhile; ?>
                            </ul>
                      </div>
                      <?php
								endwhile;
							// reset post data (important!)
							wp_reset_postdata();
						?>   
                </section>
                
                <aside>
                	<?php get_template_part( 'templates/partials/aside', 'night-of-the-awards' ); ?>
                    <?php get_template_part( 'templates/partials/aside', 'gallery' ); ?>
					<?php get_template_part( 'templates/partials/aside', 'twitter' ); ?>
                </aside>

		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
