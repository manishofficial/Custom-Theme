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
				
				<?php if ( get_theme_mod('header_search_setting') == 'Yes') { ?>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="search-feed">
						<?php get_search_form(); ?>
					</div>
				<?php } ?>
					<ul class="navbar-nav ">
						<?php
							$menuLocations = get_nav_menu_locations(); 
							$menuID = $menuLocations['primary'];
							$primaryNav = wp_get_nav_menu_items($menuID);
							foreach ( $primaryNav as $navItem ) {
							    echo '<li class="nav-item1"><a href="'.$navItem->url.'" title="'.$navItem->title.'" class="nav-link text-uppercase pl-0 pr-0 font-weight-normal">'.$navItem->title.'</a></li>';
							}
						?>
						<?php if ( get_theme_mod('header_nav_setting')=='yes' ) { ?>
							<?php global $current_user; wp_get_current_user(); ?>
							<?php if (is_user_logged_in()) { ?>
									<!-- <li class='nav-item1 active'><a class='nav-link text-uppercase pl-0 pr-0 font-weight-normal'> <?php echo $current_user->display_name; ?></a></li> -->
									<li class="nav-item1">
										<a class="nav-link text-uppercase pl-0 pr-0 font-weight-normal" href="<?php echo wp_logout_url( get_home_url() ); ?>" title="Logout">Logout</a>
									</li>
							<?php }else{ ?>
								<li class="nav-item1 active">
									<a class="nav-link text-uppercase pl-0 pr-0 font-weight-normal" href="#" data-toggle="modal" data-target="#elegantModalForm">Login<span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item1 pr-0">
									<a class="nav-link text-uppercase pl-0 pr-0" href="#" data-toggle="modal" data-target="#modalRegisterForm">Register</a>
								</li>
							<?php }
							}else{
								global $current_user; wp_get_current_user(); ?>
								<?php if (is_user_logged_in()) { ?>
										<!-- <li class='nav-item1 active'><a class='nav-link text-uppercase pl-0 pr-0 font-weight-normal'> <?php echo $current_user->display_name; ?></a></li> -->
										<li class="nav-item1">
											<a class="nav-link text-uppercase pl-0 pr-0 font-weight-normal" href="<?php echo wp_logout_url( get_home_url() ); ?>" title="Logout">Logout</a>
										</li>
								<?php }else{ ?>
									<li class="nav-item1">
										<a class="nav-link text-uppercase pl-0 pr-0 font-weight-normal" href="#" data-toggle="modal" data-target="#elegantModalForm">Login<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item1 pr-0">
										<a class="nav-link text-uppercase pl-0 pr-0" href="#" data-toggle="modal" data-target="#modalRegisterForm">Register</a>
									</li>
								<?php }
							}
						?>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
<!-- navbar end -->