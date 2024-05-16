<?php
/*
Template Name: Stories
*/
?>
<?php require_once('page-header.php'); ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext">
                <div>
                <p class="sectiontext"><?php the_field('blurbforstories'); ?></p>
                </div>
                <div class="post-grid">
                    <?php 
                    $args = array(
                        'category_name' =>  'Asbestos Stories',
                        'orderby'        => 'date', 
                        'order'          => 'ASC',
                        'posts_per_page'    =>   -1
                    );
                    // the query
                    $the_query = new WP_Query( $args ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <!-- Start the Loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="post-item">
                        <a href="<?php the_permalink(); ?>" class="post-link">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large', array( 'class' => 'post-thumbnail' ) ); ?>
                                <div class="post-overlay"></div>
                                <h2 class="post-title"><?php the_title(); ?></h2>
                            <?php endif; ?>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <!-- End the Loop -->
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>