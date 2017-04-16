<?php
/**
 * Template Name: Register
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<div class="row">
			<div class="container">
			
				<div class="row">
				
					<div class="col-md-3">
						
						<br/>
						<h3><strong>Είσοδος Χρήστη</strong></h3>
						<h5>Login στο λογαριασμό σου</h5>
						<br>
						
						<?php wp_login_form(); ?>	
						
						<br>

					</div>
					
					<div class="col-md-9">																
						
						<div class="row bg-grey">
							<div class="col-md-10 col-md-offset-1">
						
								<br/>
								<h3><strong>Εγγραφή νέου Χρήστη</strong></h3>
								<h5>Δημιούργησε λογαριασμό</h5>
								<br>
								  <?php
    $err = '';
    $success = '';
 
    global $wpdb, $PasswordHash, $current_user, $user_ID;
 
    if(isset($_POST['task']) && $_POST['task'] == 'register' ) {
 
        
        $pwd1 = $wpdb->escape(trim($_POST['pwd1']));
        $pwd2 = $wpdb->escape(trim($_POST['pwd2']));
        $first_name = $wpdb->escape(trim($_POST['first_name']));
        $last_name = $wpdb->escape(trim($_POST['last_name']));
        $email = $wpdb->escape(trim($_POST['email']));
        $username = $wpdb->escape(trim($_POST['username']));
        
        if( $email == "" || $pwd1 == "" || $pwd2 == "" || $username == "" || $first_name == "" || $last_name == "") {
            $err = 'Please don\'t leave the required fields.';
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err = 'Invalid email address.';
        } else if(email_exists($email) ) {
            $err = 'Email already exist.';
        } else if($pwd1 <> $pwd2 ){
            $err = 'Password do not match.';        
        } else {
 
            $user_id = wp_insert_user( array ('first_name' => apply_filters('pre_user_first_name', $first_name), 'last_name' => apply_filters('pre_user_last_name', $last_name), 'user_pass' => apply_filters('pre_user_user_pass', $pwd1), 'user_login' => apply_filters('pre_user_user_login', $username), 'user_email' => apply_filters('pre_user_user_email', $email), 'role' => 'subscriber' ) );
            if( is_wp_error($user_id) ) {
                $err = 'Error on user creation.';
            } else {
                do_action('user_register', $user_id);
                
                $success = 'You\'re successfully register';
            }
            
        }
        
    }
    ?>
 
        <!--display error/success message-->
    <div id="message">
        <?php 
            if(! empty($err) ) :
                echo '<p class="error">'.$err.'';
            endif;
        ?>
        
        <?php 
            if(! empty($success) ) :
                echo '<p class="error">'.$success.'';
				
            endif;
        ?>
    </div>
 
    <form role="form" name="signup-form" id="signup-form" method="post">	
																											
									
									<div class="form-group">
										<label for="contactname">Last Name</label>
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
    <input type="text" value="" class="form-control" name="last_name" id="last_name" placeholder="Ονοματεπώνυμο" aria-describedby="basic-addon1" />
	
										</div>										
									</div>
                                    
                                    <div class="form-group">
										<label for="contactname">First Name</label>
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
    <input type="text" value="" class="form-control" name="first_name" id="first_name" placeholder="Ονοματεπώνυμο" aria-describedby="basic-addon1" />
	
										</div>										
									</div>
									
									<div class="form-group">
										<label for="email">E-mail</label>
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
			<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" aria-describedby="basic-addon1">
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label for="contactname">User Name</label>
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
    <input type="text" value="" class="form-control" name="username" id="username" placeholder="Username" aria-describedby="basic-addon1" />
	
										</div>										
									</div>
									
									<div class="form-group">
										<label for="password">Password</label>
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-lock"></span></span>
											<input type="password" class="form-control" name="pwd1" id="pwd1" placeholder="Κωδικός" aria-describedby="basic-addon2">
										</div>
									</div>	

									<div class="form-group">
										<label for="password">Match Password</label>
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-lock"></span></span>
											<input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="Κωδικός" aria-describedby="basic-addon2">
										</div>
									</div>	
									
									
									<div class="checkbox">
										<label><input type="checkbox" id="isNewsletter" name="isNewsletter" value="1"> Επιθυμώ να ενημερώνομαι για νέα και προσφορές  </label>									
									</div>
									<div class="form-group">																		
										<div class="pull-right">
                                                <div class="alignleft"><p><?php if($sucess != "") { echo $sucess; } ?> <?php if($err != "") { echo $err; } ?></p></div>

											<button type="submit" name="btnregister" class="btn btn-lg btn-green" >ΔΗΜΙΟΥΡΓΙΑ ΛΟΓΑΡΙΑΣΜΟΥ</button>
                                                    <input type="hidden" name="task" value="register" />

										</div>										
									</div>									
</form>																		
																						
								
								<div style="clear: both;"></div>
								<br/><br/>
						
							</div>
						</div>
					
					</div>
				
				</div>
												
				
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
		
		
		       
     
   



    <?php endwhile; ?>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
	<?php else: ?>
	<?php endif; ?>




<?php get_footer();
