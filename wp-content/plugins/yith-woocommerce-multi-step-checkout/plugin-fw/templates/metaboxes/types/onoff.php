<?php
/**
 * This file belongs to the YIT Plugin Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

extract( $args );

if ( !isset( $desc ) ) {
    $desc='';
}
?>

<div id="<?php echo $id ?>-container" <?php if ( isset($deps) ): ?>data-field="<?php echo $id ?>" data-dep="<?php echo $deps['ids'] ?>" data-value="<?php echo $deps['values'] ?>" <?php endif ?> class="rm_onoff onoff_container">

    <label for="<?php echo $id ?>"><?php echo $label ?></label>
    <p>
        <input type="checkbox" id="<?php echo $id ?>" name="<?php echo $name ?>" value="<?php echo esc_attr( $value ) ?>" <?php checked( $value, 'yes' ) ?> class="on_off" <?php if( isset( $std ) ) : ?>data-std="<?php echo $std ?>"<?php endif ?> />
        <span class="onoff">&nbsp;</span>
        <span class="desc inline"><?php echo $desc ?></span>
    </p>    
</div>