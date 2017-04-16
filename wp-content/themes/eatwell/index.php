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


		
		<!--  MAIN  -->
		
		<div class="row">
			<div class="container">

					<?php
                    if ( function_exists( 'ot_get_option' ) ) {
                    $slides = ot_get_option( 'slide', array() );
                    if ( ! empty( $slides ) ) {
                    foreach( $slides as $slide ) {
                    echo '
                            <div class="col-sm-6 no-pd">
                            
                                    <img class="w100" src="' . $slide['image'] . '" />
                            
                            </div>';
                    
                    } } } ?>
				
			</div>
		</div>
		
		<br/><br/>
		   
		<div class="row menu-big">
			<div class="container">		
				
			<?php        
  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(          
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
       
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;    
  //echo
   '<div class="col-sm-4 col-xs-6"><a href="'. get_term_link($cat->slug, 'product_cat') .'"><span></span><h3>'. $cat->name .'</h3><h5>ΚΑΝΤΕ ΤΙΣ ΑΓΟΡΕΣ ΣΑΣ</h5></a></div>';
   
        $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
            foreach($sub_cats as $sub_category) {
                echo  $sub_category->name ;
            }   
        }
    }       
}

?>
    <!--  T.P 
          Added main menu functionality to the above code 
          Also I 've added a line to functions.php
          on line 85
          'my-menu' => __( 'My Menu' )
    -->
     <?php

      $menuLocations = get_nav_menu_locations(); 
      $menuID = $menuLocations['my-menu']; // Get the *primary* menu ID
      $primaryNav = wp_get_nav_menu_items($menuID); 

      foreach ( $primaryNav as $navItem ) {

      echo '<ul  class="col-sm-4 col-xs-6"><a href="'.$navItem->url.'"><span class="'.$navItem->title.' "></span><h3>'.$navItem->title.'</h3><h5>ΚΑΝΤΕ ΤΙΣ ΑΓΟΡΕΣ ΣΑΣ</h5></a></ul>';

        }
     ?>  
        <!-- End of the main menu functionality -->

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
