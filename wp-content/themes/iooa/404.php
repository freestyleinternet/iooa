<?php get_header(); ?>

	<main id="main" role="main">
		<div class="wrapper">
        	<div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
            <section>
                <div class="head">
                	<h1>Oops! That page can&rsquo;t be found.</h1>
                 </div>
                <p>It looks like nothing was found at this location. Maybe try heading back to the <a href="<?php echo home_url('/'); ?>">home page</a>.</p>
            </section>
            
            <aside>
				<?php get_template_part( 'templates/partials/aside', 'howto' ); ?>
                
                <?php get_template_part( 'templates/partials/aside', 'sponsors' ); ?>
                
                <?php get_template_part( 'templates/partials/aside', 'night-of-the-awards' ); ?>
                
                <?php get_template_part( 'templates/partials/aside', 'gallery' ); ?>
            </aside>
		</div>
	</main> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>