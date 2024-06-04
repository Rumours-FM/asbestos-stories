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
    

    <!-- Custom Categories Section -->
   
</aside><!-- #secondary -->

