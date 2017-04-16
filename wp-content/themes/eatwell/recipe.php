<?php
/**
 * Template Name: Recipes
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
		
		<br/>
		
		<div class="row title">
			<div class="container">			
				<div class="col-md-12">									
					<h1>Συνταγές</h1>										
				</div>				
			</div>
		</div>
		
		<br/><br/>
		
		<div class="container">		
						
			<div class="row">
            
            
<?php global $post;
$args = array( 'numberposts' => 100, 'category_name' => 'recipes' );
$posts = get_posts( $args );
foreach( $posts as $post ): setup_postdata($post); 
?>

			
				<div class="col-md-6">
					<div class="recipe-box">	
                    


<?php 

$terms = get_field('select_product_category');

if( $terms ): ?>

	                    
          


	<?php foreach( $terms as $term ): ?>

		<a href="<?php echo get_term_link( $term ); ?>" class="btn-over">
							<img src="<?php bloginfo("template_url");?>/images/menu-icons/moschari-thumb.png">
							<br/><?php echo $term->name; ?>
						</a>

	<?php endforeach; ?>



<?php endif; ?>
											
						
						
						<a href="<?php the_permalink(); ?>">
                        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<img class="w100" src="<?php echo $feat_image;?>" />
						</a>
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>	
						
					</div>
				</div>
                
                
        
<?php endforeach; ?>
        
				
				
			
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
		





<?php get_footer();
