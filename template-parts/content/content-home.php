<?php get_header(); ?>
<!-- top section start-->
<?php if ( get_theme_mod('homepage_main_setting') == 'thumbnail_slider' ) { ?>
		<section class="top-section2 pt-5">
			<section class="hero--area section-padding-80">
		        <div class="container">
		            <div class="row no-gutters">
		                <div class="col-12 col-md-7 col-lg-9">
		                    <div class="tab-content">
			                    <?php $args = array(
								   'category_name'=>'latest-posts',
								    'posts_per_page'=> 10,
								);
								$query = new WP_Query( $args );	
								if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

								<?php if ( $query->current_post + 1 == '1' ) { ?>
			                        <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
			                            <!-- Single Feature Post -->
			                            <div class="single-feature-post video-post bg-img" style="background-image: url(<?php 
			                            	if (has_post_thumbnail()) {
			                            		the_post_thumbnail_url();
			                            	}else{
			                            		echo get_template_directory_uri().'/assets/images/noimageavailable.png';
			                            	}
			                            	 ?>)">

			                                <!-- Post Content -->
			                                <div class="post-content">
			                                	<?php
												$categories = get_the_category();
												$comma      = ', ';
												$output     = '';
												
												if ( $categories ) {
													foreach ( $categories as $category ) {
														$output .= '<a class="post-cata" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
													}
													echo trim( $output, $comma );
												} ?>
			                                    <!-- <a href="#" class="post-cata">React</a> -->
			                                    <a href="single-post.html" class="post-title"><?php the_title(); ?></a>
			                                    <div class="post-meta d-flex">
			                                        <a href="#"><i class="far fa-comments" aria-hidden="true"></i> <?php echo get_comments_number(); ?></a>
			                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo wpb_get_post_views( get_the_ID() ); ?></a>
			                                        <a href="#"><i class="far fa-thumbs-up" aria-hidden="true"></i> 25</a>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
		                    	<?php }else{ ?>
		                    		<div class="tab-pane fade show" id="post-<?php echo get_the_Id(); ?>" role="tabpanel" aria-labelledby="post-<?php echo get_the_Id(); ?>-tab">
			                            <!-- Single Feature Post -->
			                            <div class="single-feature-post video-post bg-img" style="background-image: url(<?php 
			                            	if (has_post_thumbnail()) {
			                            		the_post_thumbnail_url();
			                            	}else{
			                            		echo get_template_directory_uri().'/assets/images/noimageavailable.png';
			                            	}
			                            	 ?>)">
			                                <!-- Play Button -->
			                                <!-- <a href="#" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a> -->

			                                <!-- Post Content -->
			                                <div class="post-content">
			                                    <a href="#" class="post-cata">React</a>
			                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
			                                    <div class="post-meta d-flex">
			                                        <a href="#"><i class="far fa-comments" aria-hidden="true"></i> <?php echo get_comments_number(); ?></a>
			                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
			                                        <a href="#"><i class="far fa-thumbs-up" aria-hidden="true"></i> 25</a>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
		                    	<?php } endwhile; endif; ?>
		                	</div>
		                </div>

	                	<div class="col-12 col-md-5 col-lg-3">
		                    <ul class="nav vizew-nav-tab" role="tablist" style="outline: none;">
		                   		<!-- custom scroll bar -->
		                   		<div class="scrollbar" id="style-1" >
									<div class="force-overflow"></div>
								</div>
								<!-- custom scroll end -->
		                    	<?php $args = array(
								   'category_name'=>'latest-posts',
								    'posts_per_page'=> 10,
								);
								$query = new WP_Query( $args );	
								if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

								<?php if ( $query->current_post + 1 == '1' ) { ?>
				                    	<li class="nav-item">
				                            <a class="nav-link active" id="post-<?php echo get_the_Id(); ?>-tab" data-toggle="pill" href="#post-<?php echo get_the_Id(); ?>" role="tab" aria-controls="post-<?php echo get_the_Id(); ?>" aria-selected="true">
				                                <!-- Single Blog Post -->
				                                <div class="single-blog-post style-2 d-flex align-items-center">
				                                    <div class="post-thumbnail">
				                                    	<?php if ( has_post_thumbnail() ) { ?>
				                                    		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
				                                    	<?php }else { ?>
				                                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimageavailable.png" alt="">
				                                        <?php } ?>
				                                    </div>
				                                    <div class="post-content">
				                                        <h6 class="post-title"><?php the_title(); ?></h6>
				                                        <div class="post-meta d-flex justify-content-between">
				                                            <span><i class="far fa-comments" aria-hidden="true"></i> <?php echo get_comments_number(); ?></span>
				                                            <span><i class="fa fa-eye" aria-hidden="true"></i> <?php echo wpb_get_post_views( get_the_ID() ); ?></span>
				                                            <span><i class="far fa-thumbs-up" aria-hidden="true"></i> 19</span>
				                                        </div>
				                                    </div>
				                                </div>
				                            </a>
				                        </li>
			                    <?php }else{ ?>

			                        <li class="nav-item">
			                            <a class="nav-link" id="post-<?php echo get_the_Id(); ?>-tab" data-toggle="pill" href="#post-<?php echo get_the_Id(); ?>" role="tab" aria-controls="post-<?php echo get_the_Id(); ?>" aria-selected="false">
			                                <!-- Single Blog Post -->
			                                <div class="single-blog-post style-2 d-flex align-items-center">
			                                    <div class="post-thumbnail">
			                                        <?php if ( has_post_thumbnail() ) { ?>
				                                    		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
				                                    	<?php }else { ?>
				                                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimageavailable.png" alt="">
				                                        <?php } ?>
			                                    </div>
			                                    <div class="post-content">
			                                        <h6 class="post-title"><?php the_title(); ?></h6>
			                                        <div class="post-meta d-flex justify-content-between">
			                                            <span><i class="far fa-comments" aria-hidden="true"></i> <?php echo get_comments_number(); ?></span>
			                                            <span><i class="fa fa-eye" aria-hidden="true"></i> <?php echo wpb_get_post_views( get_the_ID() ); ?></span>
			                                            <span><i class="far fa-thumbs-up" aria-hidden="true"></i> 84</span>
			                                        </div>
			                                    </div>
			                                </div>
			                            </a>
			                        </li>
			                    <?php } endwhile; endif; ?>
		                    </ul>
		                </div>
		      		</div>
		        </div>
		    </section>
		</section>
