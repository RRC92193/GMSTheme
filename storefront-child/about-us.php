<?php

/**

 *

 * 

 *

 * Template Name: About Us Template

 * 8/21/2019

 */


get_header(); ?>
<?php
$right_card_heading_1 = get_field('right_card_heading_1');
?>

<style>

    .about-contain {
        width: 100vw;
        text-align: center;
    }
    .about-image {
        
        width: 100vw;
        left: calc(-50vw + 50%);
        position: relative;
        height: 40vw;
        background: url(https://images.unsplash.com/photo-1500514300702-8833f1fba0c6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2600&q=80) center;
        text-align: center;
    }
    .about-title {
        position: relative;
        top: 50%;
        color: #f9f9f9;
    }
    .space-image {
        
                display: table;
                overflow: hidden;
                margin-top: 0px;
                margin-bottom: 0px;
                border-bottom: 2px solid black;
    }
    .about-card-left {
                float: right;
                width: 49%;
                overflow:hidden;
                vertical-align: center;
                margin-left: 5px;
                margin-right 5px;
                margin-top: 10px;
                padding-right: 10px;
                text-align: center;
    }
    .about-card-left h2, h3 {
        text-align: center;
    }
    .about-card-left h2 {
        margin-top: 50px;
    }
    .about-card-left p {
        padding-bottom: 20px;
    }
    
    .about-img-left {
                float: left;
                width: 50%;
                height: auto;
                overflow:hidden;
                margin-top: 0px;
                vertical-align: center;
                border-radius: 0px;
    }
    
    .about-img-left:hover {
        opacity: 1;
        background-color: #f9f9f9;
    }
    
        .img-right {
                float: right;
                width: 50%;
                height: auto;
                overflow:hidden;
                margin-top: 0px;
                vertical-align: center;
                border-radius: 0px;
    }
        .card-right {
                float: left;
                width: 49%;
                overflow:hidden;
                vertical-align: center;
                margin-right: 5px;
                margin-left 15px;
                margin-top: 10px;
                padding-left: 10px;
                text-align: center;

    }
    .card-right
        .card-right h2, h3 {
             text-align: center;
    }
        .card-right h2 {
             margin-top: 100px;
    }
        .card-right p {
            padding-bottom: 20px;
        }
    
    .storefront-breadcrumb {
        display: none;
    }
    .product_search {
        display: none;
    }
    .col-full {
        max-width: 100vw;
        padding: 0px;
        margin:0px;
    }
    
     @media (max-width:1200px) {

        .about-card-left {
        float: center;
        width: 100%;
        text-align: center;
        }
        .about-img-left {
            float: center;
            width: 100%;
        }
        
        .card-right {
        float: center;
        width: 100%;
        text-align: center;
        }
        .img-right {
            float: center;
            width: 100%;
        }
        .header-widget-region {
            display: none;
        }

</style>

<div class="about-contain">
    <div class="about-image"
        <div>
        <h1 class="about-title">Our Story</h1>
        </div>
    </div>
    
<div class="space-image">
    <div class="img-left-contain">
        <div class="about-card-left">
            <h2><?php the_field('right_card_heading_1'); ?></h2>
            <h3><?php the_field('right_card_date_1'); ?></h3>
            <p><?php the_field('right_card_paragraph_1'); ?></p>
        </div>
        <img class="about-img-left" src="https://images.unsplash.com/photo-1470115636492-6d2b56f9146d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="card-right">
            <h2><?php the_field('left_card_heading_1'); ?></h2>
            <h3><?php the_field('left_card_date_1'); ?></h3>
            <p><?php the_field('left_card_paragraph_1'); ?></p>
        </div>
        <img class="img-right" src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="about-card-left">
            <h2><?php the_field('right_card_heading_2'); ?></h2>
            <h3><?php the_field('right_card_date_2'); ?></h3>
            <p><?php the_field('right_card_paragraph_2'); ?></p>
        </div>
        <img class="about-img-left" src="https://images.unsplash.com/photo-1517502884422-41eaead166d4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2125&q=80"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="card-right">
            <h2><?php the_field('left_card_heading_2'); ?></h2>
            <h3><?php the_field('left_card_date_2'); ?></h3>
            <p><?php the_field('left_card_paragraph_2'); ?></p>
        </div>
        <img class="img-right" src="/wp-admin/images/Chillmed-about.jpg"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="about-card-left">
            <h2><?php the_field('right_card_heading_3'); ?></h2>
            <h3><?php the_field('right_card_date_3'); ?></h3>
            <p><?php the_field('right_card_paragraph_3'); ?></p>
        </div>
        <img class="about-img-left" src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="card-right">
            <h2><?php the_field('left_card_heading_3'); ?></h2>
            <h3><?php the_field('left_card_date_3'); ?></h3>
            <p><?php the_field('left_card_paragraph_3'); ?></p>
        </div>
        <img class="img-right" src="https://images.unsplash.com/photo-1557775446-b5678ecaf086?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="about-card-left">
            <h2><?php the_field('right_card_heading_4'); ?></h2>
            <h3><?php the_field('right_card_date_4'); ?></h3>
            <p><?php the_field('right_card_paragraph_4'); ?></p>
        </div>
        <img class="about-img-left" src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="card-right">
            <h2><?php the_field('left_card_heading_4'); ?></h2>
            <h3><?php the_field('left_card_date_4'); ?></h3>
            <p><?php the_field('left_card_paragraph_4'); ?></p>
        </div>
        <img class="img-right" src="https://images.unsplash.com/photo-1519558128476-0ac464963897?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="about-card-left">
            <h2><?php the_field('right_card_heading_5'); ?></h2>
            <h3><?php the_field('right_card_date_5'); ?></h3>
            <p><?php the_field('right_card_paragraph_5'); ?></p>
        </div>
        <img class="about-img-left" src="https://images.unsplash.com/photo-1507494924047-60b8ee826ca9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2466&q=80"> </img>
    </div>
    
</div>
<div class="space-image">
    <div class="img-left-contain">
        <div class="card-right">
            <h2><?php the_field('left_card_heading_5'); ?></h2>
            <h3><?php the_field('left_card_date_5'); ?></h3>
            <p><?php the_field('left_card_paragraph_5'); ?></p>
        </div>
        <img class="img-right" src="https://images.unsplash.com/photo-1488229297570-58520851e868?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2549&q=80"> </img>
    </div>
    
</div>
    
    <div class="about-image"
        <div>
        <h1 class="about-title"></h1>
        </div>
    </div>

</div>


<?php

get_footer();
