<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div class="row product-details">
			<div class="container">	
		
				<div class="col-sm-3">
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<img class="w100" src="<?php echo $feat_image;?>" />
				</div>
				
				<div class="col-sm-9 bg-grey">
				
					<div class="row">					
						<div class="col-md-6">
							<h3>INFO</h3>
							<h4>τιμή/kg: <strong>€<?php the_field('price_per_kg'); ?></strong></h4>
							<h4>συσκευασία: <strong>

	  <?php global $woocommerce; ?>
       <?php global $product; ?>
 
<?php if ( $product->has_weight() ) : $has_row = true; ?>
			<tr class="<?php if ( ( $alt = $alt * -1 ) === 1 ) echo 'alt'; ?>">
				<th><?php _e( '', 'woocommerce' ) ?></th>
				<td class="product_weight"><?php echo wc_format_localized_decimal( $product->get_weight() ) . ' ' . esc_attr( get_option( 'woocommerce_weight_unit' ) ); ?></td>
			</tr>
		<?php endif; ?>
			
							</strong></h4>
							<h4>σερβίρει: <strong><?php the_field('serves'); ?> άτομα</strong></h4>
						</div>
						
						<div class="col-md-6">
							<h3>TIP</h3>
							<h4><?php the_content(); ?>
</h4>
						</div>						
					</div>
					
					<div class="row w100">	
                    <?php
			/**
			 * woocommerce_single_product_summary hook
			 *
		
			 * @hooked woocommerce_template_single_add_to_cart - 30
		
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>				
										
					</div>
					
				</div>
				
			</div>
		</div>
        	<br/><br/>
        	<div class="row title">
			<div class="container">			
				<div class="col-md-12">				
					<h1>Οι πελάτες μας αγόρασαν και</h1>
				</div>
			</div>
		</div>
		
		<br/><br/>
        <?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
	
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