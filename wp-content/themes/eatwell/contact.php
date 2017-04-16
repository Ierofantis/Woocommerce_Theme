<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



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
					<h1>Επικοινωνία</h1>
				</div>				
			</div>
		</div>
		
		<br/><br/>
		
		<div class="row">
			<div class="container">
			
				<div class="row">
				
					<div class="col-md-3 col-info">
											
						<h4>Κατάστημα Ψυχικού</h4>
						<p><?php the_field('address1'); ?></p>
						<p>Τ.Κ.: <?php the_field('zip1'); ?></p>
						<p><span class="glyphicon glyphicon-earphone"></span> Τηλέφωνο: <?php the_field('phone1'); ?></p>
						<p><span class="glyphicon glyphicon-calendar"></span> <?php the_field('days1'); ?></p>						
						
						<hr>
						
						<h4>Κατάστημα Κηφισιάς</h4>
						<p><?php the_field('address2'); ?></p>
						<p>Τ.Κ.: <?php the_field('zip2'); ?></p>
						<p><span class="glyphicon glyphicon-earphone"></span> Τηλέφωνο: <?php the_field('phone2'); ?></p>
						<p><span class="glyphicon glyphicon-calendar"></span> <?php the_field('days2'); ?></p>						
						
						<hr>
						
						<h4>Τυποποιητήριο</h4>
						<p><?php the_field('address3'); ?></p>
						<p>Τ.Κ.: <?php the_field('zip3'); ?></p>
						<p><span class="glyphicon glyphicon-earphone"></span> Τηλέφωνο: <?php the_field('phone3'); ?></p>
						<p><span class="glyphicon glyphicon-calendar"></span> <?php the_field('days3'); ?></p>						

						<br/><br/>

					</div>
					
					<div class="col-md-9">																
						
						<div class="row bg-grey">
							<div class="col-md-10 col-md-offset-1">
						
								<br/>
                                <?php the_content(); ?>
								
																					
								<?php echo do_shortcode( '[contact-form-7 id="33" title="Contact form 1" html_id="signup-form" html_class="signup-form"]' ); ?>															
								
								<div style="clear: both;"></div>
								<br/><br/>
						
							</div>
						</div>
					
					</div>
				
				</div>
												
				
			</div>
		</div>
		
		<br/><br/>
		
		
			<!-- TABS -->
		
		<div class="row collapse" id="tabs-shops">
			<div class="container">
		
				<ul id="myTabs" class="nav nav-tabs" role="tablist"> 
					<li role="presentation" class="active">
						<a href="#tab-1" id="tab-title-1" role="tab" data-toggle="tab" aria-controls="tab-1" aria-expanded="true">Νέα Ερυθραία</a>
					</li> 
					
					<li role="presentation" class="">
						<a href="#tab-2" id="tab-title-2" role="tab" data-toggle="tab" aria-controls="tab-2" aria-expanded="false">Νέο Ψυχικό</a>
					</li> 
										
				</ul>
		
				<div class="tab-content bg-grey">
                
                    
    <?php $store_one = ot_get_option( 'store_one' );
    $args = array( 'page_id' => $store_one  );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?> 	
    	
                        <div role="tabpanel" class="tab-pane active" id="tab-1">
                        
                        <?php the_content(); ?>	
    
                        </div>                                    
                    
    <?php endwhile; ?>
    <?php wp_reset_query(); ?> 
     
     
	<?php $store_Two = ot_get_option( 'store_Two' );
    $args = array( 'page_id' => $store_Two  );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?> 					
                                
                        <div role="tabpanel" class="tab-pane" id="tab-2">
                        
                        <?php the_content(); ?>	
    
                        </div>
                        
    <?php endwhile; ?>
    <?php wp_reset_query(); ?> 		
				</div>
				
				<br/><br/>
				
			</div>
		</div>
		
		
   



    <?php endwhile; ?>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
	<?php else: ?>
	<?php endif; ?>




<?php get_footer();
