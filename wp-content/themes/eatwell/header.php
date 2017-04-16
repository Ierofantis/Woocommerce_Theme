<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	
		<title>Eat-Well</title>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=greek-ext" rel="stylesheet">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel='stylesheet' type='text/css' href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<?php wp_head(); ?>
</head>
<body>		
		<!--  TOP BAR  -->
	
		<div class="row top-bar" id="top">
			<div class="container">
				<?php if ( is_user_logged_in() ) { ?> 
                
                <div class="pull-left mini-cart-outer">
				
						<?php wp_nav_menu(array(
            'theme_location'  => 'account-menu',
			'items_wrap' => '<ul class="account">%3$s</ul>',
        ));
       ?>					
				</div>
			
					<?php } else { ?>
					<div class="pull-left mini-cart-outer">
				
					<a class="login-btn collapsed" role="button" data-toggle="collapse" href="#login" aria-expanded="false" aria-controls="login">Login</a> 
					/ <a href="<?php bloginfo('url'); ?>/register">Sign up</a>
					
					<div class="collapse" id="login">					
						
						<?php wp_login_form(); ?>													
											
					</div>					
				</div>
					<?php } ?>
				
				
				<div class="search center">
				
					<div class="search-box display-tablet">
				
						<form method="POST" action="" accept-charset="UTF-8" class="searchform">
							<input name="_token" type="hidden" value="">
							<div class="input-group">
								<label for="searchquery" style="display:none;">Search for:</label>						
								<input required="required" autocomplete="off" class="form-control" value="Αναζήτηση" 
								onfocus="this.value = (this.value=='Αναζήτηση')? '' : this.value;" 
								onblur="this.value = (this.value=='')? 'Αναζήτηση' : this.value;" name="s" id="s" type="text">
								
								<span class="input-group-btn">
									<input class="btn" value="" id="searchsubmit" type="submit">
								</span>
							</div>						
						</form>
					
					</div>
					
					<div class="search-box-2 hide-tablet">
						<div class="drop-btn drop-collapse">											
							
							<form method="POST" action="" accept-charset="UTF-8" class="searchform"><input name="_token" type="hidden" value="">
							
								<a class="btn collapsed" role="button" data-toggle="collapse" href="#search-collapse" aria-expanded="false" aria-controls="search-collapse">
									<span></span>
									<h6>SEARCH</h6>
								</a>
								
								<div class="collapse" id="search-collapse" aria-expanded="false">
								
									<label for="searchquery" style="display:none;">Search for:</label>						
									<input required="required" autocomplete="off" class="form-control" value="Αναζήτηση" onfocus="this.value = (this.value=='Αναζήτηση')? '' : this.value;" onblur="this.value = (this.value=='')? 'Αναζήτηση' : this.value;" name="searchquery" type="text" id="searchquery">
									
								</div>								
							</form>							
						</div>
					</div>				
					
				</div>
				
				<div class="mini-cart-outer pull-right">
				
					<div class="drop-btn mini-cart-btn">
						
						<a class="collapsed" role="button" data-toggle="collapse" href="#mini-cart" aria-expanded="false" aria-controls="mini-cart"> 
							<img data-toggle="tooltip" data-placement="bottom" rel="tooltip" title="" data-original-title="Καλάθι" src="<?php bloginfo("template_url");?>/images/icons/icon-cart.png">
							 <?php global $woocommerce; ?><span class="badge"><?php echo sprintf(_n('%d ', '%d ', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
						</a>			
						
					</div>
					
					<div class="collapse" id="mini-cart">
						<div class="mini-cart-inside">
							
							<table class="table table-striped">
								<tbody>
                                <?php echo get_cart_content();?>
                              
									<tr>
										<td></td>
										<th>Συνολική Τιμή</th>
										<th><?php echo WC()->cart->get_cart_total(); ?></th>
									</tr>
								</tbody>
							
							</table>
							
							<a class="btn btn-block btn-green" href="<?php bloginfo('url'); ?>/checkout">Ολοκλήρωση Παραγγελίας</a>
													
						</div>
					</div>
					
				</div>
		<div class="pull-right flags">
					<a class="active" href="#" data-toggle="tooltip" data-placement="bottom" rel="tooltip" title="" data-original-title="Ελληνικά">	
						<img src="<?php bloginfo("template_url");?>/images/icons/flag-gre.jpg" /></a>
						
					<!-- <a href="#" data-toggle="tooltip" data-placement="bottom" rel="tooltip" title="" data-original-title="English">	
						<img src="<?php bloginfo("template_url");?>/images/icons/flag-eng.jpg" /></a> -->
				</div>
			</div>
		</div>
		
		
		<!--  HEADER  -->
		
		<div class="row header">
			<div class="container">
			
				<nav class="navbar navbar-default">
					
						<div class="navbar-header">
						
							<button type="button" id="toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
							
		<a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo ot_get_option( 'theme_logo' ); ?>" /></a>
						</div>
					  
						<div id="navbar" class="navbar-collapse collapse">
							 <?php wp_nav_menu(array(
            'theme_location'  => 'main-menu',        

			'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
        ) );
        ?>
							
						</div><!--/.nav-collapse -->
					  
				</nav>	 
				<!-- T.P sticky menu functionality  -->
			<script src = "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">	
			</script>
				<script src="<?php echo get_template_directory_uri(); ?>/js/sticky-menu.js">
				</script>
				<!-- T.P end of sticky menu functionality  -->	
			</div>
		</div>		
		<br/><br/>
  
