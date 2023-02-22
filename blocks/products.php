<?php

/**
 * Prices Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'products-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'products';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'products align' . $block['align'];
}

?>

<?php if(have_rows('services','options')): ?>
<section class="ls <?php /*s-pb-80  s-pt-65 s-pb-md-120 s-pt-md-95 s-py-xl-160*/ ?> container-px-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <!--<div class="row justify-content-center">
                    <div class="col-12">
                        <div class="filters gallery-filters small-text text-lg-right">
                            <a href="#" data-filter="*" class="active selected">All</a>
                            <a href="#" data-filter=".hikes">Day Hikes</a>
                            <a href="#" data-filter=".backpacking">Backpacking</a>
                            <a href="#" data-filter=".adventure_trips">Adventure Trips</a>
                        </div>
                    </div>
                </div>-->

                <div class="row gallery-excerpt isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">
                    <?php while(have_rows('services','options')): the_row(); ?>
                        <div class="col-xl-3 col-md-4 col-sm-6 product__item hikes">

                            <div class="vertical-item text-center content-padding hero-bg">
                                <div class="item-media">
                                    <div class="price"><span><?php the_sub_field('price'); ?></span></div>
                                    <?php $img = get_sub_field('image'); ?>
                                    <img src="<?php echo $img['sizes']['250x250']; ?>" alt="<?php the_sub_field('title'); ?>">

                                </div>
                                <div class="item-content">
                                    <h5 class="mt-2 text-uppercase">
                                        <span><?php the_sub_field('title'); ?></span>
                                    </h5>
                                    <?php if(get_sub_field('text')){
                                        echo '<p>'.get_sub_field('text').'</p>';
                                    } ?>

                                </div>
                            </div>

                        </div>
                    <?php endwhile; ?>



                </div>
                <!-- .isotope-wrapper-->



            </div>

        </div>

    </div>
</section>
<?php endif; ?>
