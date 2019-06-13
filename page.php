<?php get_header(); ?>

  	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<section>
			<div class="container-fluid p-0">
				<div class="bg mt-5" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
					<div class="container">
						<div class="top heading">
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
				</div>
			</div>
		</section>

		<Section class="content">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</Section>
	<?php endwhile; endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>