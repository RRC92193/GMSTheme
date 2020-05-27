<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package storefront

 */



?>



		</div><!-- .col-full -->

	</div><!-- #content -->



	<?php do_action( 'storefront_before_footer' ); ?>



	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="gms-footer">

            <?php



                if (get_current_blog_id() == 1)/** {

                 echo do_shortcode('[contact-form-7 id="119" title="Footer Content"]');

                }



			/**

			 * Functions hooked in to storefront_footer action

			 *

			 * @hooked storefront_footer_widgets - 10

			 * @hooked storefront_credit         - 20

			 */

			do_action( 'storefront_footer' ); ?>



		</div><!-- .col-full -->

	</footer><!-- #colophon -->



	<?php do_action( 'storefront_after_footer' ); ?>



</div><!-- #page -->



<?php wp_footer(); ?>



<?php

    include $_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/include_footer_scripts.php';

?>



<script type="text/javascript">

    jQuery(".lazy").slick({

        dots: true,

        lazyLoad: 'ondemand', // ondemand progressive anticipated

        infinite: true,

        autoplay: true,

        autoplaySpeed: 5000,

    });

    jQuery(document).ready(function() {

        jQuery('.fade-slider').slick({

            infinite: true,

            speed: 500,

            fade: true,

            cssEase: 'linear',

            autoplay: true,

            autoplaySpeed: 5000,

        });

    });

</script>

<script>

    AOS.init({

        easing: 'ease-in-out-sine'

    });

</script>

<script>

    jQuery(document).on('ready', function() {



        function checkWidth() {



            var maxHeight = 0;



            jQuery(".product-card").each(function(){

                if (jQuery(this).height() > maxHeight) { maxHeight = jQuery(this).height(); }

            });



            jQuery(".product-card").height(maxHeight);

        };



        checkWidth();

        jQuery(window).resize(checkWidth);

    });

</script>

<script type="text/javascript">
(function() {
    window.PinIt = window.PinIt || { loaded:false };
    if (window.PinIt.loaded) return;
    window.PinIt.loaded = true;
    function async_load(){
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://assets.pinterest.com/js/pinit.js";
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    }
    if (window.attachEvent)
        window.attachEvent("onload", async_load);
    else
        window.addEventListener("load", async_load, false);
})();
</script>





</body>

</html>

