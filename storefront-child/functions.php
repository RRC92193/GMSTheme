<?php



add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_styles' );





function storefront_child_enqueue_styles() {



    $parent_style = 'storefront'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.



    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'storefront-child',

        get_stylesheet_directory_uri() . '/style.css',

        array( $parent_style ),

        wp_get_theme()->get('Version')

    );

    wp_enqueue_style('aos', get_stylesheet_directory_uri().'/assets/css/aos.css', array($parent_style), '2.3.1');

    wp_enqueue_style('skeleton',get_stylesheet_directory_uri().'/assets/css/skeleton.css',array($parent_style), '2.0.4');

    wp_enqueue_style('normalize',get_stylesheet_directory_uri().'/assets/css/normalize.css', array($parent_style), '3.0.2');

    wp_enqueue_style('slick',get_stylesheet_directory_uri().'/assets/css/slick.css', array($parent_style));

    wp_enqueue_style('slick-theme',get_stylesheet_directory_uri().'/assets/css/slick-theme.css', array($parent_style));

    //wp_enqueue_style('bootstrap',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css', array($parent_style));
    

}



add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_scripts' );



function storefront_child_enqueue_scripts() {

    wp_enqueue_script( 'aos', get_stylesheet_directory_uri().'/assets/js/aos.js');

    wp_enqueue_script( 'slick', get_stylesheet_directory_uri().'/assets/js/slick.js');

    wp_enqueue_script( 'flip', get_stylesheet_directory_uri().'/assets/js/flip.js');

}



/*

 * Overrides storefront-template-functions

 */

if ( ! function_exists( 'storefront_credit' ) ) {

    /**

     * Display the theme credit

     *

     * @since  1.0.0

     * @return void

     */

    function storefront_credit() {

        ?>

        <!-- .site-info -->

        <?php

    }

}



if ( ! function_exists( 'storefront_homepage_header' ) ) {

    /**

     * Display the page header without the featured image

     *

     * @since 1.0.0

     */

    function storefront_homepage_header() {

        //Do Nothing I don't want the title displayed on the homepage

    }

}



if ( ! function_exists( 'storefront_page_header' ) ) {

    /**

     * Display the page header

     *

     * @since 1.0.0

     */

    function storefront_page_header() {

        //Do not display any title

    }

}



add_action('dks_storefront_header','dks_storefront_header');

if (!function_exists('dks_storefront_header')) {

    function dks_storefront_header() {

        ?>

        <div class="col-full">

        <div class="container nav-container">

        <div class="row">

        <div class="three columns mobile_logo_columns">

            <?php storefront_site_title_or_logo(); ?>

        </div>

<?php

        if ( has_nav_menu( 'secondary' ) ) {

            ?>

            <nav class="secondary-navigation" role="navigation" aria-label="<?php esc_html_e( 'Secondary Navigation', 'storefront' ); ?>">

                <?php

                wp_nav_menu(

                    array(

                        'theme_location'	=> 'secondary',

                        'fallback_cb'		=> '',

                    )

                );

                ?>

            </nav><!-- #site-navigation -->







            <?php

        }

        ?>

        <div class="nine columns mobile_nav_columns">

                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">

		<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span></button>

			<?php

			wp_nav_menu(

				array(

					'theme_location'	=> 'primary',

					'container_class'	=> 'primary-navigation',

					)

			);



			wp_nav_menu(

				array(

					'theme_location'	=> 'handheld',

					'container_class'	=> 'handheld-navigation',

					)

			);

			?>

		</nav><!-- #site-navigation -->



        </div>

            <?php

            if ( storefront_is_woocommerce_activated() ) {

                if ( is_cart() ) {

                    $class = 'current-menu-item';

                } else {

                    $class = '';

                }

                ?>

                <ul id="site-header-cart" class="site-header-cart menu two columns">

                    <li class="<?php echo esc_attr( $class ); ?>">

                        <?php storefront_cart_link(); ?>

                    </li>

                    <li>

                        <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>

                    </li>

                </ul>

                <?php

            }

            ?>

        </div>

</div>

        </div>

<?php

    }

}

remove_action( 'woocommerce_after_shop_loop','woocommerce_catalog_ordering');

remove_action( 'woocommerce_after_shop_loop','woocommerce_result_count');



function getInlineProductsByTag($tag) {



    // Define Query Arguments

    $args = array(

        'post_type' 	 => 'product',

        'product_tag' 	 => $tag

    );



    // Create the new query

    $loop = new WP_Query( $args );



    // Get products number

    $product_count = $loop->post_count;



    // If results

    if( $product_count > 0 ) :



        // Start the loop

        while ( $loop->have_posts() ) : $loop->the_post(); global $product;



            ?>



            <div class="carousel-cell">

                <div class="content">

                    <div class="row">

                        <div class="prod-photo sale-item">

                            <?php if ($tag == 'sale') { ?>

                                <div class="sale-tag">SALE!</div>

                            <?php } ?>

                            <?= $product->get_image(); ?>

                        </div>

                        <div>

                            <span class="category"><?= wc_get_product_category_list($product->get_id()); ?></span>

                            <p>

                                <a href="<?= $product->get_permalink(); ?>" class="productLink"><?= $product->get_name(); ?></a>

                            </p>

                            <p class="price"><?= wc_price($product->get_price()); ?></p>

                        </div>

                    </div>

                </div>

            </div>



            <?php



        endwhile;



    endif; // endif $product_count > 0



    wp_reset_query();



}



function getVerticalProductsByTag($tag) {

    // Define Query Arguments

    $args = array(

        'post_type' 	 => 'product',

        'product_tag' 	 => $tag,

        'posts_per_page' => 3

    );



    // Create the new query

    $loop = new WP_Query( $args );



    // Get products number

    $product_count = $loop->post_count;



    // If results

    if( $product_count > 0 ) :



        // Start the loop

        while ( $loop->have_posts() ) : $loop->the_post(); global $product;



            ?>



                <div class="category-item">

                    <div class="item-img sale-item">

                        <?= $product->get_image(); ?>

                    </div>

                    <div class="item-info">

                        <a href="<?= $product->get_permalink(); ?>" class="productLink"><?= $product->get_name(); ?></a>

                        <p class="price"><?= wc_price($product->get_price()); ?></p>

                    </div>

                </div>









        <?php



        endwhile;



    endif; // endif $product_count > 0



    wp_reset_query();

}



function storefront_header_widget_region() {

    if ( is_active_sidebar( 'header-1' ) ) {

        ?>

        <div class="header-widget-region" role="complementary">

            <div class="col-full">

                <div class="product_search">

                <?php dynamic_sidebar( 'header-1' ); ?>

                </div>

            </div>

        </div>

        <?php

    }

}



// remove sidebar by setting it to inactive on woo pages

function remove_sidebar_from_woo_pages( $is_active_sidebar, $index ) {

    if ( storefront_is_woocommerce_activated() ) {

        if ($index == "sidebar-1" && (is_product() || is_cart() || is_checkout() || is_account_page() )) {

            return false;

        }

        // only show on shop page

        else {

            return $is_active_sidebar;

        }

    }



    else {

        return $is_active_sidebar;

    }

}



add_filter( 'is_active_sidebar', 'remove_sidebar_from_woo_pages', 10, 2 );


add_action( 'woocommerce_before_single_product', 'wpps_exclude_ao', 11 );
function wpps_exclude_ao(){
    echo '<!-- <xsl:stylesheet -->';
}



function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );





@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );





