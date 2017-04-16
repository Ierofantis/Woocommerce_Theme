<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        
        <!-- ===== Start Services ===== -->
        <h1><?php the_title();?></h1>
			<?php the_content(); ?>
        <!-- ===== End Services ===== -->
        
   



    <?php endwhile; ?>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
	<?php else: ?>
	<?php endif; ?>




<?php get_footer();
