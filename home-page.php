<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   
    <section class="container-fluid aboutusbg"> <!-- ABOUT -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img alt="renae desai" class="aboutusimage img-fluid" src="<?php the_field('imageforwhoarewe'); ?>">
                </div>
                <div class="col-md-6 aboutustext">
                    <h2 class="sectiontitle"><?php the_field('titleforwhoarewe'); ?></h2><!--  custom field for the aboutme content-->
                    <p class="sectiontext"><?php the_field('paragraphforwhoarewe'); ?></p>
                    <blockquote class="aboutquote text-center"><?php the_field('quoteforwhoarewe'); ?></blockquote>
                    <a href="<?php the_field('buttonforwhoarewe'); ?>" class="btn btn-warning whoarewebtn" role="button">Learn More</a>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!-- STORIES -->
    <section class="container-fluid storiesbg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <blockquote class="storiesquote text-right"><?php the_field('quoteforstories'); ?></blockquote>
                </div>
                <div class="col-md-6 storiestext">
                    <h2 class="sectiontitle"><?php the_field('titleforstories'); ?></h2>
                    <p class="sectiontext"><?php the_field('paragraphforstories_top'); ?></p>
                    <p class="sectiontext"><?php the_field('paragraphforstories_bottom'); ?></p>
                    <a href="<?php the_field('buttonforstories'); ?>" class="btn btn-warning whoarewebtn" role="button">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid historybg text-right"> <!-- HISTORY -->
        <div class="container">
        
            <div class="row">

                <div class="col-md-6 historysection">
                    <h2 class="sectiontitle"><?php the_field('titleforhistory'); ?></h2>
                    <p class="sectiontext historytext"><?php the_field('paragraphforhistory_top'); ?></p>
                        <p class="sectiontext"><?php the_field('paragraphforhistory_bottom'); ?></p>
                    <a href="<?php the_field('buttonforhistory'); ?>" class="btn btn-warning historybtn" role="button">Learn More</a>
                </div>
                
                    <div class="col-md-6">
                        <img class="historyimage img-fluid" alt="wittenoom worker with drill" src="<?php the_field('imageforhistory_big'); ?>"> <!--larger image-->
                        <img class="historysmallerimage img-fluid" alt="two men inspecting mine wall" src="<?php the_field('imageforhistory_small'); ?>">
                </div>
                

            </div>
             <!-- row -->
        </div> <!-- container -->
    </section>

    <section class="container-fluid text-center learnaboutbg"> <!-- LEARN MORE-->
        <div class="container">
            <h2 class="sectiontitle text-center learnabouttitle"><?php the_field('titleforlearnabout'); ?></b></h2>
            <blockquote class="learnaboutquote"><?php the_field('quoteforlearnabout'); ?></blockquote>
            <p class="sectiontext learnabouttext"><?php the_field('paragraphforlearnabout_middle'); ?>
            </p>
            <div class="row">

                <div class="col-md-6 researchsection">
                    <img class="learnabouticon img-fluid" alt="image of lung" src="<?php the_field('imageforlearnabout_left'); ?>">
                    <p class="sectiontext learnabouttext learnaboutsmalltext"><?php the_field('paragraphforlearnabout_left'); ?></p>
                    <a href="<?php the_field('buttonforresearch'); ?>" class="btn btn-warning" role="button">Learn More</a>
                </div>
                <div class="col-md-6 medicalsection">
                    <img class="learnabouticon img-fluid" alt="image of files" src="<?php the_field('imageforlearnabout_right'); ?>">
                    <p class="sectiontext learnabouttext learnaboutsmalltext"><?php the_field('paragraphforlearnabout_left'); ?></p>
                    <a href="<?php the_field('buttonforstories'); ?>" class="btn btn-warning" role="button">Learn More</a>
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <?php get_footer();?>   