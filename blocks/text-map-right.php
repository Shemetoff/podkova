<?php

/**
 * Text with map Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'text-map-right-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'text-map-right';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'text-map-right align' . $block['align'];
}
$image = get_field('image');
?>
<section id="about" class="ls s-pt-70 s-pb-65 s-pt-md-120 s-pb-md-105 s-pb-xl-85 s-pt-xl-65 about-section about-section-map ">
    <div class="divider-80 d-none d-xl-block"></div>
    <div class="image_cover" style="background-image: url('<?php echo $image['url']; ?>')"></div>
    <div class="container">
        <div class="row d-flex justify-content-start align-items-center">
            <div class="col-12 col-lg-7 col-xl-6 ">
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
                if(get_field('text')) {
                    the_field('text');
                }

                ?>
            </div>
            <div class="col-12 col-lg-5 col-xl-6">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afa82405454b6a461d77a6c602eb85030fc5e8ce92dc81a95a7b2479a00d3d0ed&amp;source=constructor" width="600" height="720" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>
