<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

 

	
		<!--  FOOTER  -->
		
		<div class="row footer">
			<div class="container">
			
				<div class="col-sm-3 newsletter">
					<a href="<?php echo ot_get_option( 'footer_logo_link' ); ?>"><img src="<?php echo ot_get_option( 'footer_logo' ); ?>"></a>
					
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Eγγραφείτε στο Newsletter">
						<span class="input-group-btn">
							<button class="btn btn-green" type="button"><img src="<?php bloginfo("template_url");?>/images/icons/arrow-white-right.png" /></button>
						</span>
					</div>
				</div>

				<div class="col-sm-3">
					 <?php wp_nav_menu(array(
            'theme_location'  => 'footer',            
			'items_wrap' => '<ul>%3$s</ul>',
        ));
        ?>	
				</div>
					
				<div class="col-sm-3">	
					
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#modal-delivery">Πληροφορίες Παράδοσης</a></li>
						
						<li><a href="#">Τρόποι Πληρωμής</a></li>
						
						<li><a href="#" data-toggle="modal" data-target="#modal-terms">Όροι Χρήσης</a></li>
						
						<li><a href="#" data-toggle="modal" data-target="#modal-stats">Οικονομικά Στοιχεία</a></li>						
					</ul>
					
				</div>
				
				<div class="col-sm-3 logos">
					<img src="<?php echo ot_get_option( 'logo1' ); ?>" />
					<img src="<?php echo ot_get_option( 'logo2' ); ?>" />
					<br/><br/><br/>
					<img src="<?php echo ot_get_option( 'logo3' ); ?>" />
				
					
				</div>
				
			</div>
		</div>
		
		<div class="row footer-bottom">
			<div class="container">
				<div class="pull-left">
					<p><?php echo ot_get_option( 'copyright' ); ?></p>
				</div>
				<div class="pull-right">
					<a href="#top" class="scroll btn-green"><img src="<?php bloginfo("template_url");?>/images/icons/arrow-white-top.png" /></a>
				</div>
			</div>
		</div>

<?php $terms = ot_get_option( 'terms' );
$args = array( 'page_id' => $terms  );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?> 

		<!-- Modal Terms -->
		
		<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php the_title(); ?>	</h4>
					</div>
					
					<div class="modal-body">
					<?php the_content(); ?>						
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-green" data-dismiss="modal">Close</button>
					</div>
					
				</div>
			</div>
		</div>
	
<?php endwhile; ?>
<?php wp_reset_query(); ?> 
		<!-- Modal Delivery -->
        
        
<?php $idelie = ot_get_option( 'idelie' );
$args = array( 'page_id' => $idelie  );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>       
		
		<div class="modal fade" id="modal-delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php the_title(); ?>	</h4>
					</div>
					
					<div class="modal-body">
					
						<?php the_content(); ?>	
					</div>	

					<div class="modal-footer">
						<button type="button" class="btn btn-green" data-dismiss="modal">Close</button>
					</div>
					
				</div>
			</div>
		</div>
	
<?php endwhile; ?>
<?php wp_reset_query(); ?> 
	<!-- Modal Stats -->
    
            
<?php $fdata = ot_get_option( 'fdata' );
$args = array( 'page_id' => $fdata  );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>   
		
		<div class="modal fade" id="modal-stats" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
					</div>
					
					<div class="modal-body">
					
							<?php the_content(); ?>						
					</div>	

					<div class="modal-footer">
						<button type="button" class="btn btn-green" data-dismiss="modal">Close</button>
					</div>
					
				</div>
			</div>
		</div>
	
<?php endwhile; ?>
<?php wp_reset_query(); ?> 
		
 <!-- ===== Add JavaScripts Below ===== -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>






	<?php wp_footer(); ?>
</body>
</html>