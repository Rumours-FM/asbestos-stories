<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package YourThemeName
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>

    <!-- Custom Recent Posts Section -->
    <div class="widget custom-widget recent-posts-widget">
        <h2 class="widget-title"><?php _e( 'Recent Posts', 'your-theme-textdomain' ); ?></h2>
        <ul>
            <?php
            $recent_posts = new WP_Query( array(
                'posts_per_page' => 5, // Number of recent posts you want to display
                'post_status'    => 'publish'
            ) );
            while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
            ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>
    </div>

    <!-- Custom Categories Section -->
   
</aside><!-- #secondary -->

