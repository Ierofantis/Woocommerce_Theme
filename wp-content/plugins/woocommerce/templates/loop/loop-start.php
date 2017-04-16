<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
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
 * @version     2.0.0
 */
?>


<div class="row bread">
			<div class="container">			
				<div class="col-md-12">
                <div class="breadc">
                <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
                </div>
					
				</div>				
			</div>
</div>
        
<div class="row title">
			<div class="container">			
				<div class="col-md-12">
				
					<div class="pull-left">
                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>
					
					</div>

					<div class="pull-right">
					
						<div class="drop-btn plus-btn">							
							<a class="collapsed" role="button" data-toggle="collapse" href="#nutrition" aria-expanded="false" aria-controls="nutrition"> 
								<span class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" rel="tooltip" title="" 
								data-original-title="Διατροφική αξία"></span>
							</a>													
						</div>											
						
					</div>
					
					<div style="clear: both;"></div>
					
					<div class="collapse" id="nutrition">
						<div>
								<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>
						</div>
					</div>
					
				</div>				
			</div>
		</div>
		
<br/><br/>
<div class="row products">
<div class="container">