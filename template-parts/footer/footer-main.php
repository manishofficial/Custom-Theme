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

<!-- <?php
$redirect_to = '';
?>
<form name="loginform" id="loginform" action="<?php //echo site_url( '/wp-login.php' ); ?>" method="post">
<p>Username: <input id="user_login" type="text" size="20" value="" name="log"></p>
<p>Password: <input id="user_pass" type="password" size="20" value="" name="pwd"></p>
<p><input id="rememberme" type="checkbox" value="forever" name="rememberme"></p>

<p><input id="wp-submit" type="submit" value="Login" name="wp-submit"></p>

<input type="hidden" value="<?php //echo esc_attr( $redirect_to ); ?>" name="redirect_to">
<input type="hidden" value="1" name="testcookie">
</form> -->
				<?php $redirect_to = site_url(); ?>
		        <form method="post" action="<?php echo site_url( '/wp-login.php' ); ?>">
		        	<div class="md-form mb-3">
		          		<input type="email" name="log" id="Form-email1 user_login" class="form-control validate" placeholder="E-mail">
		          	</div>
					<div class="md-form ">
		          		<input type="password" name="pwd" id="Form-pass1 user_pass" class="form-control validate" placeholder="Password">
		          		<p class="font-small blue-text d-flex justify-content-end mb-3 mt-3">Forgot <a href="#" class="blue-text ml-1">
		             	 Password?</a></p>
	        		</div>
					<div class="text-center mb-3">
		           		<input type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a" value="Sign in">
			        </div>
			        <input type="hidden" value="<?php echo esc_attr( $redirect_to ); ?>" name="redirect_to">
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
		        <div class="md-form mb-3 col-md-6">
		          	<input type="text" id="Form-email1" class="form-control validate" placeholder="First-Name">
		        </div>
		        <div class="md-form mb-3 col-md-6">
		          	<input type="text" id="Form-email1" class="form-control validate" placeholder="Last-Name">
		        </div>

		        <div class="md-form mb-3">
		          	<input type="text" id="Form-email1" class="form-control validate" placeholder="Username">
		        </div>
		        
		        <div class="md-form mb-3">
		          	<input type="email" id="Form-email1" class="form-control validate" placeholder="E-mail Address">
		        </div>
				<div class="md-form pb-3 col-md-6">
		          	<input type="password" id="Form-pass1" class="form-control validate" placeholder="Password">
		        </div>
				<div class="md-form pb-3 col-md-6">
		          	<input type="password" id="Form-pass1" class="form-control validate" placeholder="Confirm Password">
		        </div>
				<div class="text-center mb-3">
        		    <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Register</button>
		        </div>
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
