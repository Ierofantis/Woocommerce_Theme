<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-sm-6 col-xs-12">
					<div class="product-box-2">
						
						<div class="image-box-2">
							<a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" data-original-title="Δείτε το Προϊόν">
						 <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<img src="<?php echo $feat_image;?>" /></a>
						</div>
											
						<div class="product-info-2">
							<a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" data-original-title="Δείτε το Προϊόν"><h4><?php the_title(); ?></h4></a>
							<p><?php the_field('sub_title'); ?> </p>
							
						<?php
if( $product->is_type( 'simple' ) ){ ?>
  
     <div class="price pull-left"><span><?php echo $product->get_price_html(); ?></span>&euro;</div>												

  
<?php }  elseif( $product->is_type( 'variable' ) ){ ?>


<div class="price pull-left"><span><?php echo esc_attr( $product->get_display_price() ); ?></span>&euro;</div>												

<?php } ?>
						<?php
if( $product->is_type( 'simple' ) ){ ?>
  
  
  
  
        <a href="<?php the_permalink(); ?>cart/?add-to-cart=<?php echo esc_attr( $product->id ); ?>" class="add-cart-btn pull-right" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" data-original-title="Προσθήκη στο Καλάθι">
						<img src="<?php bloginfo("template_url");?>/images/icons/icon-cart-white.png" /></a>
												
  
  
  
  
<?php }  elseif( $product->is_type( 'variable' ) ){ ?>




<?php 
						global $product, $post;
        $variations = $product->get_available_variations();
        foreach ($variations as $key => $value) ?>	<a href="<?php the_permalink(); ?>cart/?add-to-cart=<?php echo esc_attr( $product->id ); ?>&variation_id=<?php echo $value['variation_id']  ?>&attribute_pa_cutting-type=shredded" class="add-cart-btn pull-right" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" data-original-title="Προσθήκη στο Καλάθι">
						<img src="<?php bloginfo("template_url");?>/images/icons/icon-cart-white.png" /></a>
												

<?php } ?>

						</div>	
					</div>
				</div>