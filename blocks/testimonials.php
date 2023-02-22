<?php

/**
 * Testimonials Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonials-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonials';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'testimonials align' . $block['align'];
}

?>
<section id="quote" class="ds s-pt-80 s-pb-130 s-pt-md-115 s-pb-md-195 s-pt-xl-125 s-pb-xl-160 s-parallax s-overlay  testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel" data-loop="false" data-margin="30" data-nav="false" data-dots="true" data-center="false" data-items="1" data-autoplay="true" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">

                    <?php if(have_rows('testimonials')): ?>
                        <?php while(have_rows('testimonials')):the_row(); ?>
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <blockquote class="quote-item text-center">
                                        <h5><?php the_sub_field('name'); ?></h5>


                                        <span class="quote-icon"><img src="wp-content/themes/podkova/assets/dist/img/images/quote.png" alt="img"></span>

                                        <p>
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                        <div class="divider-30 hidden-above-md"></div>
                                        <div class="divider-30 hidden-below-md"></div>

                                    </blockquote>
                                </div>
                                <?php $image = get_sub_field('image'); ?>
                                <?php if ($image): ?>
                                <div class="col-lg-6 d-none d-xl-block">
                                    <img class="pl-lg-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
