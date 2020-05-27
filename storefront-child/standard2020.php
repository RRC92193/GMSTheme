<?php

/**

 *

 * 

 *

 * Template Name: Standard Page 2020

 * 05/06/2020

 */


get_header(); ?>

<style>

        /* Hero Section */
    .hero {
        min-width: 100%;
        height: 90vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .wrapper {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-content: center;
        flex-wrap: wrap;
        flex-shrink: 1;
    }
    .content {
        max-width: 1140px;
        padding: 10px;
    }
    .head-scrolled {
        background: red;
    }
</style>
<?php
    while(have_posts()) {
        the_post(); ?>
        
        <?php 
        $featured = 'https://images.pexels.com/photos/955081/pexels-photo-955081.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
            if( has_post_thumbnail() ):
                $featured = get_the_post_thumbnail_url();
            endif; 
            ?>
        <div class="hero" style="background: url(<?php echo $featured ?>);background-size: cover;background-position: center;">
            <div class="call-to-action">
                <h1 style="color:white;"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="wrapper">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php } ?>




<?php

get_footer();
?>