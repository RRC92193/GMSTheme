<?php

/**

 *

 * From full-width storefront template

 *

 * Template Name: Consumer Homepage

 *

 */





get_header(); ?>

<script type="text/javascript" src="https://groupmedicalsupply.com/wp-content/themes/storefront-child/assets/js/slick.js"></script>


	<div id="primary" class="content-area consumer-home">

		<main id="main" class="site-main" role="main">

            <div class="gms-container home-slideshow">

            <section id="home-slideshow" class="lazy slider">

                <?php

                    while (have_rows('slideshow_repeater')): the_row();

                        $image = get_sub_field('image');

                        $mobile_image = get_sub_field('mobile_image');

                        $image_text = get_sub_field('image_text');

                        $button_text = get_sub_field('button_text');

                        $button_link = get_sub_field('button_link');

                    ?>



                        <div class="slick-slide" mobile-image-url="<?= $mobile_image['url']; ?>" desktop-image-url="<?= $image['url']; ?>"

                             style="background-repeat: no-repeat; background-position: center center; background-size: cover;">

                            <div class="gms-container">

                                <div class="content">

                                    <h1><?= $image_text; ?> </h1>

                                    <p>

                                        <a href="<?= $button_link ;?>" class="button"><?= $button_text; ?></a>

                                    </p>

                                </div>

                            </div>

                        </div>



                    <?php

                    endwhile;

                ?>

            </section>



            </div>







            <?php

                $first_carousel = get_field('first_carousel');



                // issue with urls not being set on the same image, but only attachment id set

                if (!empty($first_carousel['first_cell']['image']['url'])) {

                    $first_img_url = $first_carousel['first_cell']['image']['url'];

                }

                else {

                    $first_img_url = wp_get_attachment_image_url($first_carousel['first_cell']['image'], 'full');

                }



                if (!empty($first_carousel['second_cell']['image']['url'])) {

                    $second_img_url = $first_carousel['second_cell']['image']['url'];

                }

                else {

                    $second_img_url = wp_get_attachment_image_url($first_carousel['second_cell']['image'], 'full');

                }



                if (!empty($first_carousel['third_cell']['image']['url'])) {

                    $third_img_url = $first_carousel['third_cell']['image']['url'];

                }

                else {

                    $third_img_url = wp_get_attachment_image_url($first_carousel['third_cell']['image'], 'full');

                }
			
			           // fourth image loop
			           // 
			           // 
			     if (!empty($first_carousel['fourth_cell']['image']['url'])) {

                    $fourth_img_url = $first_carousel['fourth_cell']['image']['url'];

                }

                else {

                    $fourth_img_url = wp_get_attachment_image_url($first_carousel['fourth_cell']['image'], 'full');

                }
			// Fifth Image
						     if (!empty($first_carousel['fifth_cell']['image']['url'])) {

                    $fifth_img_url = $first_carousel['fifth_cell']['image']['url'];

                }

                else {

                    $fifth_img_url = wp_get_attachment_image_url($first_carousel['fifth_cell']['image'], 'full');

                }
			// Sixth Image
						     if (!empty($first_carousel['sixth_cell']['image']['url'])) {

                    $sixth_img_url = $first_carousel['sixth_cell']['image']['url'];

                }

                else {

                    $sixth_img_url = wp_get_attachment_image_url($first_carousel['sixth_cell']['image'], 'full');

                }
                // second row of cards starts here and has html added after line 180 

            ?>

            <div class="gms-container">

                <div id="shop-features">

                    <div class="shop-feature" style="background: url(<?= $first_img_url; ?>)no-repeat; background-size: cover;">

                        <h2><?= $first_carousel['first_cell']['header_text']; ?></h2>

                        <span class="label"><?= $first_carousel['first_cell']['tag_text']; ?></span><br>

                        <a href="<?= $first_carousel['first_cell']['button_link']; ?>" class="button"><?= $first_carousel['first_cell']['button_text']; ?></a>

                    </div>



                    <div class="shop-feature" style="background: url(<?= $second_img_url; ?>)no-repeat; background-size: cover;">

                        <h2><?= $first_carousel['second_cell']['header_text']; ?></h2>

                        <span class="label"><?= $first_carousel['second_cell']['tag_text']; ?></span><br>

                        <a href="<?= $first_carousel['second_cell']['button_link']; ?>" class="button"><?= $first_carousel['second_cell']['button_text']; ?></a>

                    </div>



                    <div class="shop-feature" style="background: url(<?= $third_img_url; ?>)no-repeat; background-size: cover;">

                        <h2><?= $first_carousel['third_cell']['header_text']; ?></h2>

                        <span class="label"><?= $first_carousel['third_cell']['tag_text']; ?></span><br>

                        <a href="<?= $first_carousel['third_cell']['button_link']; ?>" class="button"><?= $first_carousel['third_cell']['button_text']; ?></a>

                    </div>
				</div>	
	<!-- Second Row of Cards starts here -->
				<div id="shop-features">	
					
                    <div class="shop-feature row-2" style="background: url(<?= $fourth_img_url; ?>)no-repeat; background-size: cover;">

                        <h2><?= $first_carousel['fourth_cell']['header_text']; ?></h2>

                        <span class="label"><?= $first_carousel['fourth_cell']['tag_text']; ?></span><br>

                        <a href="<?= $first_carousel['fourth_cell']['button_link']; ?>" class="button"><?= $first_carousel['fourth_cell']['button_text']; ?></a>

                    </div>



                    <div class="shop-feature row-2" style="background: url(<?= $fifth_img_url; ?>)no-repeat; background-size: cover;">

                        <h2><?= $first_carousel['fifth_cell']['header_text']; ?></h2>

                        <span class="label"><?= $first_carousel['fifth_cell']['tag_text']; ?></span><br>

                        <a href="<?= $first_carousel['fifth_cell']['button_link']; ?>" class="button"><?= $first_carousel['fifth_cell']['button_text']; ?></a>

                    </div>



                    <div class="shop-feature row-2" style="background: url(<?= $sixth_img_url; ?>)no-repeat; background-size: cover;">

                        <h2><?= $first_carousel['sixth_cell']['header_text']; ?></h2>

                        <span class="label"><?= $first_carousel['sixth_cell']['tag_text']; ?></span><br>

                        <a href="<?= $first_carousel['sixth_cell']['button_link']; ?>" class="button"><?= $first_carousel['sixth_cell']['button_text']; ?></a>

                    </div>


                </div>

                 <!-- styling for body image ad -->
                    <style type="text/css">
                    .body-image {
                        position: relative;
                        display: inline-block; /* Make the width of box same as image */
                        margin: 0px;

                        width: 100%;
                    }
                    .body-image .body-ad-image {
                        box-shadow: 5px 5px 5px grey;
                        border-radius: 8px;
                        transition: 0.3s;
                        width: 100%;
                        margin: 10px 5px 10px 3px;
                        position: center;
                

                    }
                    .body-image .body-ad-image:hover {
                        box-shadow: 9px 9px 9px grey;
                        

                    }
                    .body-image img {
                        width: 100%;
                    }
                    .body-image .button {
                        background: #96d8ff;
                        color: #f9f9f9;
                        text-shadow: 2px 2px black;
                        text-transform: uppercase
                    }
                    .body-image .ad-text {
                        position: absolute;
                        z-index: 999;
                        margin:3px;
                        left: 20px;
                        right: 0;        
                        text-align: left;
                        top: 10%; /* Adjust this value to move the positioned div up and down */
                        background: #;
                        color: #cfedff;
                        width: 45%; /* Set the width of the positioned div */
                        text-shadow: 2px 2px black;
                    }
                    .body-image .body-image-text {
                        font-family: Arial,sans-serif;
                        font-size: 32px;
                        background: ;
                    }
                    @media screen and (max-device-width: 700px), screen and (max-width: 700px) {

                        .ad-text{width:75%!important; height:auto!important; }
                        .body-image-text{font-size: 19.48px!important;}
                        .button{font-size: 19.48px!important;}
                    
                    @media screen and (max-device-width: 350px), screen and (max-width: 350px) {
                        .ad-text{width:90%!important; height:auto!important; }
                        .body-image-text{font-size: 17px!important;}
                        .button{font-size: 17px!important;}
                    }
                    @media screen and (max-device-width: 290px), screen and (max-width: 290px) {
                        .body-image-text{display: none!important;}
                        
                    }
                                    
                    </style>
                    <!-- End styling for body image ad -->
                     
                    <!-- start of body image ad -->
                    
                    <?php
                    $body_image = get_field('body_image');
                    ?>
                    
                <div class="body-image">
                    <div class="ad-image">
                        <a href="https://groupmedicalsupply.com/product-category/optical-products/">
                        <img class="body-ad-image" src="<?php echo $body_image['url']; ?>" alt="ChillMed Body Image">
                        </a>
                        
                        <div class="ad-text">
                            
                            <p class="body-image-text">
                            
                            </p>
                            <a href="https://groupmedicalsupply.com/product-category/optical-products/" </a>
                        
                        </div>
                        
                    </div>

                    
                </div>
                
                <!-- end of body image ad -->
                
                                    <?php 
                    $who_is_gms = get_field('who_is_gms');
                    
                    ?>

                                <style>
                    .whois {
                        background: url('<?php echo $who_is_gms['url']; ?> ');
                        background-size: cover;
                        opacity: ;
                        color: #f9f9f9;
                        font-weight: bold;
                        margin-top: 15px;
                        margin-bottom: 11px;
                        border-radius: 8px;
                        box-shadow: 4px 4px 4px grey;
                            text-shadow:
                            0.05em 0 black,
                            0 0.05em black,
                            -0.05em 0 black,
                            0 -0.05em black,
                            -0.05em -0.05em black,
                            -0.05em 0.05em black,
                            0.05em -0.05em black,
                            0.05em 0.05em black;
                        
                    }
                    .whois:hover {
                        box-shadow: 7px 7px 7px grey;
                    }
                    
                    .who-content {
                        padding: 15px;
                    }
                    .who-content p {
                        margin-right: 8px;
                        margin-left: 8px;
                        margin-bottom: 8px;
                    }
                    .who-content h4 {
                        text-align: center;
                        color: #f9f9f9;
                        font-weight: bold;
                    }
                </style>
                
                
                <div class="whois">
                    <div class="who-content">
                    <h4>
                        Who is GMS?
                    </h4>
                    <p>
                        GMS is more than just a company that sells medication organization tools. We are a mix of everyone who works here. A little bit of the underdog that had a dream to help others, the girl who loves animals, the analytical boy that loves computers, the book lovers, the jokesters, and the kind-hearted. We are a little bit of everything and everyone.

                    </p>
                    <p>
                        Our greatest joy is when customers become our friends. We want to build a relationship with you to ensure that you can get the best service that we have to offer. If we build a friendship, then our hope is that you can ask and tell us anything. The more we know, the more we can help.

                    </p>
                    <h4>
                        What Keeps Us Going?
                    </h4>
                    <p>
                        The answer is simple. It’s you.
                    </p>
                    <p>
We’ll be honest, we probably won’t understand exactly what your situation is and how it makes you feel. So, we won’t pretend like we do. Each person has their own experiences and feelings. No one else will fully understand until they’ve been through the same situation. Afterall, the saying is, you won’t know until you’ve walked a mile in their shoes. Just because we can’t fully understand some things about you, doesn’t mean that we don’t care.
We care about your health.
                    </p>
                    <p>
                        We care about you. Together let’s start your journey to an organized, healthy lifestyle.
                    </p>
                    </div>
                </div>
                
                
   <!--

                <?php

                $editable_product_carousel = get_field('tagged_product_carousel');

                ?>

                <div class="carousel">

                    <h2><?= $editable_product_carousel['tagged_product_title']; ?></h2>

                    <div class="responsive">

                        <?php getInlineProductsByTag($editable_product_carousel['product_tag']); ?>

                    </div>

                </div>

-->
             


<!--

                <div class="carousel">

                    <h2>ON SALE</h2>

                    <div class="responsive">

                        <?php getInlineProductsByTag('sale'); ?>

                    </div>

                </div>
                
                -->

	<!-- start of input 			
				
<div class="container-news">
    <Style>
        .container-news {
            height: 10em;
            padding: 10px;
            
            display: flex;
            align-items: center;
            justify-content: center;

        }
       .newsletter {
           display: block;
           margin-left: auto;
           margin-right: auto;
           align-content: space-between;
            }
        .newsletter label{
            font-variant: small-caps;
            text-shadow: 1px 1px grey;
            font-size: x-large;
            height: 50px;
            width: 100px;
            padding: 5px;
        }    
        .newsletter input {
            color: black;
            border-radius: 4px;
            height: 50px;
            width: 300px;
            box-shadow: 5px 5px 5px grey;
            text-align: center;

        }
        .newsletter button {
            border-radius: 4px;
            color: black;
            background: #f9f9f9;
            box-shadow: 5px 5px 5px grey;
            height: 55px;
            width: 100px;
            border-radius: 9px;
        }
        .newsletter button:active {
            background-color: red;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
}
    </Style>
    <div class="newsletter">
    <label class="sign-up" for="name">Sign Up For Our Newsletter!</label>

<input class="news-input" type="text" id="name" name="name" required
       minlength="4" maxlength="100" size="25" placeholder="Enter Email">
       <button class="news-button"> Submit </button>
    </div>
</div>
				
 end of input -->
				
                <div class="homeColumns">

                    <div class="gms-container">

                        <div id="shop-categories">

                            <div class="shop-category">

                                <h2>ON SALE</h2>

                                <?php getVerticalProductsByTag('sale'); ?>

                            </div>



                            <div class="shop-category">

                                <h2>MOST POPULAR</h2>

                                <?php getVerticalProductsByTag('popular'); ?>

                            </div>



                            <div class="shop-category">

                                <h2>COMING SOON</h2>

                                <?php getVerticalProductsByTag('new'); ?>

                            </div>

                        </div>

                    </div>



            </div>



		</main><!-- #main -->

	</div><!-- #primary -->



    <script type="text/javascript">

        jQuery(document).on('ready', function() {



            jQuery('.responsive').slick({

                dots: false,

                infinite: true,

                speed: 300,

                slidesToShow: 4,

                slidesToScroll: 4,

                responsive: [

                    {

                        breakpoint: 1024,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 3,

                            infinite: true,

                            dots: true

                        }

                    },

                    {

                        breakpoint: 925,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 2

                        }

                    },

                    {

                        breakpoint: 480,

                        settings: {

                            slidesToShow: 1,

                            slidesToScroll: 1

                        }

                    }

                ]

            });



            setHeroSlidesByWidth();



            jQuery(window).on("resize", setHeroSlidesByWidth);



        });



        function setHeroSlidesByWidth() {

            var windowWidth = jQuery(window).width();



            var slides = jQuery('#home-slideshow').find(".slick-slide");



            if (windowWidth >= 768) {

                // use the desktop image

                slides.each(function() {

                    jQuery(this).css("background-image", "url(" + jQuery(this).attr('desktop-image-url') + ")")

                });



            }

            else {

                // use the mobile image

                slides.each(function() {

                    jQuery(this).css("background-image", "url(" + jQuery(this).attr('mobile-image-url') + ")")

                });

            }



        }



    </script>



<?php

get_footer();

