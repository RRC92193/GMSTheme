<?php

/**

 *

 * 

 *

 * Template Name: Blog Template

 *

 */


get_header(); ?>
<div class="head-image">
    <span>GMS BLOG</span>
    <p>Inspiring You to Live Happy and Healthy</p>
</div>

<?php

   $args = array('posts_per_page' => 20);
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) : 
      while($category_posts->have_posts()) : 
         $category_posts->the_post();
?>
    
    <div id="b-contain"> 
        <div class="thumbnail">
        <?php if ( has_post_thumbnail() ) ?>
        <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title_attribute(); ?>" class="blog-image">
          <img><?php the_post_thumbnail();?></img></a>

         </div>
         
        <div class="blog-card">
         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_excerpt() ?></div>  
         <div>
            <button class="read-more-btn">
                <a href="<?php the_permalink(); ?>" class="read-more-link" target="_blank"> Read More 
                </a>
            </button>
         </div>
       
        </div>
    </div>   
<?php
      endwhile;
   else: 
?>

      Oops, there are no posts.

<?php
   endif;
   wp_reset_query()
?>

<div class="btn-wrapper">
<div class="btn-box">

    <button class="btn">
        <a href=""><h2>See All Posts</h2</a>
        </button>
</div>
</div>
<br>
 <!--  btn-wrapper btn-box display set to none until more posts -->
        <style>
         
        
            .btn-wrapper, .btn-box {
                display: none;
            }    
        
        
             #b-contain {
                display: table;
                overflow: hidden;
                margin: 16px;
             }
             #b-contain:hover {
                background: #f9f9f9;
                border-radius: 10px;
                box-shadow: 10px 10px 10px grey;
                transition: .5s ease-in-out;
                transform: scale(1.02);
             }
             #b-contain img {
                width: 100%;
                height: 25%;
             }
            #b-contain img:hover {
                transition: .5s ease-in-out;
                transform: scale(1.1);
            }
            .blog-title {
                text-align: center;
                margin: 10px;
                
            }
            .blog-card {
                float: right;
                width: 45%;
                overflow:hidden;
                vertical-align: center;
                margin-left: 5px;
                margin-right 5px;
                margin-top: 10px;
                padding-right: 10px;
                
            }
            .btn-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 15px;
            }
            button {
                background-color: #f9f9f9;
                border-radius: 4px;
                margin-top: 15px;
                color: black;
                border: 2px solid grey;
            }
            button:hover {
                border: 2px solid grey;
                transition: .5s ease-in;
                transform: scale(1.02);
            }
            button a h2 {
                margin-top: 9px;
                text-align: center;
                color: black;
            }
            .head-image {
                position: relative;
                background: url(https://images.unsplash.com/photo-1505682634904-d7c8d95cdc50?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80) no-repeat;
                background-size: cover;
                text-align: center;
                height: 300px;
                border: 2px solid grey;
                margin: 10px;
            }
            .head-image span {
                position: absolute;
                background: ;
                color: #fff;
                font-size: 40px;
                padding: 10px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-family: 'Arial', sans-serif;
            }
            .head-image p {
                position: absolute;
                background: ;
                color: #fff;
                font-size: 15px;
                padding: 10px;
                top: 70%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-family: 'Arial', sans-serif;
            }
            .read-more-btn {
                margin-bottom: 10px;
                margin-left: 7px;
            }
            .storefront-breadcrumb {
               padding: 0px;
            }
            .thumbnail {
                float: left;
                width: 50%;
                overflow:hidden;
                margin: 0px;
                vertical-align: center;
            }

            .woocommerce-breadcrumb {
                display: none;
            }

            @media (max-width:1000px) {

                .blog-card {
                    float: center;
                    width: 100%;
                    text-align: center;
                }
                .col-full {
                    width: 100%;
                }
                .thumbnail {
                    float: center;
                    width: 100%;
                }
                .post-content {
                    margin: 5px;
                }
                .head-image {
                    height: 150px;
                    margin-top: 0px;
                    border: 0px;
                }
                .head-image p {
                    display: none;
                }

                .menu-item {
                    font-size: 12px;
                }

            }

        @media (max-width:600px) {

                .col-full {
                    max-width: 90%;
                    margin: 5%;
                    Margin: 5%;
                }
                .header-widget-region {
                    display: none;
                }
        </style>

<?php
get_footer();

?>