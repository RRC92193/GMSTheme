<?php

/**

 *

 * 

 *

 * Template Name: Blog Archive 2020

 *

 */


get_header(); ?>
<style>
    h1, h2, h3, h4, a {
        color: #4b8a66;
        font-weight: bold;
        margin-bottom: 0px;
    }
    h5 {
        color: ;
    }
    .blog-banner {
        width: 100%;
        margin-top: 7%;
    }
    .first-blog-wrapper {
        max-width: 1140px;
        width: 100%;
        display: grid;
        grid-template-columns: 47% 47%;
        justify-content: space-between;
    }
    
    .blog-wrapper {
        max-width: 1140px;
        width: 100%;
        display: grid;
        grid-template-columns: 33% 33% 33%;
        justify-content: space-between;
        
    }
    
    /*
    .blog-wrapper {
        display: flex;
    }
    */
    .blog-thumbnail {
        margin: 10px;
    }
    .blog-thumbnail img {
        width: 100%;
    }
    .blog-thumbnail-second {
        margin: 10px;
    }
    .blog-thumbanil-second a {
        font-size: 18px;
        margin-bottom: 0px;
    }
    .blog-thumbnail-second img {
        max-height: 200px;
    }
    .latest {
        padding: 15px;
    }
    .latest-title {
        border-bottom: 2px solid #333;
    }
    .read-more {
        background-color: #4b8a66;
        padding: 6px;
        color: #f1f1f1;
        font-size: 12px;
    }
    .pagination {
        display: flex;
        justify-content: flex-end;
        grid-column-start: 1; 
        grid-column-end: 4;
        word-spacing: 10px;
    }
    .pagination a {
        padding-left: 5px;
        padding-right: 5px;
    }
    
    @media (max-width: 1000px) {
        .first-blog-wrapper {
            grid-template-columns: 100%;
            justify-items: center;
            align-items: center;
        }
    }
    @media (max-width: 500px) {
        .blog-wrapper {
            display: block;
    }
</style>

<div class="blog-banner">
    <img src="http://www.dev.groupmedicalsupply.com/wp-content/uploads/2020/05/Banners-for-Our-Story-Page-scaled-1.jpg">
</div>
<div class="latest">
    <div class="latest-title">
    <h4> Latest Blogs</h4>
    </div>
</div>

<div class="wrapper-background">
<div class="first-blog-wrapper">
<?php

   $args = array(
       'posts_per_page' => 2, 
       );
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) : 
      while($category_posts->have_posts()) : 
         $category_posts->the_post();
?>  
                
    <div class=" blog-thumbnail <?php post_class(); ?> "id="post-<?php the_ID(); ?>">
        <?php the_post_thumbnail();?> 
        <div class="author">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</div>
		  <h5><?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?> </h5>
		<?php the_excerpt() ?>
		<a class="read-more" href="<?php the_permalink(); ?>"> Read More </a> 
	</div>


  
 
  
<?php
      endwhile; 
      
      
      ?>
      

   <?php   
   else: 
?>

      Oops, there are no posts.

<?php
   endif;
   wp_reset_query()
?>
</div>
</div>

<div class="blog-wrapper">
<?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $current_page = get_query_var('paged');
    $current_page = max( 1, $current_page );
    
    $per_page = 12;
    $offset_start = 2;
    $offset = ( $current_page - 1 ) * $per_page + $offset_start;
    $args = array(
       'posts_per_page' => $per_page, 
       'offset' => $offset,
        'paged' => $current_page
   );
    $wp_query = new WP_Query($args);
   
    $total_rows = max( 0, $post_list->found_posts - $offset_start );
    $total_pages = ceil( $total_rows / $per_page );

   if($wp_query->have_posts()) : 
      while($wp_query->have_posts()) : 
         $wp_query->the_post();
?>  
                
    <div class=" blog-thumbnail-second <?php post_class(); ?> "id="post-<?php the_ID(); ?>">
        <?php the_post_thumbnail();?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		  <h5><?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?> </h5>
		  <a class="read-more" href="<?php the_permalink(); ?>"> Read More </a>
	</div>

  
<?php

      endwhile; ?>
    <div class="pagination">
    <?php 
    $big = 999999999; 
        echo paginate_links( array(
            'total'   => $total_pages,
            'current' => $current_page,
            'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'total'        => $wp_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',

        ) );
    ?>
</div>
   
   <?php   
   else: 
?>

      Oops, there are no posts.

<?php
   endif;
   wp_reset_query()
?>

</div> 
<?php
get_footer();

?>