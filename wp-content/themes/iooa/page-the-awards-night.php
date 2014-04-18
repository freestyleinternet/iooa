<?php get_header(); ?>

	<main id="main" role="main">
		<div class="wrapper">
			<div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
			<?php while ( have_posts() ) : the_post(); ?>
    			
                <section>
                    <?php 
						if ( has_post_thumbnail() ) { 
							the_post_thumbnail('pagefeature', array('class' => 'alignright aligntop'));
						}
					  ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    
                    <?php if( get_field('title') ): ?>
                        <div class="booking-block">
                            <h2><?php the_field('title'); ?></h2>
                            <p><?php the_field('contact_details_line'); ?> <span><?php the_field('phone_number'); ?></span></p>
                            <h3><?php the_field('sub_title'); ?></h3>
                            <?php gravity_form(1, false, false, false, '', true, 1); ?>
                        </div>
                    <?php endif; ?>
                    
                </section>
                
                <aside>
                  	<?php get_template_part( 'templates/partials/aside', 'sponsors' ); ?>
                    <?php get_template_part( 'templates/partials/aside', 'gallery' ); ?>
                    <?php get_template_part( 'templates/partials/aside', 'twitter' ); ?>
                </aside>
                
            <?php endwhile; ?>
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
