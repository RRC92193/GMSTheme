<?php

/**

 *

 * 

 *

 * Template Name: Home

 * 10/15/2019

 */


get_header(); ?>


<!-- 
Add style to main style.css
margin top on top image and media tags for hero image. remove if new image added. 
-->



<?php 
$top_image = get_field('top_image');
$top_image_phone = get_field('top_image_phone');
$top_image_tablet = get_field('top_image_tablet');
$leftcard_image = get_field('leftcard_image');
$rightcard_image = get_field('rightcard_image');
$full_width_image_1 = get_field('full_width_image_1');
$full_width_image_2 = get_field('full_width_image_2');
$full_width_image_3 = get_field('full_width_image_3');
$text_asset = get_field('text_asset');
$banner_asset = get_field('banner_asset');
                    
?>

<style>
    #masthead.site-header {
        margin-bottom: 0px;
    }
    .top-image {
        
        width: 100vw;
        left: calc(-50vw + 50%);
        position: relative;
        height: 60vw;
        background: url('<?php echo $top_image['url']; ?> ') no-repeat;
        background-size: cover;
        text-align: center;
    }
    .main-cards {
        
        width: 100vw;
        left: calc(-50.3vw + 50%);
        position: relative;
        height: 35vw;
        text-align: center;
    }
    
    .main-card-left {
        float: left;
        width: 50%;
        height: 100%;
        background: url('<?php echo $leftcard_image['url']; ?> ');
        background-size: cover;
        border: 5px solid white;
        transition: .5s ease-in-out;
        
    }
    .main-card-left:hover {
        opacity: 0.9;
        transition: .5s ease-in-out;
        overflow: hidden;
        border: 2px solid white;
        
    }
    
    
    .main-card-right {
        float: right;
        width: 50%;
        height: 100%;
        background: url('<?php echo $rightcard_image['url']; ?> ');
        background-size: cover;
        border: 5px solid white;
        transition: .5s ease-in-out;
    }
    .main-card-right:hover {
        opacity: 0.9;
        transition: .5s ease-in-out;
        overflow: hidden;
        z-index: 100;
        border: 2px solid white;
    }
    
    .top-text {
        position: relative;
        background: center;
        float: left;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: .5s ease-in-out;
    }
    .top-text h3 {
        color: white;
        margin: 5px;
        padding-left: 4px;
        padding-right: 4px;
        font-size: 35px;
    }
    .top-text:hover {
        color: white;
        transition: .5s ease-in-out;
        background: transparent;
    }
    .about-gms {
        color: white;
        width: 100vw;
        left: calc(-50vw + 50%);
        position: relative;
        background: #4b8a66;
        text-align: center;
        padding: 20px;
        transition: .7s ease-in-out;
        -moz-transition: .7s ease-in-out;
        -webkit-transition: .7s ease-in-out;
        }
    .newsletter {
        color: white;
        width: 100vw;
        left: calc(-50vw + 50%);
        position: relative;
        background: #4b8a66;
        text-align: center;
        padding: 20px;

        }
    .our-story {
        background: url('<?php echo $full_width_image_3['url']; ?> ') no-repeat;
        background-size: cover;
        color: white;
        border: 2.5px solid white;
        width: 100vw;
        height: 30vw;
        left: calc(-50vw + 50%);
        position: relative;
        text-align: center;
        padding: 20px;
        transition: .7s ease-in-out;
    }
    .our-story-text {
        position: relative;
        background: #4b8a66;
        float: left;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: .5s ease-in-out;
    }
    .our-story-text h3 {
        color: white;
        margin: 2.5px;
        padding-left: 4px;
        padding-right: 4px;
        font-size: 30px;
    }
    .our-story-text:hover {
        background: #1c60cc;
        transition: .5s ease-in-out;
    }
    .our-story:hover {
        opacity: 0.9;
        transition: .5s ease-in-out;
        overflow: hidden;
        z-index: 100;
        border: 3px solid white;
    }
    .blog {
        background: url('<?php echo $full_width_image_1['url']; ?> ') no-repeat;
        background-size: cover;
        color: white;
        border: 2.5px solid white;
        width: 100vw;
        height: 30vw;
        left: calc(-50vw + 50%);
        position: relative;
        text-align: center;
        padding: 20px;
        transition: .5s ease-in-out;
        
    }
    .blog:hover {
            opacity: 0.9;
            transition: .5s ease-in-out;
            overflow: hidden;
            z-index: 100;
            border: 3px solid white;
    }
    .blog-text {
        position: relative;
        background: #4b8a66;
        float: left;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: .5s ease-in-out;
    }
    .blog-text h3 {
        color: white;
        margin: 2.5px;
        padding-left: 4px;
        padding-right: 4px;
        font-size: 30px;
        
    }
    .blog-text:hover {
        background: #1c60cc;
        transition: .5s ease-in-out;
    }
    .shop-all {
        background: url('<?php echo $full_width_image_2['url']; ?> ') no-repeat;
        background-size: cover;
        color: white;
        border: 2.5px solid white;
        width: 100vw;
        height: 30vw;
        left: calc(-50vw + 50%);
        position: relative;
        text-align: center;
        padding: 20px;
        transition: .5s ease-in-out;
    }
    .shop-all:hover {
        opacity: 0.9;
        transition: .5s ease-in-out;
        overflow: hidden;
        z-index: 100;
        border: 3px solid white;
        transition: .5s ease-in-out;
    }
    .shop-all-text {
        position: relative;
        background: #4b8a66;
        float: left;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: .5s ease-in-out;
    }
    .shop-all-text h3 {
        color: white;
        margin: 5px;
        padding-left: 4px;
        padding-right: 4px;
        font-size: 30px;
    }
    .shop-all-text:hover {
        background: #1c60cc;
        transition: .5s ease-in-out;
    }
    
    .a-text h4, p{
        color: white;
        
    }
    .col-full {
        max-width: 100vw;
        padding: 0px;
        margin:0px;
    }
        
    .storefront-breadcrumb {
        display: none;
    }
    .header-widget-region {
        display: none;
    }
    .product_search {
        width: 100%;
    }
    
    .main-card-text-left {
        position: relative;
        background: #4b8a66;
        float: left;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: .5s ease-in-out;
    }
    .main-card-text-left h3 {
        color: white;
        margin: 5px;
        padding-left: 4px;
        padding-right: 4px;
    }
    .main-card-text-left:hover {
        background: #1c60cc;
        transition: .5s ease-in-out;
    }
    
    .main-card-text-right {
        position: relative;
        background: #4b8a66;
        float: left;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: .5s ease-in-out;
    }
    .main-card-text-right h3 {
        color: white;
        margin: 5px;
        padding-left: 4px;
        padding-right: 4px;
    }
    .main-card-text-right:hover {
        background: #1c60cc;
        transition: .5s ease-in-out;
    }
    
    
    
    
    @media (max-width: 1200px) {
        .top-image {
            height: 100vw !important;
          background: url('<?php echo $top_image_tablet['url']; ?> ') no-repeat center; 
          background-size: cover;
        }
        .top-text h3 {
            font-size: 25px;
        }
        .main-cards {
            height:100vw !important;
            overflow: hidden !important;
        }
        .main-card-left {
        display: inline-block;
        width: 100%;
        height: 50%;
        
        

        }
        .main-card-right {
        display: inline-block;
        
        width: 100% !important;
        height: 50%;
        }

    }

    
    
    
    @media (max-width: 990px) {
        .top-text{
            padding: 10px;
            font-size: 35px;
        }
        
    }
    
    @media (max-width: 765px) {
        .top-text{
            display: ;
            font-size: 35px;
            padding: 10px;
        }
      
    }
    @media (max-width: 400px) {
        .shop-all-text h3 {
            font-size: 20px;
        }
        .blog-text h3 {
            font-size: 20px;
        }
        .our-story-text h3 {
            font-size: 20px;
        }
        .top-image {
            background: url('<?php echo $top_image_phone['url']; ?> ') no-repeat center;
            background-size: cover;
        }
        .top-text {
            display: ;
            padding: 10px;
        }
    }
   
    
