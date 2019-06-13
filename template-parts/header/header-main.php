<!-- navbar start -->
<header>
	<div class="container-fluid p-0">
		<nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
			<div class="container">
			<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-light"> -->
				<a class="navbar-brand" href="<?php echo site_url(); ?>">
					<?php if ( !empty( get_theme_mod('header_logo_image_setting') ) ) { ?>
						<img class="img-fluid logo" src="<?php echo wp_get_attachment_url(get_theme_mod('header_logo_image_setting')); ?>" alt="logo">
					<?php } else { 
						echo get_bloginfo( 'name' );
					} ?>
				</a>
				<div class="search-feed-responsive">
					<form role="search" method="get" action="">
						<input type="text" name="s" placeholder="Search" required="">
						<button type="submit" value="search" id="searchsubmit" class="submit">
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				<?php if ( get_theme_mod('header_search_setting') == 'Yes') { ?>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="search-feed">
						<?php get_search_form(); ?>
					</div>
				<?php } ?>
				<?php 
					$args = array(
						'theme_location' => 'primary',
					    'menu_class' => 'navbar-nav',        
					    'menu' => 'primary'
					);
					wp_nav_menu( $args );
				
				// wp_nav_menu( array( 'theme_location' => 'primary' ) );
					?>
					<?php global $current_user; wp_get_current_user(); ?>
					<div class="menu-main-menu-container">
						<ul class="navbar-nav">
							<?php if (is_user_logged_in()) {
								// echo "<li class='nav-item1 active'><a class='nav-link text-uppercase pl-0 pr-0 font-weight-normal'>".$current_user->display_name."</a></li>";
								echo "<li class='nav-item1 active'>";
								wp_loginout();
								echo "</li>";
							}else{ ?>
								<li class="nav-item1 active">
								<a class="nav-link text-uppercase pl-0 pr-0 font-weight-normal" href="#" data-toggle="modal" data-target="#elegantModalForm">Login<span class="sr-only">(current)</span></a>
							</li>
							<?php } ?>
							<li class="nav-item1 pr-0">
								<a class="nav-link text-uppercase pl-0 pr-0" href="#" data-toggle="modal" data-target="#modalRegisterForm">Register</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
<!-- navbar end -->