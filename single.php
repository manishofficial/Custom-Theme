<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post();
  	wpb_set_post_views(get_the_ID());	//post view count
  ?>
    <?php get_template_part('template-parts/content/content','single') ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php
	    if ( comments_open() || get_comments_number() ) :
			comments_template();
	endif;
	?>
<?php //get_sidebar(); ?>
<?php //comments_template(); ?>
<?php //get_search_form(); ?>
<?php get_footer(); ?>