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
$id = 'prices-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'prices';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'prices align' . $block['align'];
}

?>
<section id="trips" class="ls section-trips routs-main routs s-py-80 s-py-md-120 s-py-xl-160 c-gutter-0 container-px-5">
    <div class="mt--15"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <?php
                if(get_field('subtitle')) {
                    echo '<p class="top-subtitle">'.get_field('subtitle').'</p>';
                }
                if(get_field('title')): ?>
                    <h3 class="section-heading d-inline-block">
                        <?php the_field('title'); ?>
                        <?php if(get_field('bg_text')){
                            echo '<span class="back">'.get_field('bg_text').'</span>';
                        } ?>

                    </h3>
                <?php endif;
                $prices = get_field('prices');
                /*echo '<pre>';
                var_dump($prices);
                echo '</pre>';*/
                ?>

            </div>
            <div class="divider-10 hidden-xs hidden-sm"></div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="filters gallery-filters small-text text-lg-right">
                            <a href="#" data-filter="*" class="active selected">Все</a>
                            <a href="#" data-filter=".private">ПУТЕВКИ</a>
                            <a href="#" data-filter=".group">АРЕНДА</a>
                            <a href="#" data-filter=".driving">РЫБА</a>
                        </div>
                    </div>

                </div>
                <?php if($prices): ?>
                    <div class="col-12 c-gutter-0">
                        <div class="owl-carousel" data-loop="false" data-margin="0" data-nav="true" data-dots="false" data-center="false" data-items="3" data-autoplay="true" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="3" data-responsive-lg="4" data-filters=".gallery-filters">

                            <?php foreach( $prices as $price ):

                                $id = $price->ID;
                                $image =  get_the_post_thumbnail_url( $id, '450x600' );
                            ?>

                                    <div class="vertical-item gallery-title text-center  private driving">
                                        <div class="price">
                                            <span><?php the_field('price',$id); ?></span>
                                        </div>
                                        <div class="item-media gradientdarken-background">
                                            <img src="<?php echo $image; ?>" alt="img">
                                            <div class="media-links">
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <h4 class="mt-4">
                                                <a href="<?php the_permalink($id); ?>"><?php echo get_the_title($id); ?></a>
                                            </h4>
                                            <?php if(get_field('info',$id)): ?>
                                                <span class="small-text subtitle">
                                                   <?php the_field('info',$id); ?>
                                                </span>
                                            <?php endif; ?>
                                            <?php if(get_field('decription',$id)): ?>
                                                <div class="data-wrap">
                                                    <?php the_field('decription',$id); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                            <?php endforeach; ?>


                        </div>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="mt--15"></div>
</section>
