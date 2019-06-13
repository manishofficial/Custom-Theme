<section id="search-result-header">
  <div class="container">
    <div class="heading pt-1">
        <h4 class="text-uppercase">Post Related to "<?php the_search_query(); ?>"</h4>
    </div>
  </div>
</section>
<section id="search-content">
  <div class="container">
    <div class="row">
      <div class="col-9">
        <div class="row mt-3">
		<?php if ( have_posts() ) :?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-4 ">
              <div class="wrapper">
                <div class="topimage">
                  <img class="img-fluid listing-image" src="<?php the_post_thumbnail_url(); ?>" alt="image">
                </div>
                <div class="inner-text">
                  <div class="row m-0 pt-1">
                    <div class="col-5 p-0">
                      <a class="text-left" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">By <span class="text-primary"><?php the_author(); ?></span></a>
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
		<?php endwhile;
		else :
			echo '<p>No search results found!</p>';
		endif; ?>
		</div>
	   </div>
	</div>
  </div>
</section>