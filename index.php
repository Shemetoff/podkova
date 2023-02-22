<?php
get_header();
?>
<?php if(!is_archive()): ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

	        <?php
	        while(have_posts()) : the_post();
		        ?>




			        <?php
			        the_content();
			        ?>


		        <?php
	        endwhile; // End of the loop.
	        ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php else: ?>
        <section class="ls s-py-80 s-py-md-120 s-py-xl-160 ">
            <div class="container">
                <div class="row c-mb-30 mb--30">
                    <main class="col-lg-12">
                        <div class="row isotope-wrapper masonry-layout">


                            <?php
                            while(have_posts()) : the_post();
                                ?>

                                <?php
                                get_template_part('partials','post-item.php')
                                ?>


                            <?php
                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </main>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php
get_footer();
