<?php

/**
 * Preferences Parallax Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'preferences-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'preferences';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'preferences align' . $block['align'];
}

?>
<section class="users-section ds s-overlay s-parallax c-mb-30 s-py-80 s-py-md-120 s-py-xl-160" style="background-image: url(<?php echo get_field('bg_image') ?>)">
	<div class="container-fluid">
		<div class="row">

            <?php while(have_rows('items')): the_row(); ?>

            <div class="col-lg-3 col-md-6 col-12">
				<div class="icon-box text-center">
					<div class="icon-styled">
						<img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php the_sub_field('title'); ?>">
					</div>
					<h5 class="text-normal"><?php the_sub_field('title'); ?></h5>
					<p>
                        <?php the_sub_field('text'); ?>
					</p>
				</div>
			</div>
            <?php endwhile; ?>

		</div>
	</div>
	<div class="mt--40"></div>
</section>
