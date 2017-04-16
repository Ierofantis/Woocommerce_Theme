<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>





     		<!--  MAIN  -->
		
		<div class="row bread">
			<div class="container">			
				<div class="col-md-12">
               <?php if(function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
					
				</div>				
			</div>
		</div>		
		
		<br/><br/>
		
		<div class="container">		
			<div class="recipes">
			
		
				
				<div class="row">
					<div class="col-md-12">
					
		

			
				<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
			

			
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

				<?php get_search_form(); ?>
		
	

					</div>
				</div>
				
			</div>
		</div>
		
		<br/><br/>
		
	
		
	
 





<?php 
get_footer();
