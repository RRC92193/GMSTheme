<?php

/**

 *

 * 

 *

 * Template Name: Homepage 2020

 * 05/06/2020

 */


get_header(); ?>

<style>
    /* globals */


        /* Hero Section */
    .hero {
        min-width: 100%;
        height: 90vh;
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/hero-spring.jpg');
        background-size: cover;
        background-position: right;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
    }
    .call-to-action {
        width: 50%;
        padding-right: 5%;
        color: white;
        font-weight: bold;
        z-index: 1;
    }
    .shop-now {
        margin-top: 30px;
    }
    .shop-now a {
        border-bottom: solid 1px white;
        padding: 10px 0px 10px 0px;
        color: white;
        font-size: 18px;
    }
    .call-to-action h1 {
        color: white;
        font-weight: bold;
    }

    /* section for each break in content on the homepage */
    
    .site-content {
        background-color: #F1F4F9;
        margin-top: 0px;
    }

    .section1 {
        height: 90%;
        width: 100%;
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/background.png');
        background-position: center;
        margin-top: 40px;
        
    }
    .section2 {
        height: 90%;
        width: 100%;
        margin-top: 40px;

    }
    .section-title {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 40px;
    }
    .section-title h3 {
        color: #4B8A66;
        margin-bottom: 0px;
        font-weight: bold;
        border-bottom: 2px solid #4b8A66;
    }
     /* Wrapper for content in each section */
            
    .wrapper {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-content: center;
        flex-wrap: wrap;
        flex-shrink: 1;
    }


    /* Featured products section */
    
    .featured {
        display: grid;
        grid-template-areas: 
        "img1 con1"
        "con2 img2"
        ;
        max-width: 1140px;
        width: 100%;
        height: 100%;
    }
    .img1 {
        grid-area: img1;
    }
    .con1 {
        grid-area: con1
    }
    .img2 {
        grid-area: img2;
    }
    .con2 {
        grid-area: con2
    }
    .featured-img {
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 10px;
        box-shadow: 2px 2px 5px #111;
    }
    .featured-content {
        width: 100%;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        flex-shrink: 1;
        margin-top: 5px;
        margin-bottom: 5px;
        background: white;
        padding: 10px;
        box-shadow: 2px 2px 5px #111;
    }
    .featured-content h3 {
        color: #4B8A66;
        margin: 0px;
    }
    .featured-description {
        padding: 15px;
        font-size: 14px;
    }
    .item-button {
        display: flex;
        justify-content:center;
    }
    .item-button a {
        background-color: #4B8A66;
        color: white;
        padding: 10px;
    }
    .img1 {
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/BLB_glasses.jpg');
        background-position: center;
        background-size: cover;
    }
    .img2 {
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/GMS00003-RD-Spill-Out-800x800-1.jpg');
        background-position: center;
        background-size: cover;
    }
    
    
    /* Shop By Category Section */
    .category {
        max-width: 1140px;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        flex-shrink: 1;
    }
    .card {
        background: red;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        width: 32%;
        height: 350px;
        margin: 5px;
        color: white;
        box-shadow: 2px 3px 2px #111;
    }
    .card p, a {
        font-weight: bold;
        font-size: 16px;
        border-bottom: solid 1px white;
        color: white;
    }
    .card1 {
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/optical-cat.jpg');
        background-position: center;
        background-size: cover;
    }

    .card2 {
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/vitanizer_cat.jpg');
        background-position: center;
        background-size: cover;
    }
    .card3 {
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/cm-cat.jpg');
        background-position: center;
        background-size: cover;
    }
    .card4 {
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/rustig-cat.jpg');
        background-position: center;
        background-size: cover;
    }
    .card5 {
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/glass-cat.jpg');
        background-position: center;
        background-size: cover;
    }
    .card6 {
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/apd-cat.jpg');
        background-position: center;
        background-size: cover;
    }
    
    
    
        /* Featured Blog Section */
    
    .blog-feature-container {
        max-width: 1140px;
        width: 100%;
        height: 500px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
    }
    .blog-image {
        width: 100%;
        height: 100%;
        background: url('http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/Active-Spring-1.jpg');
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        box-shadow: 2px 2px 5px #111;
    }


    .brand-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        max-width: 1140px;
        flex-shrink: 1;
        padding: 20px 0px 30px 0px;
    }
    .logo {
        width: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px;
    }
    
    
    @media (max-width: 1140px) {
        .blog-image {
            width: 95%;
            height: 90%;
            position: center;
        }
        .category {
            width: 95%;
        }
        .card {
            width: 45%;
            height: 250px;
            margin: 5px;
            box-shadow: none;
        }
        
        
        .featured {
            width: 95%;
        }
        .featured-img {
            width: 100%;
            height: 500px;
            box-shadow: none;
        }
        .featured-content {
            width: 100%;
            box-shadow: none;
        }
        .section1 {
            background: none;
        }
    }

    @media (max-width: 1024px) {
        .hero {
            justify-content: center;
        }
        .call-to-action {
            padding-right: 0px;
            width: 60%;
        }
        .featured {
        grid-template-areas: 
        "img1"
        "con1"
        "img2"
        "con2"
        ;
        }
    }
    
    @media (max-width: 500px) {
        .card {
            width: 100%;
            height: 250px;
            margin: 5px;
        }
        
    }
    
    
