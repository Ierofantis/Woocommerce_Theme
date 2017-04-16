<?php
/**
 * The Template for displaying all single posts
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
		
		<br/><br/>
		
		<div class="container">		
			<div class="recipes">
			
				<div class="row">
				
					<div class="col-sm-5">
					   <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<img class="w100" src="<?php echo $feat_image;?>" />
						<br/><br/>
					</div>
					
					<div class="col-sm-7">
						
						<h3><?php the_title(); ?></h3>
						
						<h4 class="text-green">Συστατικά </h4>
						<?php 

$terms = get_field('select_product_category');

if( $terms ): ?>

	                    
          


	<?php foreach( $terms as $term ): ?>

			<p class="bg-grey" style="height: 42px; line-height: 42px;">
							&nbsp; <?php the_field('components'); ?>
							<a href="<?php echo get_term_link( $term ); ?>" class="btn btn-default pull-right">Αγόρασέ το &nbsp; <img src="<?php bloginfo("template_url");?>/images/menu-icons/moschari-thumb.png"></a>
						</p>
						
						<p>

	<?php endforeach; ?>



<?php endif; ?>
					<?php the_field('tiprecipie'); ?>
						
						
					</div>											
				
				</div>
				
				<div class="row">
					<div class="col-md-12">
					<?php the_content(); ?>
					</div>
				</div>
				
			</div>
		</div>
		
		<br/><br/>
		
		<div class="row title">
			<div class="container">			
				<div class="col-md-12">				
					<h1>Για τη Συνταγή μπορείτε να χρησιμοποιήσετε</h1>
				</div>
			</div>
		</div>
		
		<br/><br/>
		
		<div class="row products">
			<div class="container">
			
				
				
				<?php 

$posts = get_field('related_posts_recipie');

if( $posts ): ?>
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
       <div class="col-sm-6 col-xs-12">
					<div class="product-box-2">
						
						<div class="image-box-2">
							<a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" data-original-title="Δείτε το Προϊόν">
                              <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<img src="<?php echo $feat_image;?>" /></a>
						</div>
											
						<div class="product-info-2">
							<a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" data-original-title="Δείτε το Προϊόν"><h4><?php the_title(); ?></h4></a>
							<p><?php the_field('tip'); ?></p>
							
							<div class="price pull-left"><span><?php 
                    global $post;
                    $product = new WC_Product($post->ID); 
                    echo     wc_price($product->get_price_including_tax(1,$product->get_price()));
                    ?></span></div>
													
							<a href="<?php the_permalink(); ?>?add-to-cart=<?php echo esc_attr( $product->id ); ?>&variation_id=72&attribute_pa_cutting-type=Shredded" class="add-cart-btn pull-right" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" data-original-title="Προσθήκη στο Καλάθι">
							<img src="<?php bloginfo("template_url");?>/images/icons/icon-cart-white.png" /></a>	
						</div>	
					</div>
				</div>
    <?php endforeach; ?>
   
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
				
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