</style>

<div class="top-image">
    
    <a href="<?php the_field('banner_link'); ?>">
    <div class="top-text">
        <img src="<?php echo $text_asset['url']; ?>">
        <img src="<?php echo $banner_asset['url']; ?>">

    </div>
    
</div>
<div class="main-cards">
    <div class="main-card-left">
        <a href="<?php the_field('left_card_text_link'); ?>">
         <div class="main-card-text-left">
             <h3><?php the_field('left_card_text'); ?></h3>
         </div>
         </a>
    </div>
    <div class="main-card-right">
        <a href="<?php the_field('right_card_text_link'); ?>">
        <div class="main-card-text-right">
             <h3><?php the_field('right_card_text'); ?></h3>
         </div>
         </a>
    </div>
</div>

<div class="shop-all">
    <a href="<?php the_field('full_width_link_2'); ?>">
        <div class="shop-all-text">
        <h3><?php the_field('full_width_text_2'); ?></h3>
    </div>
    </a>
</div>
<div class="blog">
    <a href="<?php the_field('full_width_link_1'); ?>">
        <div class="blog-text">
        <h3><?php the_field('full_width_text_1'); ?></h3>
    </div>
    </a>
</div>
<div class="our-story">
    <a href="<?php the_field('full_width_link_3'); ?>">
        <div class="our-story-text">
        <h3><?php the_field('full_width_text_3'); ?></h3>
    </div>
    </a>
</div>
<div class="about-gms">
        
        <div class="a-text">
                <?php the_field('about'); ?>
                    </div>
</div>
<div class="newsletter">
       <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://groupmedicalsupply.us5.list-manage.com/subscribe/post?u=bd1c30a07b40e8b98e0728dfa&amp;id=0c1d019bca" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to the Newsletter</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bd1c30a07b40e8b98e0728dfa_0c1d019bca" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup--> 

</div>


<?php

get_footer();
?>