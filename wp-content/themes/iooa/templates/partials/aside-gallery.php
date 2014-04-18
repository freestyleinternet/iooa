<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package freestyleinternet
 * @since freestyleinternet 2.5
 */
?>

<div class="gallery">
    <h2>GALLERY</h2>
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
            <?php while(the_repeater_field('slide', 5)): ?>       
            <div class="slide"><img src="<?php echo the_sub_field('slide_large_image', 5); ?>" alt="<?php echo the_sub_field('slide_name', 5); ?>"/></div>
            <?php  endwhile; ?>
        </div>
    </div>
    <div id="slideshow-2">
        <div id="cycle-2" class="cycle-slideshow"
            data-cycle-slides=".slides"
            data-cycle-timeout="0"
            data-cycle-fx="carousel"
            data-cycle-carousel-fluid=true
            data-allow-wrap="false">
            <?php while(the_repeater_field('slide', 5)): ?>       
            <div class="slides"><img src="<?php echo the_sub_field('slide_thumbnail', 5); ?>" alt="<?php echo the_sub_field('slide_name', 5); ?>"/></div>
            <?php  endwhile; ?>
        </div>
    </div>
</div>
