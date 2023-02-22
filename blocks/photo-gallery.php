<?php

/**
 * Photo Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'homeslider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'photo-gallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'photo-gallery align' . $block['align'];
}

?>
<section id="gallery" class="ls ms gallery-section  c-gutter-0 c-mb-0">
    <div class="container-fluid">
        <div class="row isotope-wrapper" data-filters=".gallery-filters">

            <div class="col-xl-6 grid-item backpacking fishing locations fish d-none d-xl-flex">

                <div class="vertical-item stamp-wrap gallery-title ">
                    <div class="item-media">
                        <img src="wp-content/themes/podkova/assets/dist/img/images/gallery/01.png" alt="img">
                    </div>
                    <div class="gallery-header stamp">
                        <div class="text-left content">
                            <?php
                            if(get_field('subtitle')) {
                                echo '<p class="top-subtitle">'.get_field('subtitle').'</p>';
                            }
                            if(get_field('title')): ?>
                                <h3 class="section-heading">
                                    <?php the_field('title'); ?>
                                    <?php if(get_field('bg_text')){
                                        echo '<span class="back">'.get_field('bg_text').'</span>';
                                    } ?>

                                </h3>
                            <?php endif;
                            ?>

                            <div class="filters gallery-filters small-text text-lg-right">
                                <a href="#" data-filter="*" class="active selected">Все</a>
                                <a href="#" data-filter=".fishing">Рыбалка</a>
                                <a href="#" data-filter=".locations">Беседки и веранда</a>
                                <a href="#" data-filter=".fish">Рыба</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php if(have_rows('gallery')): ?>
                <?php while(have_rows('gallery')): the_row();
                    $image = get_sub_field('img');
                    $categories = get_sub_field('categories');
                    $image_min = $image['sizes']['450x450'];
                    $image_full = $image['url'];
                    $image_name = $image['title'];
                    //var_dump($categories);
                ?>

                    <div class="col-xl-3 col-md-6 grid-item backpacking <?php foreach ($categories as $category) {echo $category.' '; } ?>">

                        <div class="vertical-item gallery-title text-center ">
                            <div class="item-media gradientdarken-background">
                                <img src="<?php echo $image_min; ?>" alt="<?php echo $image['alt'] ?>">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">

                                <div class="links-wrap">
                                    <a class="link-zoom photoswipe-link" title="" href="<?php echo $image_full ?>"></a>

                                </div>
                            </div>
                        </div>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>



            <div class="col-xl-3 col-md-6 grid-item backpacking hikes adventure_trips hidden-below-md">

                <div class="vertical-item stamp-wrap last gallery-title ">
                    <div class="item-media">
                        <img src="wp-content/themes/podkova/assets/dist/img/images/gallery/00.png" alt="img">
                    </div>
                    <div class="gallery-header stamp view-more">
                        <div class="text-left">
                            <a class="text-uppercase" href="#">Больше фото</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-30 hidden-above-md"></div>
        <div class="row">
            <div class="col-12 text-center d-md-none">
                <a class="btn btn-maincolor mb-0" href="#">Больше фото</a>
            </div>
        </div>
        <div class="mb-80 hidden-above-md"></div>
    </div>
</section>
