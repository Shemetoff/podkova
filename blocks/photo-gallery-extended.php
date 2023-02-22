<?php

/**
 * Photo Gallery Extended Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'photo-gallery-ext' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'photo-gallery-ext';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'photo-gallery-ext align' . $block['align'];
}

?>

<section class="ls s-pb-80  s-pt-65 s-pb-md-120 s-pt-md-95 s-py-xl-160">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="filters gallery-filters small-text text-lg-right">
                            <a href="#" data-filter="*" class="active selected">Все</a>
                            <a href="#" data-filter=".fishing">Рыбалка</a>
                            <a href="#" data-filter=".locations">Беседки и веранда</a>
                            <a href="#" data-filter=".fish">Рыба</a>
                        </div>
                    </div>
                </div>


                <div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">

                    <?php if(have_rows('gallery')): ?>
                        <?php while(have_rows('gallery')): the_row();
                            $image = get_sub_field('img');
                            $categories = get_sub_field('categories');
                            $image_min = $image['sizes']['450x450'];
                            $image_full = $image['url'];
                            $image_name = $image['title'];
                            //var_dump($categories);
                            ?>

                            <div class="col-xl-4 col-md-6 backpacking <?php foreach ($categories as $category) {echo $category.' '; } ?>">

                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="<?php echo $image_min; ?>" alt="<?php echo $image['alt'] ?>">
                                        <div class="media-links">

                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                       <!-- <h5>
                                            <a href="gallery-single.html">Lorem ipsum dolor sit</a>
                                        </h5>-->
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="<?php echo $image_full ?>"></a>
                                            <!--<a class="link-anchor" title="" href="gallery-single.html"></a>-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>





                </div>
                <!-- .isotope-wrapper-->



            </div>

        </div>

    </div>
</section>
