<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header('check'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


     		<!--  MAIN  -->
		
		<div class="row bread">
			<div class="container">			
				<div class="col-md-12">
					 <?php if(function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
				</div>				
			</div>
		</div>
		
		<br/>
		
		<div class="row title">
			<div class="container">			
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
				</div>				
			</div>
		</div>
		
		<br/><br/>
		
		<div class="row">
			<div class="container">
			<div class="row">
				
					
					
					
					


        
        <!-- ===== Start Services ===== -->
      
<?php the_content(); ?>
        <!-- ===== End Services ===== -->
        





					
				
				
				
				
				
			</div>	
				
			
				
			</div>
		</div>
		
		<br/><br/>
		
   



    <?php endwhile; ?>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
	<?php else: ?>
	<?php endif; ?>





<?php get_footer();