</style>

<div class="hero">
    <div class="call-to-action">
    <h1>Spring Sale!</h1>
    <p>Save 20% offf site wide with the Promo Code: treatyourself</p>
    <div class="shop-now">
    <a>Shop Now</a>
    </div>
    </div>
</div>

<div class="section-title">
    <h3>Shop Featured Products</h3>
</div>
<section class="section1">
<div class="wrapper">
<div class="featured">
        <div class="featured-img img1">

        </div>
        <div class="featured-content con1">
            <div class-"featured-title">
            <h3>Blue Light Blocking Glasses</h3>
            </div>
            <div class="featured-description">
            <p>GMS Optical Blue Light Blocking Glasses will help relieve the eye strain and fatigue, and headaches caused by looking at screens. Whether at work, streaming movies and TV at home, or scrolling through your phone on-the-go, GMS Optical has you covered. With a variety of styles and colors you are sure to find the perfect pair…or two(; You will also receive one carrying case, two cleaning cloths, and five pair of nose pads with your glasses to help you make the most your of your purchase. So, what are you waiting for? It’s time to protect your eyes from the daily exposure to blue light. Now got out there and Make Your Eyes Smile!</p>
            <div class="item-button">
                <a>View Product</a>
            </div>
            </div>

        </div>
        <div class="featured-content con2">
            <div class-"featured-title">
            <h3>ChillMed Premier</h3>
            </div>
            <div class="featured-description">
            <p>GMS Optical Blue Light Blocking Glasses will help relieve the eye strain and fatigue, and headaches caused by looking at screens. Whether at work, streaming movies and TV at home, or scrolling through your phone on-the-go, GMS Optical has you covered. With a variety of styles and colors you are sure to find the perfect pair…or two(; You will also receive one carrying case, two cleaning cloths, and five pair of nose pads with your glasses to help you make the most your of your purchase. So, what are you waiting for? It’s time to protect your eyes from the daily exposure to blue light. Now got out there and Make Your Eyes Smile!</p>
                <div class="item-button">
                <a>View Product</a>
            </div>
            </div>
        </div>
        <div class="featured-img img2">
            
        </div>
</div>
</div>

</section>
<div class="section-title">
    <h3>Shop By Category</h3>
</div>
<section class="section2">
    <div class="wrapper">
    <div class="category">
            <div class="card card1">
                
                <a href="#">GMS Optical</a>
            </div>
        <div class="card card2">
            <p>Pill Containers</p>
        </div>
        <div class="card card3">
            <p>Diabetic Supplies</p>
        </div>
        <div class="card card4">
            <p>Safety Products</p>
        </div>
        <div class="card card5">
            <p>Healthy Living</p>
        </div>
        <div class="card card6">
            <p>Automatic Pill Dispensers</p>
        </div>
     </div>
     </div>
</section>
<div class="section-title">
    <h3>Check Out Our Recent Blog</h3>
</div>
<section class="section1">
    <div class="wrapper">
    <div class="blog-feature-container">
        <div class="blog-image">
            
        </div>
        
    </div>
    </div>
</section>
<div class="section-title">
    <h3>Our Brands</31>
</div>
<section class="section2">
    <div class="wrapper">
    <div class="brand-section">
        <div class="logo">
    <img src="http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/GMS-Logo-cylinders_Final-Draft-black-Text.png">
    </div>
    <div class="logo">
    <img src="http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/GMS-Optical-Logo-Eye-Cones-Huge.png">
    </div>
    <div class="logo">
    <img src="http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/rustig-orange.png">
    </div>
    <div class="logo">
    <img src="http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/dittibag-logo-Ai.png">
    </div>
    <div class="logo">
    <img src="http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/chillmed-1920x10802-1.png">
    </div>
    </div>
    </div>
</section>
























<?php

get_footer();
?>