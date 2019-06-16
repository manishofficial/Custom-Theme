<?php
// Add Thumbnails To The Posts
add_theme_support( 'post-thumbnails' );


function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" action="'.home_url( '/' ).'">
						<input class="searchbar"  id="inpt_search" type="text" name="s" placeholder="'.get_theme_mod('header_search_text_setting').'" required="">
						<button type="submit" value="search" id="searchsubmit" class="submit">
							<i class="fa fa-search"></i>
						</button>
					</form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

// Control Excerpt Length
function wpdocs_custom_excerpt_length( $length ) {
    return get_theme_mod('homepage_posts_text_limit_setting');
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
// Control Excerpt [...] string using read more
function wpdocs_excerpt_more( $more ) {
    return '<a class="js-link" href="'.get_the_permalink().'" rel="nofollow"> '.get_theme_mod('homepage_posts_readmore_setting').'</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// POST views

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}





