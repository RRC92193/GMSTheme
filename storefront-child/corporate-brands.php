<?php
/**
 *
 * From full-width storefront template
 *
 * Template Name: Corporate Brands
 *
 */


get_header(); ?>

	<div id="primary" class="content-area consumer-home">
		<main id="main" class="site-main" role="main">
            <section id="brandHero" data-sizes="80vw">
                <div class="row">
                    <div class="eight columns">
                        <div class="videoWrapper">
                            <?php
                                $iframe = get_field('featured_video');

                                if ($iframe) {
                                    preg_match('/src="(.+?)"/', $iframe, $matches);
                                    $src = $matches[1];


                                    // add extra params to iframe src
                                    $params = array(
                                        'rel' => 0
                                    );

                                    $new_src = add_query_arg($params, $src);

                                    $iframe = str_replace($src, $new_src, $iframe);
                                    echo $iframe;
                                }
                            ?>
                        </div>
                    </div>
                    <div class="four columns brandDescription">
                        <img src="<?= get_field('brand_logo')['url'];?>" id="brandLogo">
                        <p><?= get_field('brand_description');?></p>
                    </div>
                </div>

            </section>

            <?php
                $productBoxes = get_field('product_boxes');
                $first_row = $productBoxes['first_row'];
                $second_row = $productBoxes['second_row'];
            ?>

            <div class="container" id="brandImages">
                <div class="row">
                    <div class="four columns">
                        <div class="brand-image">
                            <img src="<?= $first_row['first_box']['product_image']['url'];?>" class="brandImg"
                                 product-image="<?= $first_row['first_box']['product_image']['url'];?>"
                                 hover-image="<?= $first_row['first_box']['hover_image']['url'];?>">
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="brand-image">
                            <img src="<?= $first_row['second_box']['product_image']['url'];?>" class="brandImg"
                                 product-image="<?= $first_row['second_box']['product_image']['url'];?>"
                                 hover-image="<?= $first_row['second_box']['hover_image']['url'];?>">
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="brand-image">
                            <img src="<?= $first_row['third_box']['product_image']['url'];?>" class="brandImg"
                                 product-image="<?= $first_row['third_box']['product_image']['url'];?>"
                                 hover-image="<?= $first_row['third_box']['hover_image']['url'];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="four columns">
                        <div class="brand-image">
                            <img src="<?= $second_row['first_box']['product_image']['url'];?>" class="brandImg"
                                 product-image="<?= $second_row['first_box']['product_image']['url'];?>"
                                 hover-image="<?= $second_row['first_box']['hover_image']['url'];?>">
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="brand-image">
                            <img src="<?= $second_row['second_box']['product_image']['url'];?>" class="brandImg"
                                 product-image="<?= $second_row['second_box']['product_image']['url'];?>"
                                 hover-image="<?= $second_row['second_box']['hover_image']['url'];?>">
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="brand-image">
                            <img src="<?= $second_row['third_box']['product_image']['url'];?>" class="brandImg"
                                 product-image="<?= $second_row['third_box']['product_image']['url'];?>"
                                 hover-image="<?= $second_row['third_box']['hover_image']['url'];?>">
                        </div>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
