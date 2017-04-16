<?php
$i = 0;
$with_icon = 'icon' == get_option( 'yith_wcms_timeline_step_count_type' ) && 'text' != $style ? true : false;
$enable_checkout_login_reminder = 'yes' == get_option( 'woocommerce_enable_checkout_login_reminder', 'yes' ) ? true : false;
$image_class = apply_filters( 'yith_wcms_timeline_icon_class', '' );
$show_login_step = ! $is_user_logged_in && $enable_checkout_login_reminder;
?>
<div class="row checkout-steps">
 
    
    
    
<span id="timeline-1" data-step="1" class="<?php echo ! $show_login_step ? 'active' : '';?>"><?php echo $labels['billing'] ?></span>
<span id="timeline-2" data-step="2"><?php echo $labels['shipping'] ?></span>
<span id="timeline-3" data-step="3"><?php echo $labels['order'] ?></span>
<span id="timeline-4" data-step="4"><?php echo $labels['payment'] ?></span>
</div><br/>