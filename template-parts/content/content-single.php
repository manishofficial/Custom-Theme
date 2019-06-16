<!-- post header -->
<div -d="post-header" class="page-header" id="post-<?php the_ID(); ?>">
  <div class="background-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div class="post-meta">
          <div class="post-category cat-2 ">
            <?php the_category('|') ?>
          </div>
        </div>
        <h1 class="post-header-title"><?php the_title(); ?></h1>
        <div class="icons">
          <div class="icon-tray"><i class="fas fa-user"></i><span class=""><?php the_author(); ?></span></div>
          <div class="icon-tray"><i class="fas fa-clock"></i><span class=""><?php the_time('jS F, Y'); ?></span></div>
          <div class="icon-tray"><i class="fas fa-comments"></i><span class=""><?php comments_popup_link('0 &#187;', '1 Comment &#187;', '% &#187;'); ?></span></div>
          <div class="icon-tray"><i class="fas fa-eye"></i><span class=""><?php echo wpb_get_post_views( get_the_ID() ); ?></span></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- post header end -->

<!-- post content -->

<div class="container">
  <div class="row">
    <div class="col-9">
      <div class="post-content">
        <?php the_content(); ?>
        <div class="row">
          <div class="container">
            <div class="col-md-12 p-0 mt-1">
              <div class="share-menu">
                <div class="shareicons">
                  <a href=""><i class="far fa-thumbs-up"></i>
                  <span class="text-muted">500</span></a>
                  
                  <div class="float-right">
                    <span class="share-text font-weight-bold pr-2">Share:</span>
                    <a href="" data-toggle="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="" data-toggle="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="" data-toggle="tooltip" title="Share on Likedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="" data-toggle="tooltip" title="Share on Google-plus"><i class="fab fa-google-plus-g"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>