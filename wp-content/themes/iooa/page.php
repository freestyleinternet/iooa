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
                    
                    <?php if( get_field('quote_text') ): ?>
                        <blockquote>
                            <img src="<?php the_field('profile_photo'); ?>" alt="<?php the_field('quote_by'); ?>"/>
                            <?php the_field('quote_text'); ?>
                            <span><?php the_field('quote_by'); ?></span>
                        </blockquote>
                    <?php endif; ?>
                    
                    <?php if( get_field('pdf_download') ): ?>
                        <div class="downloads">
                            <h2><?php the_field('enter_now_title'); ?></h2>
                            <p><?php the_field('information_text'); ?></p>
                            <a href="<?php the_field('pdf_download'); ?>" target="_blank"><?php the_field('pdf_download_name'); ?>)</a>
                        </div>
					<?php endif; ?>

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
