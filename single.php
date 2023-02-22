<?php
get_header();
?>



            <?php
            while(have_posts()) : the_post();
                ?>

                <section class="ls s-py-80 s-py-md-120 s-py-xl-160  c-gutter-60">
                    <div class="container">
                        <div class="row">

                            <main class="col-lg-8 col-xl-8">
                                <article class="vertical-item hero-bg post type-post status-publish format-standard has-post-thumbnail">

                                    <!-- .post-thumbnail -->
                                    <div class="item-media overflow-visible">
                                        <!--<div class="owl-carousel" data-margin="0" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1" data-dots="true">
                                            <a href="images/gallery/01_big.jpg" class="photoswipe-link gradientdarken-background" data-width="1170" data-height="780">
                                                <img src="images/gallery/01_big.jpg" alt="img">
                                            </a>
                                            <a href="images/gallery/02_big.jpg" class="photoswipe-link gradientdarken-background" data-width="1170" data-height="780" data-iframe="https://www.youtube.com/embed/mcixldqDIEQ">
                                                <img src="images/gallery/02_big.jpg" alt="img">
                                            </a>
                                            <a href="images/gallery/03_big.jpg" class="photoswipe-link gradientdarken-background" data-width="1170" data-height="780" data-iframe="//player.vimeo.com/video/1084537">
                                                <img src="images/gallery/03_big.jpg" alt="img">
                                            </a>
                                        </div>-->
                                        <?php the_post_thumbnail(); ?>
                                        <div class="post-adds">
                                            <div class="post-img">
                                                <?php echo get_avatar( get_the_author_meta('user_email'), 72 ); ?>
                                            </div>
                                            <div class="view-count-wrap">
                                                <div class="view-count-wrap-child">
												<span class="views-count">
													<i class="fa fa-user" aria-hidden="true"></i>
													<span class="item-views-count"><?php the_author(); ?></span>
												</span>
                                                    <span class="views-count">
													<i class="fa fa-calendar" aria-hidden="true"></i>
													<span class="item-views-count"><?php the_time('j F Y'); ?></span>
												</span>
                                                    <?php $tags = wp_get_post_tags($post->ID);?>
                                                    <?php if($tags):?>

                                                            <span class="views-count">
                                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                                                <span class="item-views-count">
                                                                    <?php foreach ( $tags as $tag ):?>
                                                                        <?php echo $tag->name.' '; ?>
                                                                    <?php endforeach; ?>
                                                                </span>
                                                            </span>

                                                    <?php endif; ?>
                                                </div>
                                                <!--<div class="view-count-wrap-child">
												<span class="views-count">
													<i class="fa fa-eye" aria-hidden="true"></i>
													<span class="item-views-count">325</span>
												</span>
                                                <span class="views-count">
													    <i class="fa fa-comments" aria-hidden="true"></i>
													<span class="item-likes-count">125</span>
												</span>
                                                <span class="views-count">
													<i class="fa fa-heart" aria-hidden="true"></i>
													<span class="item-likes-count">300</span>
												</span>
                                                </div>-->
                                            </div>
                                            <div class="dropdown inline-block">
                                                <!--<a href="#" data-target="#" class="share_button" id="share_button_@@id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                                </a>-->
                                                <div class="dropdown-menu" aria-labelledby="share_button_@@id">
                                                    <div class="share_buttons">
                                                        <a href="https://www.facebook.com/sharer.php?u=http://example.com" class="color-bg-icon fa fa-facebook" target="_blank"></a>
                                                        <a href="https://twitter.com/intent/tweet?url=http://example.com" class="color-bg-icon fa fa-twitter" target="_blank"></a>
                                                        <a href="https://plus.google.com/share?url=http://example.com" class="color-bg-icon fa fa-google" target="_blank"></a>
                                                        <a href="https://pinterest.com/pin/create/bookmarklet/?url=http://example.com" class="color-bg-icon fa fa-pinterest" target="_blank"></a>
                                                        <a href="https://www.linkedin.com/shareArticle?url=http://example.com" class="color-bg-icon fa fa-linkedin" target="_blank"></a>
                                                        <a href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=http://example.com" class="color-bg-icon fa fa-tumblr" target="_blank"></a>
                                                        <a href="https://reddit.com/submit?url=http://example.com" class="color-bg-icon fa fa-reddit" target="_blank"></a>
                                                    </div><!-- eof .share_buttons -->
                                                </div><!-- eof .dropdown-menu -->
                                            </div><!-- eof .dropdown -->
                                        </div>
                                    </div>


                                    <div class="item-content">
                                        <!-- .entry-header -->

                                        <div class="entry-content text-content">
                                            <?php the_content(); ?>

                                            <!--<div class="row isotope-wrapper masonry-layout c-mb-10 c-gutter-10 mt-30 mb-20">
                                                <div class="col-md-4"><img src="images/gallery-grid/19.jpg" alt="img"></div>
                                                <div class="col-md-4"><img src="images/gallery-grid/20.jpg" alt="img"></div>
                                                <div class="col-md-4"><img src="images/gallery-grid/21.jpg" alt="img"></div>
                                                <div class="col-md-4"><img src="images/gallery-grid/23.jpg" alt="img"></div>
                                                <div class="col-md-4"><img src="images/gallery-grid/22.jpg" alt="img"></div>
                                            </div>-->


                                            <div class="mt--10"></div>
                                        </div>
                                        <!-- .entry-content -->
                                    </div>
                                    <!-- .item-content -->
                                </article>

                                <div class="mt--20"></div>

                                <nav class="navigation post-nav" role="navigation">
                                    <h2 class="screen-reader-text">Post navigation</h2>
                                    <div class="nav-links">
                                        <?php
                                        $prev_post = get_previous_post();
                                        if( ! empty( $prev_post ) ){
                                            ?>
                                            <div class="nav-next cover-image s-overlay ds">
                                                <div class="post-nav-image">
                                                    <?php echo get_the_post_thumbnail( $prev_post, 'thumbnail'); ?>
                                                </div>

                                                <div class="post-nav-text-wrap">
                                                    <span class="screen-reader-text">Назад</span>
                                                    <span aria-hidden="true" class="nav-subtitle color-main3">Предыдущая запись</span>

                                                    <h5 class="nav-title">
                                                        <?php echo esc_html( $prev_post->post_title ); ?>
                                                    </h5>
                                                </div>
                                                <a href="<?php echo get_permalink( $prev_post ); ?>" rel="next"></a>
                                            </div>
                                            <a href="<?php echo get_permalink( $prev_post ); ?>"><?php echo esc_html( $next_post->post_title ); ?></a>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        $next_post = get_next_post();
                                            if( ! empty( $next_post ) ){
                                                ?>
                                                <div class="nav-next cover-image s-overlay ds">
                                                    <div class="post-nav-image">
                                                        <?php echo get_the_post_thumbnail( $next_post, 'thumbnail'); ?>
                                                    </div>

                                                    <div class="post-nav-text-wrap">
                                                        <span class="screen-reader-text">Вперед</span>
                                                        <span aria-hidden="true" class="nav-subtitle color-main3">Следующая запись</span>

                                                        <h5 class="nav-title">
                                                            <?php echo esc_html( $next_post->post_title ); ?>
                                                        </h5>
                                                    </div>
                                                    <a href="<?php echo get_permalink( $next_post ); ?>" rel="next"></a>
                                                </div>
                                                <a href="<?php echo get_permalink( $next_post ); ?>"><?php echo esc_html( $next_post->post_title ); ?></a>
                                                <?php
                                            }
                                        ?>

                                    </div>
                                </nav>

                                <!--<div class="item-media post overflow-visible mt-60">
                                    <div class="owl-carousel" data-autoplay="true" data-margin="20" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-dots="false">
                                        <div class="vertical-item item-gallery content-absolute ds">
                                            <div class="item-media">
                                                <img src="images/events/15.jpg" alt="img">
                                                <div class="media-links"></div>
                                            </div>
                                            <div class="item-content">
                                                <h5>
                                                    <a href="event-single-full.html">Traveling To Barcelona With Your Friends</a>
                                                </h5>
                                                <div class="item-meta">
                                                    <i class="fa fa-calendar"></i>
                                                    20 mar, 18
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-item item-gallery content-absolute ds">
                                            <div class="item-media">
                                                <img src="images/events/01.jpg" alt="img">
                                                <div class="media-links"></div>
                                            </div>
                                            <div class="item-content">
                                                <h5>
                                                    <a href="event-single-full.html">Choosing A Static Caravan</a>
                                                </h5>
                                                <div class="item-meta">
                                                    <i class="fa fa-calendar"></i>
                                                    22 mar, 18
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-item item-gallery content-absolute ds">
                                            <div class="item-media">
                                                <img src="images/events/16.jpg" alt="img">
                                                <div class="media-links"></div>
                                            </div>
                                            <div class="item-content">
                                                <h5>
                                                    <a href="event-single-full.html">Do A Sporting Stag Do In Birmingham</a>
                                                </h5>
                                                <div class="item-meta">
                                                    <i class="fa fa-calendar"></i>
                                                    25 mar, 18
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-item item-gallery content-absolute ds">
                                            <div class="item-media">
                                                <img src="images/events/15.jpg" alt="img">
                                                <div class="media-links"></div>
                                            </div>
                                            <div class="item-content">
                                                <h5>
                                                    <a href="event-single-full.html">Traveling To Barcelona With Your Friends</a>
                                                </h5>
                                                <div class="item-meta">
                                                    <i class="fa fa-calendar"></i>
                                                    20 mar, 18
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                            </main>

                            <aside class="col-lg-4 col-xl-4 mb-0">
                                <?php
                                    $args = array(
                                    'posts_per_page' => 3,
                                    'post__not_in' => [$post->ID],
                                    'orderby' => 'date',
                                    'order' => 'DESC '
                                    );

                                    $query = new WP_Query( $args );
                                     if ( $query->have_posts() ):
                                         $i=1;
                                ?>

                                            <div class="widget widget_slider">

                                                <h3 class="widget-title">Последние новости</h3>
                                                <div class="owl-carousel top-right-nav" data-nav="false" data-dots="true" data-loop="true" data-autoplay="false" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
                                                    <?php while ( $query->have_posts() ):
                                                    $query->the_post();
                                                    $id = get_the_ID(); ?>
                                                        <div class="vertical-item">
                                                            <div class="item-media ds s-overlay">
                                                                <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt="<?php the_title(); ?>" >
                                                            </div>
                                                            <div class="item-content">
                                                                <header class="entry-header">
                                                                    <h4 class="widgets-title m-0">
                                                                        <a href="<?php the_permalink(); ?>>" rel="bookmark">
                                                                            <?php the_title(); ?>
                                                                        </a>
                                                                    </h4>
                                                                    <div class="entry-meta">
                                                                        <div class="entry-date">
                                                                            <a href="blog-right.html" rel="bookmark">
                                                                                <i class="fa fa-calendar color-main"></i>
                                                                                <time class="published updated" datetime="<?php the_modified_time('c'); ?>">
                                                                                    <?php the_time('j F Y'); ?>
                                                                                </time>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                            </div>
                                                        </div>
                                                        <!-- .vertical-item -->
                                                    <?php endwhile; ?>



                                                </div>
                                                <!-- .owl-carousel -->

                                            </div>
                                            <!-- .widget_slider -->
                                         <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                            </aside>

                        </div>

                    </div>
                </section>


            <?php
            endwhile; // End of the loop.
            ?>



<?php
get_footer();
