<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post();
  	wpb_set_post_views(get_the_ID());	//post view count
  	?>
    <?php get_template_part('template-parts/content/content','single') ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php //get_search_form(); ?>
<?php get_footer(); ?>