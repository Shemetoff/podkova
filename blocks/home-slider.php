<?php

/**
 * Home Slider Block Template.
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
$className = 'homeslider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'banner align' . $block['align'];
}

?>
<?php if(have_rows('home_slides')): $i=1;?>
    <section class="page_slider">
        <div class="flexslider vertical home_slider">
            <ul class="slides">
                <?php while(have_rows('home_slides')): the_row(); ?>
                    <li class="ds s-overlay cover-image text-center">
                                <span class="social-icons animate" data-animation="fadeInUp">
                                    <a href="#" class="fa fa-paper-plane bg-light border-icon rounded-icon" title="telegram"></a>
                                    <a href="#" class="fa fa-vk bg-light border-icon rounded-icon" title="vk"></a>
                                    <a href="#" class="fa fa-youtube-play bg-light border-icon rounded-icon" title="youtube"></a>
                                </span>
                        <!--<video muted loop id="myVideo">
                            <source src="wp-content/themes/podkova/assets/dist/img/images/Travel_Stock_Footage_Reel-HD_4K_Royalty-free.mp4" data-time="74" type="video/mp4">
                        </video>-->
                        <?php $image = get_sub_field('image');
                            if($image){
                                echo '<img src="'.$image['url'].'" alt="'.$image['alt'].'">';
                            }
                        ?>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="intro_layers_wrapper intro_text_bottom">
                                        <div class="intro_layers">
                                            <div class="intro-layer">
                                                <span class="small-text color-main3"><?= get_sub_field('subtitle'); ?></span>
                                            </div>
                                            <div class="intro-layer mt-10">
                                                <h2><?= get_sub_field('title'); ?></h2>
                                            </div>
                                            <div class="divider-35 hidden-below-sm"></div>
                                            <div class="intro-layer hidden-below-sm">
                                                <p><?= get_sub_field('text'); ?></p>
                                            </div>
                                            <div class="divider-xl-50"></div>
                                            <div class="divider-30 hidden-xl"></div>
                                            <?php $link = get_sub_field('link');
                                                if($link):?>
                                                    <div class="intro-layer animated fadeInRight" style="visibility: hidden;">
                                                        <a href="<?php echo $link['url'] ?>" class="btn btn-maincolor"><?php echo $link['title'] ?></a>
                                                    </div>
                                                <?php endif; ?>


                                            <!--<div class="intro-layer ">
                                                <button class="btn-play">
                                                    <i class="fa fa-play"></i>
                                                    <i class="fa fa-pause"></i>
                                                </button>
                                            </div>-->
                                        </div> <!-- eof .intro_layers -->
                                    </div> <!-- eof .intro_layers_wrapper -->
                                </div> <!-- eof .col-* -->
                            </div><!-- eof .row -->
                        </div><!-- eof .container-fluid -->
                    </li>
                    <?php $i++; ?>
                <?php endwhile; ?>

            </ul>
        </div> <!-- eof flexslider -->
    </section>
<?php endif; ?>

