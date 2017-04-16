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


get_header('cart'); ?>


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
					<h1>Καλάθι Αγορών</h1>
				</div>				
			</div>
		</div>
		
		<br/><br/>
		
		<div class="row">
			<div class="container">
			
				
				
					


        
        <!-- ===== Start Services ===== -->
      
<?php the_content(); ?>
        <!-- ===== End Services ===== -->
        





					
				
				
				
				
				
				
				<div class="row cart-row">
					<div class="col-md-6 col-md-offset-6">
						<br/>
						<div class="pull-right">
                        
							<a class="btn btn-lg btn-block btn-green" href="<?php bloginfo('url'); ?>/checkout">ΟΛΟΚΛΗΡΩΣΗ ΠΑΡΑΓΓΕΛΙΑΣ</a>
						</div>
						<br/><br/><br/>
					</div>
				</div>
			
				
			</div>
		</div>
		
		<br/><br/>
		
   



    <?php endwhile; ?>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
	<?php else: ?>
	<?php endif; ?>





<?php get_footer();
