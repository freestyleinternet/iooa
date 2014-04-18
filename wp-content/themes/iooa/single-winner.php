<?php 
/*
	Template Name: Winner Single 
*/
get_header(); ?>

	<main id="main" role="main">
		<div class="wrapper">
			<div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
			<?php while ( have_posts() ) : the_post(); ?>
    			
                <section>
                	<div class="head-winner">
                    	<img src="<?php the_field('banner_upload'); ?>" alt="<?php the_title(); ?>"/>
                    	<div class="content-holder">
                            <p><?php the_field('winning_year'); ?></p>
                            <h2><?php the_field('winning_category'); ?></h2>
                            <h1><?php the_title(); ?></h1>
                        </div>
					</div>
                    <?php the_content(); ?>
                    <?php if( get_field('quote_text') ): ?>
                        <blockquote>
                            <img src="<?php the_field('profile_photo'); ?>" alt="<?php the_field('quote_by'); ?>"/>
                            <?php the_field('quote_text'); ?>
                            <span><?php the_field('quote_by'); ?></span>
                        </blockquote>
                    <?php endif; ?>
                    <?php if( get_field('see_also_links') ): ?>
                    <div class="seealso">
                            <h3>See also</h3>
                            <ul>	
                            	<?php while(the_repeater_field('see_also_links')): ?>
                                <li><a href="<?php echo the_sub_field('link_to_page'); ?>"><?php echo the_sub_field('link_name'); ?></a></li>
                                <?php  endwhile; ?>
                            </ul>
                      </div>
                      <?php endif; ?>
                </section>
                
                <aside>
                	<?php get_template_part( 'templates/partials/aside', 'sponsors' ); ?>
                	<?php get_template_part( 'templates/partials/aside', 'night-of-the-awards' ); ?>
                    <?php get_template_part( 'templates/partials/aside', 'gallery' ); ?>
					<?php get_template_part( 'templates/partials/aside', 'twitter' ); ?>
            <?php endwhile; ?>
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
