<?php
    /*
    Template Name: search
    */
    ?>
<?php require_once('search-header.php'); ?>   <!--  Tells WordPress to include header.php -->
<section class="container-fluid aboutbg">
             

<div class="container">
<div class="row m-4">

<form method="get" class="navbar-form search-container" role="search" action="<?php echo esc_url(home_url('/')); ?>">
            <label for="navbar-search" class="sr-only"><?php _e('Search', 'textdomain'); ?></label>
            <div class="row no-gutters">
                <div class="col">
                    <input type="text" class="form-control rounded-search" name="s" id="navbar-search" placeholder="<?php _e('Search', 'textdomain'); ?>">
                </div>
                <div class="col-auto">
                <button class="search-btn" type="submit">
                        <!-- <i class="fa fa-search"></i> -->
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"  alt="search icon" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.6383 15.9197L16.0166 19.3006C16.2333 19.5174 16.4905 19.6894 16.7736 19.8068C17.0567 19.9241 17.3601 19.9845 17.6666 19.9846C17.6665 19.9846 17.6666 19.9846 17.6666 19.9846C17.9729 19.9846 18.2764 19.9242 18.5595 19.8068C18.8426 19.6895 19.0998 19.5175 19.3165 19.3007C19.3327 19.2845 19.3487 19.268 19.3644 19.2514C19.3651 19.2506 19.3658 19.2499 19.3665 19.2492C19.5597 19.0436 19.7142 18.8044 19.8224 18.5432C19.9396 18.26 20 17.9563 20 17.6497C20 17.3431 19.9397 17.0395 19.8224 16.7562C19.7143 16.495 19.5598 16.2559 19.3666 16.0503C19.3662 16.0499 19.3659 16.0495 19.3655 16.0491C19.3495 16.032 19.3332 16.0152 19.3166 15.9987L15.9381 12.6179L13.3395 11.5436C13.4723 11.3546 13.5957 11.1599 13.7094 10.9604C13.9307 10.572 14.1153 10.165 14.2614 9.74499C14.529 8.97563 14.6675 8.16233 14.6666 7.33815C14.6666 3.29187 11.3769 0 7.33332 0C3.2897 0 0 3.29187 0 7.33815C0 11.3844 3.2897 14.6763 7.33332 14.6763C8.14381 14.6772 8.94369 14.543 9.70151 14.2837C10.122 14.1398 10.5296 13.9574 10.9189 13.7381C11.1414 13.6128 11.3579 13.4754 11.5674 13.3264L12.6383 15.9197ZM16.9595 18.3572C16.9762 18.3739 16.9934 18.3899 17.0111 18.4052C17.0111 18.4052 17.0111 18.4052 17.0111 18.4052C17.1061 18.4876 17.2152 18.5508 17.3323 18.5923C17.4387 18.63 17.5516 18.6498 17.6666 18.6498C17.6666 18.6498 17.6666 18.6498 17.6666 18.6498C17.7816 18.6498 17.8945 18.63 18.0009 18.5923C18.118 18.5508 18.2271 18.4876 18.3221 18.4052C18.3399 18.3899 18.3571 18.3739 18.3738 18.3572C18.4559 18.2749 18.5222 18.1797 18.5708 18.0764C18.633 17.9441 18.6662 17.7986 18.6662 17.6497C18.6662 17.5007 18.6331 17.3552 18.5709 17.223C18.537 17.151 18.4945 17.0829 18.4441 17.0203C18.4436 17.0198 18.4431 17.0192 18.4426 17.0186C18.4211 16.992 18.3982 16.9665 18.3738 16.9421L18.3242 16.8924L15.1833 13.7495L12.7734 12.7532L13.769 15.1646L16.9595 18.3572ZM10.4052 12.4939C10.5193 12.4256 10.6309 12.3536 10.7399 12.2781C11.3097 11.8835 11.8082 11.3928 12.2119 10.8296C12.301 10.7052 12.3856 10.5773 12.4652 10.4461C12.5002 10.3885 12.5342 10.3303 12.5672 10.2715C13.0547 9.4039 13.3331 8.40359 13.3333 7.33948C13.3333 7.33904 13.3333 7.33859 13.3333 7.33815C13.3333 4.02764 10.6416 1.33421 7.33332 1.33421C4.02499 1.33421 1.33333 4.02764 1.33333 7.33815C1.33333 10.6487 4.02499 13.3421 7.33332 13.3421C7.33388 13.3421 7.33444 13.3421 7.33501 13.3421C8.44948 13.3418 9.49392 13.0358 10.389 12.5036C10.3944 12.5004 10.3998 12.4972 10.4052 12.4939Z" fill="white"/>
</svg>

                    </button>
                </div>
            </div>
        </form>
</div>
    <div class="row m-4">
        
   



    <h1 class="page-title"><?php _e( 'Search results for: ', 'nd_dosth' ); ?></h1>

  <h1 class="search-query"><?php echo get_search_query(); ?></h1> 

    </div>   
    <div class="container">
        <div class="row">
            <div class="search-results-container col-md-8">
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="search-result">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more-link">
                            <?php _e( 'Read More', 'nd_dosth' );  ?>
                        </a>
                        <hr class="search-break">
                    </div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p><?php _e( 'No Search Results found', 'nd_dosth' ); ?></p>
            <?php endif; ?>
            </div>
            <div id="blog-sidebar" class="col-md-4">
                <?php get_sidebar(); ?>             
            </div>
        </div>
    </div>
</div>
  
          </section>
  

 <?php get_footer();?>     