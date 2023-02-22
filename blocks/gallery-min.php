<?php

/**
 * Mansory Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'gallery-min-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'gallery-min';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'gallery-min align' . $block['align'];
}

?>
<?php
$images = get_field('gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
    <div class="row isotope-wrapper masonry-layout c-mb-10 c-gutter-10 mt-30 mb-20">
        <?php foreach( $images as $image_id ): ?>
            <div class="col-md-4"><a class="photoswipe-link" title="" href="<?php echo wp_get_attachment_image_url($image_id,'full') ?>"><?php echo wp_get_attachment_image( $image_id, $size ); ?></a> </div>

        <?php endforeach; ?>
    </div>
<?php endif; ?>

