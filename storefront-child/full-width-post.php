<?php
/*
 * Template Name: Post Page 2.0
 * Template Post Type: post, page, product
 */

 get_header();  ?>
 
 <style>
     .woocommerce-breadcrumb {
        display: none;
     }
     h1, h3 {
        text-align: center;
        
    }
     p {
         padding-left: 30px;
         padding-right: 30px;
     }
     p:first-of-type {
        margin-top: 10px;
     }
    .entry-content p:first-of-type::first-letter {
        text-transform: uppercase;
        line-height: 1px;
        font-size: 2em;
        font-weight: bold;
        font-family: 'Arial', sans-serif;
        color: black;
    }
    strong {
        padding: 0px;
    }
    .entry-content {
        background-color: #f9f9f9;
        border: #f9f9f9 50px;
        width: 100%;

    }
    
    @media (max-width:1000px) {
        h1, h3 {
            text-align: center;
        }
    }
    
    
 </style>
 
<section id="content">
    <div class="head-image">
        
    </div>
    <div class="wrap-content blog-single">

    <?php  while ( have_posts() ) : the_post(); ?>
    
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_title( '<h1>','</h1>' );  ?> 
            
	
            <h3><?php $post_date = get_the_date( 'l F j, Y' ); echo $post_date; ?></h3>
            
            
            <div class="post-thumbnail"><?php the_post_thumbnail(array(2000, 2000)); ?> </div>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>

    </div>

</section>
			
<?php 
get_footer();
?>