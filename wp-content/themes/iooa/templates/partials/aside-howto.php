<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package freestyleinternet
 * @since freestyleinternet 2.5
 */
?>

								
                            
<div class="steps-bx">
    <h2>HOW TO ENTER</h2>	
    <dl>
    	<?php while(the_repeater_field('steps_to_enter', 8)): ?>
      		<dt><?php echo the_sub_field('step_number', 8); ?></dt>
      		<dd><?php echo the_sub_field('step_details', 8); ?></dd>
      	<?php  endwhile; ?>
    </dl>
</div>
