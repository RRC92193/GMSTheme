<?php

/**

 *

 * 

 *

 * Template Name: Blog 2.0

 *

 */


get_header(); ?>


<?php

   $args = array('posts_per_page' => 15);
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) : 
      while($category_posts->have_posts()) : 
         $category_posts->the_post();
?>
    
    <div id="b-contain"> 
        <div class="thumbnail">
        <?php if ( has_post_thumbnail() ) ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blog-image">
          <img><?php the_post_thumbnail();?></img></a>

         </div>
         
        <div class="blog-card">
         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_except() ?></div>      
       
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

    <button class="btn"><a href=""><h2>See All Posts</h2</a></button>
</div>
</div>
<br>
 
        <style>
             #b-contain {
                display: table;
                overflow: hidden;
                margin: 13px;
             }
             #b-contain:hover {
                background: #f9f9f9;
                border-radius: 10px;
                box-shadow: 10px 10px 10px grey;
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
            }
            button:hover {
                box-shadow: 3px 3px 3px grey;
                transform: scale(1.1);
            }
            button a h2 {
                text-align: center;
            }
            button a h2:hover {

                
            }
            .title-image {
                background: url(https://m.media-amazon.com/images/S/abs-image-upload-na/b/AmazonStores/ATVPDKIKX0DER/86d7eb91905d649f68ef2ff0974e2003.w2560.h1440._CR264%2C463%2C2081%2C416_SX1500_.jpg) no-repeat;
                width:100%;
                height: auto;
            }
            .thumbnail {
                float: left;
                width: 50%;
                overflow:hidden;
                margin: 5px;
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
                .thumbnail {
                    float: center;
                    width: 100%;
                }
                .col-full {
                    width: 100%;
                }
                .post-content {
                    margin: 5px;
                }
            }
        </style>

<?php
get_footer();

?>