<!-- footer section start-->
<footer class="Footer  text-light">
	<div class="container-fluid">
		<div class="footer-content">
			<p class="text-capitalize text-center p-3 mb-0">copyright <i class="far fa-copyright ml-1 mr-1"></i>2019 All right reserved 
				<a href="<?php echo get_theme_mod('footer_text_link_setting'); ?>" class="text-capitalize"><?php echo get_theme_mod('footer_text_setting'); ?>
				</a>
			</p>
		</div>
	</div>
</footer>
<!-- footer section end -->

<!-- login modal -->
<section>
	<!-- Modal -->
	<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	  aria-hidden="true">
	  	<div class="modal-dialog" role="document">
		    <!--Content-->
		    <div class="modal-content form-elegant">
		      <!--Header-->
		        <div class="modal-header text-center pb-0">
	            	<h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		        </div>
		        <!--Body-->
		      	<div class="modal-body mx-4">
		        <!--Body-->
		        <form method="post" action="<?php echo site_url( '/wp-login.php' ); ?>">
		        	<div class="md-form mb-3">
		          		<input type="text" name="log" id="Form-email1 log" class="form-control validate" placeholder="E-mail">
		          	</div>
					<div class="md-form ">
		          		<input type="password" name="pwd" id="Form-pass1 user_pass" class="form-control validate" placeholder="Password">
		          		<p class="font-small blue-text d-flex justify-content-end mb-3 mt-3">Forgot <a href="#" class="blue-text ml-1" href="#" data-toggle="modal" data-target="#forgetpassword">
		             	 Password?</a></p>
	        		</div>
					<div class="text-center mb-3">
		           		<button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
			        </div>
			        <?php do_action('login_form'); ?>
			        <input type="hidden" value="<?php echo esc_attr( site_url() ); ?>" name="redirect_to">
					<input type="hidden" value="1" name="testcookie">
			    </form>
			        	<p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
	          			with:</p>

		        	<div class="row  d-flex justify-content-center">
						<!--Facebook-->
						<button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center m-0"></i></button>
						<!--Twitter-->
						<button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter m-0"></i></button>
						<!--Google +-->
						<button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g m-0"></i></button>
	        		</div>
		        </div>
		      <!--Footer-->
	            <div class="modal-footer mx-5 pt-3 mb-1 pr-0">
		        	<p class="font-small grey-text d-flex justify-content-end mb-0">Not a member? <a href="#" class="blue-text ml-1" data-toggle="modal" data-target="#modalRegisterForm" data-dismiss="modal" aria-label="Close">Sign Up</a></p>
		        </div>
	    	</div>
	    	<!--/.Content-->
	    </div>
	</div>
	<!-- Modal -->
</section>
<!-- End of login modal -->

<!-- signup modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
    <!--Content-->
	    <div class="modal-content form-elegant">
	      <!--Header-->
	        <div class="modal-header text-center pb-0">
		        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Register</strong></h3>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
			</div>
		      <!--Body-->
	        <div class="modal-body mx-4">
		        <!--Body-->
			    <form id="myregisterform" method="post" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>">
			        <div class="md-form mb-3 col-md-6">
			          	<input type="text" id="Form-email1 first_name" class="form-control validate" placeholder="First-Name" name="first_name">
			        </div>
			        <div class="md-form mb-3 col-md-6">
			          	<input type="text" id="Form-email1 last_name" class="form-control validate" placeholder="Last-Name" name="last_name">
			        </div>

			        <div class="md-form mb-3">
			          	<input type="text" id="Form-email1 user_login" class="form-control validate" placeholder="Username" name="user_login">
			        </div>
			        
			        <div class="md-form mb-3">
			          	<input type="email" id="Form-email1 user_email" class="form-control validate" placeholder="E-mail Address" name="user_email">
			        </div>
					<div class="md-form pb-3 col-md-6">
			          	<input type="password" id="Form-pass1 pass1" class="form-control validate" placeholder="Password" name="pass1">
			        </div>
					<div class="md-form pb-3 col-md-6">
			          	<input type="password" id="Form-pass1 pass2" class="form-control validate" placeholder="Confirm Password" name="pass2">
			        </div>
			        <p id="validate-status"></p>
					<div class="text-center mb-3">
	        		    <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Register</button>
			        </div>
			        <input type="hidden" value="<?php echo esc_attr( site_url() ); ?>" name="redirect_to">
			        <input type="hidden" value="1" name="testcookie">
			    </form>
				<p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
				with:</p>

				<div class="row my-3 d-flex justify-content-center">
					<!--Facebook-->
					<button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center m-0"></i></button>
					<!--Twitter-->
					<button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter m-0"></i></button>
					<!--Google +-->
					<button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g m-0"></i></button> 
				</div>
				<div class="modal-footer pt-3 mb-1 pr-0 pb-0">
		        	<p class="font-small grey-text d-flex justify-content-end mb-0">Already have a account? <a href="#" class="blue-text ml-1" data-toggle="modal" data-target="#elegantModalForm" data-dismiss="modal" aria-label="Close">Sign In</a></p>
		        </div>
		    </div>
        </div>
	</div>
    <!--/.Content-->
</div>
<!-- signup modal end -->

<!-- forget password modal start-->
<section>
	<!-- Modal -->
	<div class="modal fade" id="forgetpassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	  aria-hidden="true">
	  	<div class="modal-dialog" role="document">
		    <!--Content-->
		    <div class="modal-content form-elegant">
		    	<div class="closebutton">
		    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		    	</div>
		      <!--Header-->
  		        	<div class="forgetpassword-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/forget1.png" style="height: 150px;" ></div>
		        <div class="modal-header text-center pb-0">

	            	<h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Reset Passwod</strong></h3>
		        	
		        </div>
		        <!--Body-->
		      	<div class="modal-body mx-4 pt-2">
		        <!--Body-->
			        <form id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
			        	<p class="dark-grey-text text-left d-flex justify-content-center mb-3"> <?php
					            _e(
					                "Enter your email address and we'll send you a link you can use to pick a new password.",
					                'personalize_login'
					            );
				        	?>
				        </p>
			        	
			        	<div class="md-form mb-3">
			          		<input type="email" name="user_login" id="user_login" class="form-control validate" placeholder="Enter your email">
			          	</div>
						<div class="text-center mb-3">
			           		<button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">RESET PASSWORD</button>
				        </div>
				    </form>
		        </div>
	    	</div>
	    	<!--/.Content-->
	    </div>
	</div>
	<!-- Modal -->
</section>
<!-- forget password modal end -->