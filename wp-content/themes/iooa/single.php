<?php get_header(); ?>

	<main id="main" role="main">
		<div class="wrapper">
			<div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
			<?php while ( have_posts() ) : the_post(); ?>
    			
                <section>
                    	<h1><?php the_title(); ?></h1>
                    	<?php the_content(); ?>
                </section>
                
                <aside>
                	<?php get_template_part( 'templates/partials/aside', 'howto' ); ?>
                    
                  	<?php get_template_part( 'templates/partials/aside', 'sponsors' ); ?>
                    
                    <?php get_template_part( 'templates/partials/aside', 'night-of-the-awards' ); ?>
                    
                    <?php get_template_part( 'templates/partials/aside', 'gallery' ); ?>
                </aside>
                
            <?php endwhile; ?>
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
