<?php
/*
 * Template Name: Stories Post
 * Template Post Type: post, page, product
 */
?>
<?php require_once('small-header.php'); ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext">

                <article class="excerpts"> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div <?php post_class(); ?>>

                            <div class="postcontent">
                                <?php the_content(); ?>
                            </div><!--postcontent-->

                            <div class="content-band">
                                <span class="postmeta-category"><?php the_category(', '); ?></span>
                                <span class="postmeta-comments"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span>
                            </div><!--content-band-->
                        </div><!--post class-->

                        <div class="related-template">
                            <h3>RELATED POSTS</h3>
                            <div class="rel-list row">
                                <?php
                                // Backup current post object
                                $backup = $post;
                                $current = $post->ID;

                                // Fetch categories of current post
                                $categories = wp_get_post_categories($current);
                                
                                // Query arguments
                                $args = array(
                                    'category__in'   => $categories, // Relevant categories
                                    'orderby'        => 'rand', // Order by random
                                    'posts_per_page' => 3, // Number of posts to display
                                    'post__not_in'   => array($current) // Exclude current post
                                );

                                // Custom query
                                $random_query = new WP_Query($args);

                                // Loop through the posts
                                if ($random_query->have_posts()) :
                                    while ($random_query->have_posts()) : $random_query->the_post();
                                        ?>
                                        <div class="col-md-4">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail(array(150, 150), array('class' => 'post-thumbnail'));
                                            } ?>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                            <span class="related-posts-date"><?php the_time('F jS, Y'); ?></span>
                                        </div>
                                        <?php
                                    endwhile;
                                else :
                                    echo '<p>No related posts found.</p>';
                                endif;

                                // Reset post data
                                wp_reset_postdata();

                                // Restore original post data
                                $post = $backup;
                                ?>
                            </div>
                        </div>

                        <div class="comments-template">
                            <?php comments_template(); ?>
                        </div>

                    <?php endwhile; else : ?>
                        <div class="post">
                            <p>Sorry, no posts found.</p>
                        </div><!--post-->
                    <?php endif; ?>
                </article>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>