<?php }elseif ( get_theme_mod('homepage_main_setting') == 'slider' ) { ?>
		<section class="slider mb-5">
			<div class="container">
				<div class="row">
					<div class="col-12 pr-0">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="carousel-inner">
								<?php $args = array(
								   'category_name'=>'latest-posts',
								    'posts_per_page'=> 10,
								);
								$query = new WP_Query( $args );	
								if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
								<?php if ( $query->current_post + 1 == '1' ) { ?>
									<div class="carousel-item active">
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ) { ?>
												<img src="<?php echo the_post_thumbnail_url(); ?>" class="d-block w-100" alt="..." style="height: 477px;">
											<?php }else{ ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" class="d-block w-100" alt="..." style="height: 477px;">
										<?php } ?>
										</a>
										<div class="slidertext">
											<h5><?php the_title(); ?></h5>
										</div>
									</div>
								<?php }else{ ?>
									<div class="carousel-item">
										<a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>" class="d-block w-100" alt="..." style="height: 477px;"></a>
										<div class="slidertext">
											<h5><?php the_title(); ?></h5>
										</div>
									</div>
								<?php } endwhile; endif; ?>

							</div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php }else { ?>
		<section class="topsection">
			<div class="container">
				<div class="row gallery">
				<?php $args = array(
					   'category_name'=>'latest-posts',
					    'posts_per_page'=> 10,
					);
					$query = new WP_Query( $args );	
					if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

					<?php if ( $query->current_post + 1 == '2' ) { ?>
							<div class="col-8 p-0">
								<div class="gallery-item">
									<div class="grid-item-holder">	
										<div class="listing-item-grid">
											<?php if ( has_post_thumbnail() ) { ?>
												<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="image1">
											<?php }else{ ?>
												<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="image1">
											<?php } ?>
											<div class="listing-counter">
											<?php
											$categories = get_the_category();
											$comma      = ', ';
											$output     = '';
											
											if ( $categories ) {
												foreach ( $categories as $category ) {
													$output .= '<a class="" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
												}
												echo trim( $output, $comma );
											} ?>
											</div>
											<div class="listing-item-cat">
												<h3 class="mb-1">
													<a class="gallerytext" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h3>
												<p><?php echo get_the_excerpt(); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
					<?php }else{ ?>
							<div class="col-4 p-0">
								<div class="gallery-item">
									<div class="grid-item-holder">
										<div class="listing-item-grid">
											<?php if ( has_post_thumbnail() ) { ?>
												<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="image1">
											<?php }else{ ?>
												<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/noimageavailable.png" alt="image1">
											<?php } ?>
											<div class="listing-counter">
												<?php
											$categories = get_the_category();
											$comma      = ', ';
											$output     = '';
											
											if ( $categories ) {
												foreach ( $categories as $category ) {
													$output .= '<a class="" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
												}
												echo trim( $output, $comma );
											} ?>
											</div>
											<div class="listing-item-cat">
												<h3 class="mb-1">
													<a class="gallerytext" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h3>
												<p><?php echo get_the_excerpt(); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
					<?php } endwhile; endif; ?>
				</div>
			</div>
		</section>
<?php } ?>
<!-- top section end -->

