<?php

/**
 * News Accordion Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'news-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'news';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'news' . $block['align'];
}
$args = array(
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC '
);

$query = new WP_Query( $args );


?>

<section id="news" class="ls section-news s-pb-80 s-pb-md-120 s-pb-xl-160">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="top-subtitle">Наш блог</p>
                <h3 class="section-heading d-inline-block">Последние новости<span class="back">БЛОГ</span></h3>
                <div class="mt-15"></div>
            </div>
            <?php

            if ( $query->have_posts() ):
                $i=1;
                while ( $query->have_posts() ):
                    $query->the_post();
                    $id = get_the_ID();

                    if($i==1): ?>
                        <div class="col-lg-6">
                            <div class="post cover-image ds s-overlay">
                                <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt="img">
                                <div class="item-content">
                                    <h5>
                                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                    </h5>
                                    <p class="item-meta flex-wrap d-flex ">
                                        <span><i class="fa fa-calendar color-main3"></i><?php the_time('j F Y'); ?> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php else:
                        if ($i==2) {
                            echo '<div class="col-lg-6">
                                    <div class="divider-30 hidden-above-lg"></div>
                    
                                    <div id="accordion01" role="tablist">';
                        } ?>
                        <div class="card">
                            <div class="card-header post side-item" role="tab" id="collapse01_header">
                                <div class="item-wrap">
                                    <div class="item-media">
                                        <img src="<?php echo get_the_post_thumbnail_url( $id, '80x80' ); ?>" alt="img" width="80" height="80">
                                    </div>
                                </div>

                                <div class="item-content">
                                    <h5>
                                        <a class="collapsed" data-toggle="collapse" href="#collapse<?= $i; ?>" aria-expanded="false" aria-controls="collapse01"><?php the_title(); ?></a>
                                    </h5>

                                    <p class="item-meta flex-wrap d-flex ">
                                        <span><i class="fa fa-calendar color-main3"></i><?php the_time('j F Y'); ?> </span>
                                    </p>
                                </div>
                            </div>

                            <div id="collapse<?= $i; ?>" class="collapse <?php if($i==2){echo 'show';} ?>" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                                <div class="card-body">
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="more" >Читать полностью<i class="fa fa-level-down" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    <? endif;
                    ?>

                <?php
                $i++;
                endwhile;
                if($i > 1) {
                    echo' </div></div>';
                }
            endif;
            ?>

        </div>
    </div>
</section>
