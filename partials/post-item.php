<?php $tags = wp_get_post_tags($post->ID);?>
<div class="col-xl-4 col-md-6">
    <article class="vertical-item content-padding hero-bg text-center padding-small post type-post status-publish format-standard has-post-thumbnail">
        <div class="item-media post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt="<?php the_title(); ?>">
            </a>
        </div><!-- .post-thumbnail -->
        <div class="item-content">
            <header class="entry-header">
                <div class="entry-meta">
                    <div class="entry-date">
                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                            <time class="published updated" datetime="<?php the_modified_time('c'); ?>">
                                <i class="fa fa-calendar color-main3"></i><?php the_time('j F Y'); ?>
                            </time>
                        </a>
                    </div>
                    <?php if($tags):?>
                        <div class="entry-categories">
                            <?php foreach ( $tags as $tag ):?>
                            <i class="fa fa-tags color-main3"></i><?php echo $tag->name; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <h4 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php the_title(); ?>
                    </a>
                </h4>
            </header>
            <!-- .entry-header -->

        </div><!-- .item-content -->
    </article><!-- #post-## -->
</div>
