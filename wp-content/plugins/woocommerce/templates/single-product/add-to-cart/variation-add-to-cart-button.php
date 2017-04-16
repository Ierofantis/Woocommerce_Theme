<?php
/**
 * Single variation cart button
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>




<div class="row w100 bg-grey">
							
                                
                                

<h5 class="pull-left">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</h5>
	<button type="submit"  class="add-cart-btn pull-right" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" data-original-title="Προσθήκη στο Καλάθι"><img src="<?php bloginfo("template_url");?>/images/icons/icon-cart-white.png" /></button>
	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->id ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->id ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />



</div>