<!-- Listing one start -->
<section class="listing" id="listing">
	<div class="container">
		<div class="heading">
			<h4 class="text-uppercase"><?php echo get_theme_mod('homepage_posts_setting'); ?> <!-- <a class="heading-link" href="">See More</a> --></h4>
		</div>

		<div class="row">
			<div class="col-9">
			<?php query_posts(array(
				// 'posts_per_page'	=>	get_theme_mod('homepage_posts_limit_setting'),
				'posts_per_page'	=>	9,
				'orderby'			=>	'date',
				'order'				=>	'DESC',
				// 'cat'				=>	'-1',
			)); ?>
			<?php if ( have_posts() ):
					while ( have_posts() ) : the_post(); ?>
						<div class="wrapper">
							<div class="row">
								<div class="col-3">
									<div class="sideimage">
										<?php if ( has_post_thumbnail() ) { ?>
											<img src="<?php the_post_thumbnail_url(); ?>" alt="image1">
										<?php }else{ ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimageavailable.png">
										<?php } ?>
									</div>
									
								</div>
								<div class="col-9">
									<div class="text">
										<a class="text-decoration-none" href="<?php the_permalink(); ?>"><h3 class="text-capitalize"><?php the_title(); ?></h3></a>
										<?php
											$categories = get_the_category();
											$comma      = ', ';
											$output     = '';
											
											if ( $categories ) {
												foreach ( $categories as $category ) {
													$output .= '<a class="post-category" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
												}
												echo trim( $output, $comma );
											} ?>
										<p class="post-text"><?php echo get_the_excerpt(); ?>
										</p>
									</div>
								</div>
							</div>
						</div>
			<?php 	endwhile;
				else :
					echo "<p>No content found</p>";
				endif; ?>

			</div>
			
			<div class="col-3 widgets">
				<?php get_sidebar(); ?>
					<div>
						<img class="img-fluid ad" src="<?php echo get_template_directory_uri() ?>/assets/images/advertisement.jpg" alt="image">
					</div>

					<div class="subscribe-button">
						<a class="btn btn-secondary" href="" data-toggle="modal" data-target="#elegantModalForm2">Subscribe</a>
					</div>

					<!-- social media section -->
					<div class="heading">
						<h4 class="text-uppercase small">Follow us on</h4>
					</div>
					<div class="social-media">
					    <div id="social"><a class="facebookBtn smGlobalBtn" href="#" ></a>
							<a class="twitterBtn smGlobalBtn" href="#" ></a>
							<a class="googleplusBtn smGlobalBtn" href="#" ></a>
							<a class="linkedinBtn smGlobalBtn" href="#" ></a>
							<!-- <a class="pinterestBtn smGlobalBtn" href="#" ></a>
							<a class="tumblrBtn smGlobalBtn" href="#" ></a> -->
						</div>
					</div>
					<!-- social media section end -->

				<div class="social-counter">
					<div class="heading">
						<h4 class="text-uppercase small">Social Counter</h4>
					</div>
					<a class="item facebook" href="">
						<i class="fab fa-facebook-f"></i>
						<span class="count1">500</span>
						<span class="count">Likes</span>
					</a>
					
					<a class="item twitter" href="">
						<i class="fab fa-twitter"></i>
						<span class="count1">500</span>
						<span class="count">Followers</span>
					</a>
					
					<a class="item linkein" href="">
						<i class="fab fa-linkedin-in"></i>
						<span class="count1">200</span>
						<span class="count">Followers</span>
					</a>

					<a class="item googleplus" href="">
						<i class="fab fa-google-plus-g"></i>
						<span class="count1">200</span>
						<span class="count">Followers</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- listing one end -->

