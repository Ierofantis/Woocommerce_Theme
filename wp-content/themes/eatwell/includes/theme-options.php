<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet */
  if ( ! function_exists( 'ot_settings_id' ) )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __( 'General', 'theme-options.php' )
      ),
	  array(
        'id'          => 'home',
        'title'       => __( 'Home Page', 'theme-options.php' )
      ),
      array(
        'id'          => 'slider',
        'title'       => __( 'Slider', 'theme-options.php' )
      ),
      array(
        'id'          => 'footer',
        'title'       => __( 'Footer', 'theme-options.php' )
      ),
      array(
        'id'          => 'social_links',
        'title'       => __( 'Social Links', 'theme-options.php' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'theme_logo',
        'label'       => __( 'Theme Logo', 'theme-options.php' ),
        'desc'        => __( 'Paste the full URL (include http://) of your custom logo here or you can insert the image through the button.', 'theme-options.php' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'mt_call_text',
        'label'       => __( 'Call Text', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'mt_call_number',
        'label'       => __( 'Call Number', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'blog_category',
        'label'       => __( 'Blog category', 'theme-options.php' ),
        'desc'        => __( 'Select the category from which you want to display the postin the blog page.', 'theme-options.php' ),
        'std'         => '',
        'type'        => 'category-select',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_1_head',
        'label'       => __( 'Column 1 Heading', 'theme-options.php' ),
        'desc'        => 'Enter your Column 1 Heading here.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_1_img',
        'label'       => __( 'Column 1 Image', 'theme-options.php' ),
        'desc'        => 'Enter or Upload your Column 1 Image here.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_1_text',
        'label'       => __( 'Column 1 Text', 'theme-options.php' ),
        'desc'        => 'Enter your Column 1 text here.',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_2_head',
        'label'       => __( 'Column 2 Heading', 'theme-options.php' ),
        'desc'        => 'Enter your Column 2 Heading here.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_2_img',
        'label'       => __( 'Column 2 Image', 'theme-options.php' ),
        'desc'        => 'Enter or Upload your Column 2 Image here.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_2_text',
        'label'       => __( 'Column 2 Text', 'theme-options.php' ),
        'desc'        => 'Enter your Column 2 text here.',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_3_head',
        'label'       => __( 'Column 3 Heading', 'theme-options.php' ),
        'desc'        => 'Enter your Column 3 Heading here.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_3_img',
        'label'       => __( 'Column 3 Image', 'theme-options.php' ),
        'desc'        => 'Enter or Upload your Column 3 Image here.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'col_3_text',
        'label'       => __( 'Column 3 Text', 'theme-options.php' ),
        'desc'        => 'Enter your Column 3 text here.',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'rvideo',
        'label'       => __( 'Recent Video', 'theme-options.php' ),
        'desc'        => 'Enter your recent video link here. Use [rvideo] shortcode anywhere on the site to call this video.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'fda',
        'label'       => __( 'FDA section', 'theme-options.php' ),
        'desc'        => 'Enter your text here which will appear under recent video.',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'mid_bg',
        'label'       => __( 'Mid Section Background', 'theme-options.php' ),
        'desc'        => 'Enter or Upload your Background Image here.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'mid_bg_text',
        'label'       => __( 'Mid Section Text', 'theme-options.php' ),
        'desc'        => 'Enter your Mid Section text here.',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'home_category',
        'label'       => __( 'Bottom Section Content', 'theme-options.php' ),
        'desc'        => __( 'Select the Pages from which you want to display the content.', 'theme-options.php' ),
        'std'         => '',
        'type'        => 'page-checkbox',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'soc_google',
        'label'       => __( 'Google Plus icon link', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      
	  array(
        'id'          => 'slide',
        'label'       => __( 'Slide', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'slider',
        'section'     => 'slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	  
	    array(
        'id'          => 'slide1',
        'label'       => __( 'Slider Offers', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'slider',
        'section'     => 'slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
     
	      array(
        'id'          => 'footer_logo',
        'label'       => __( 'Footer Logo', 'theme-options.php' ),
        'desc'        => __( 'Paste the full URL (include http://) of your custom logo here or you can insert the image through the button.', 'theme-options.php' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	    array(
        'id'          => 'footer_logo_link',
        'label'       => __( 'Footer Bottom Logo Link', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	  
      array(
        'id'          => 'copyright',
        'label'       => __( 'Footer Bottom Copyright Text', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	    
      array(
        'id'          => 'store_one',
        'label'       => __( 'Store Address One', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	     array(
        'id'          => 'store_Two',
        'label'       => __( 'Store Address Two', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	       array(
        'id'          => 'terms',
        'label'       => __( 'Terms Of Use', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	  	  
	       array(
        'id'          => 'idelie',
        'label'       => __( 'Information Delivery', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	  	       array(
        'id'          => 'fdata',
        'label'       => __( 'Financial Data', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	  	       array(
        'id'          => 'logo1',
        'label'       => __( 'Logo One', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	  	  	       array(
        'id'          => 'logo2',
        'label'       => __( 'Logo Two', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	  	  	       array(
        'id'          => 'logo3',
        'label'       => __( 'Logo Three', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
   
      array(
        'id'          => 'soc_rss',
        'label'       => __( 'Rss icon link', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'soc_facebook',
        'label'       => __( 'Facebook icon link', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'soc_twitter',
        'label'       => __( 'Twitter icon link', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'soc_youtube',
        'label'       => __( 'Youtube icon link', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'soc_linkedin',
        'label'       => __( 'LinkedIn icon link', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'soc_pinterest',
        'label'       => __( 'Pinterest icon link', 'theme-options.php' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}