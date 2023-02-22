<?php

/**
 * Fish Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'fish-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'fish';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'fish align' . $block['align'];
}

?>
<section id="team" class="ls team-section s-pt-65 s-pb-80 s-pb-md-120 s-pt-md-105 s-pb-xl-160 s-pt-xl-145 c-mb-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?php
                if(get_field('subtitle')) {
                    echo '<p class="top-subtitle">'.get_field('subtitle').'</p>';
                }
                if(get_field('title')): ?>
                    <h3 class="section-heading  d-inline-block">
                        <?php the_field('title'); ?>
                        <?php if(get_field('bg_text')){
                            echo '<span class="back">'.get_field('bg_text').'</span>';
                        } ?>

                    </h3>
                <?php endif;  ?>

                <div class="mt--15"></div>
            </div>

            <?php if(have_rows('gallery')): ?>
                <?php while(have_rows('gallery')): the_row();
                    $image = get_sub_field('img');
                    $image_full = $image['url'];

                    ?>

                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="vertical-item content-padding text-center">
                            <div class="item-media">
                                <img src="<?php echo $image_full ?>" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="#"></a>
                                </div>
                            </div>
                            <div class="item-content hero-bg">
                                <h5>
                                    <a href="#"><?php echo get_sub_field('title') ?></a>
                                </h5>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>



        </div>
        <div class="mt--30"></div>
    </div>
</section>
