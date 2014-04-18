<?php 
/*
	Template Name: Judges Landing Page
*/
get_header(); ?>

	<main id="main" role="main">
		<div class="wrapper">
			<div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>

                <section class="judges">
					<?php
						$custom_query = new WP_Query( 'pagename=judges' );
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
						  
						  $args = array( 'post_type' => 'judges', 'posts_per_page' => 12);
						  $wp_query = new WP_Query($args);
						  
						  while ( have_posts() ) : the_post(); 
					  ?>
                      <article>
                          <a href="<?php echo get_permalink(); ?>">
                              <?php 
                                  if ( has_post_thumbnail() ) { 
                                      the_post_thumbnail('judge');
                                  }
                              ?>
                              <h2><?php the_title(); ?></h2>
                              <p><?php the_field('job_title'); ?></p>
                              <span><?php the_field('qualifications'); ?></span>
                          </a>
                      </article>
                      <?php endwhile; ?>
                       <ul class="navigation">
                          <li class="left"><?php next_posts_link( '&larr; Older posts' ); ?></li>
                          <li class="right"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></li>
                      </ul> 
   
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