<!-- listing two start -->
<?php if ( get_theme_mod('homepage_bottom_setting') == 'yes' ) { ?>
<section class="listing2 mb-3">
	<div class="container ">
		<div class="heading">
			<h4 class="text-uppercase"><?php echo get_theme_mod('homepage_bottom_posts_setting'); ?></h4>
		</div>
		<div class="row mt-3">
			<?php 
			$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
			if ( have_posts() ):
			while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
				<div class="col-3 ">
					<div class="wrapper">
						<div class="topimage">
							<?php if (has_post_thumbnail()) { ?>
								<img class="img-fluid listing-image" src="<?php the_post_thumbnail_url(); ?>" alt="image">
							<?php }else { ?>
								<img class="img-fluid listing-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/noimageavailable.png" alt="image">
							<?php } ?>
						</div>
						<div class="inner-text">
							<div class="row m-0 pt-1">
								<div class="col-5 p-0">
									<a class="text-left" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">By
										<span class="text-primary"><?php the_author(); ?>
										</span>
									</a>
								</div>
								<div class="col-7 p-0">
									<span class="text-capitalize"><?php the_time('F jS, Y'); ?></span>
								</div>
							</div>
							<div class="title-text">
								<a class="titlelink" href="<?php the_permalink(); ?>"><h5 class="text-left"><?php the_title(); ?></h5></a>
							</div>
							<div class="content">
								<p class="text-left mt-2"><?php echo get_the_excerpt(); ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php 	
				endwhile;
				else :
					echo "<p>No content found</p>";
				endif; ?>
		</div>
	</div>
</section>
<?php } ?>
<!-- Listing two end -->

<!-- subscribe modal -->
<!-- <section> -->	<!-- Modal -->
	<div class="modal fade" id="elegantModalForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	  aria-hidden="true">
	  	<div class="modal-dialog" role="document">
		    <!--Content-->
		    <div class="modal-content form-elegant">
		      <!--Header-->
		        <div class="modal-header text-center pb-0">
	            	<h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Newsletter</strong></h3>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		        </div>
		        <!--Body-->
		      	<div class="modal-body mx-4 pt-2">
		        <!--Body-->
		        	<p class="dark-grey-text text-left d-flex justify-content-center mb-3"> Subscribe to our newsletter to get notification about new updates.</p>
		        	
		        	<div class="md-form mb-3">
		          		<input type="email" id="Form-email1" class="form-control validate" placeholder="Enter your email">
		          	</div>
					<div class="text-center mb-3">
		           		<button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">SUBSCRIBE</button>
			        </div>
		        </div>
	    	</div>
	    	<!--/.Content-->
	    </div>
	</div>
	<!-- Modal -->
<!-- </section> -->
<!-- subscrib end -->
