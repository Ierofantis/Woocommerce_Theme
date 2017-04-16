<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<!-- <?php 
   //woocommerce_content(); ?> -->

	<!-- TP search count		 -->
	<h3 class="pagetitle">Αποτελέσματα για <?php /* Search Count */ 
	$allsearch = &new WP_Query("s=$s&showposts=-1"); 
	$key = wp_specialchars($s, 1); 
	$count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); 
	echo $key; 
	_e('</span>');
	_e(' &mdash; '); 
	echo $count . ' '; _e('άρθρα'); 
	wp_reset_query(); ?></h3>	
	<!-- end of search count -->
	
	<?php 

if (have_posts()) : while (have_posts()) : the_post();
 ?>

     		<!--  MAIN  -->
		
		<div class="row bread">
			<div class="container">			
				<div class="col-md-12">

               <?php 
               if(function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>					
				</div>				
			</div>
		</div> 		
		
		<br/><br/>
		
		<div class="container">		
			<div class="recipes">
				
				<div class="row">
					<div class="col-md-12">  
			    <!-- <h1>
			    <?php
			    //printf( __( ' %s', 'Twenty_Fourteen' )
				//, get_search_query() ); ?>
				/h1> -->

				<?php echo content(50);
				?>
                <a href="<?php the_permalink(); ?>">Διαβάστε Περισσότερα</a>
					</div>
				</div>				
			</div>
		</div>		
		<br/><br/>

<?php endwhile; ?>
<!-- <?php
// edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
 --><?php else: ?>
<?php endif; ?>
	
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
<?php 
get_footer();
