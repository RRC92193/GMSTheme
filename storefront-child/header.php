<?php

/**

 * The header for our theme.

 *

 * Displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up till <div id="content">

 *

 * @package storefront

 */



?><!doctype html>

<html <?php language_attributes(); ?>>

<head>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/fontawesome.css" integrity="sha384-HU5rcgG/yUrsDGWsVACclYdzdCcn5yU8V/3V84zSrPDHwZEdjykadlgI6RHrxGrJ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/brands.css" integrity="sha384-BCEeiNUiLzxxoeYaIu7jJqq0aVVz2O2Ig4WbWEmRQ2Dx/AAxNV1wMDBXyyrxw1Zd" crossorigin="anonymous">
	
	<meta name="p:domain_verify" content="8cfc8df880d22cf84f6f249dd651bc18"/>
	
	

	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5NBQND');</script>
<!-- End Google Tag Manager -->

    <?php wp_head(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5NBQND"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


	
</head>




	<!-- Microsft Ads -->
	<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26072001"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
	
	<style>
	    .alert {
	        width: 100%;
	        background: black;
	        position: fixed;
	        z-index: 4;
	    }
	</style>

	
<body <?php body_class(); ?>>

<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>


<?php do_action( 'storefront_before_site' ); ?>



<div id="page" class="hfeed site">

	<?php do_action( 'storefront_before_header' ); ?>



	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">



		<?php

		/**

		 * Functions hooked into storefront_header action

		 *

		 * @hooked storefront_header_container                 - 0

		 * @hooked storefront_skip_links                       - 5

		 * @hooked storefront_social_icons                     - 10

		 * @hooked storefront_site_branding                    - 20

		 * @hooked storefront_secondary_navigation             - 30

		 * @hooked storefront_product_search                   - 40

		 * @hooked storefront_header_container_close           - 41

		 * @hooked storefront_primary_navigation_wrapper       - 42

		 * @hooked storefront_primary_navigation               - 50

		 * @hooked storefront_header_cart                      - 60

		 * @hooked storefront_primary_navigation_wrapper_close - 68

		 */

		do_action( 'dks_storefront_header' ); ?>



	</header><!-- #masthead -->



	<?php

	/**

	 * Functions hooked in to storefront_before_content

	 *

	 * @hooked storefront_header_widget_region - 10

	 * @hooked woocommerce_breadcrumb - 10

	 */

	do_action( 'storefront_before_content' ); ?>

<?php if (is_page(7311)): ?>
    	<div id="content" class="site-content" tabindex="-1">

    	    
    	   <?php elseif ( is_page_template( 'standard2020.php' ) ): ?>
    	<div id="content" class="site-content" tabindex="-1">
    	    
    
    <?php else:?>

	<div id="content" class="site-content" tabindex="-1">

		<div class="col-full">

    <?php endif;?>

		<?php

		do_action( 'storefront_content_top' );

