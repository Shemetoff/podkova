<?php
/**
 * Template Name: News
 *
 */
get_header();
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
$args = array(
    'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
    'paged'          => $current_page // текущая страница
);
query_posts( $args );

$wp_query->is_archive = true;
$wp_query->is_home = false;
?>
    <section class="ls s-py-80 s-py-md-120 s-py-xl-160 ">
        <div class="container">
            <div class="row c-mb-30 mb--30">
                <main class="col-lg-12">
                    <div class="row isotope-wrapper masonry-layout">


                        <?php
                        while(have_posts()) : the_post();
                            ?>

                            <?php
                            get_template_part('partials/post-item')
                            ?>


                        <?php
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </main>
            </div>
        </div>
    </section>
<?php
//if( function_exists('wp_pagenavi') ) wp_pagenavi(); // функция постраничной навигации
?>

<?php
get_footer();
