<?php
/**
 * Template Name: Faq
 *
 */
?>
<?php get_header(); ?>

<section class="ls s-py-80 s-py-md-120 s-pt-xl-115 s-pb-xl-110">
    <div class="container">
        <div class="row ">

            <div class="col-xs-12 col-md-6">
                <h4 class="mb-35 ">Вопросы и ответы</h4>
                <?php if(have_rows('faq')): $i=1;?>
                        <div id="accordion<?= $i; ?>" role="tablist">
                            <?php while (have_rows('faq')): the_row(); ?>
                                <div class="card">
                                    <div class="card-header" role="tab" id="collapse<?= $i; ?>_header">
                                        <h5>
                                            <a data-toggle="collapse" href="#collapse<?= $i; ?>" aria-expanded="<?php if($i==1){echo 'true';} else{ echo 'false'; } ?>" aria-controls="collapse<?= $i; ?>">
                                                <i class="fa fa-pencil"></i>
                                                <?php the_sub_field('title'); ?>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapse<?= $i; ?>" class="collapse <?php if($i==1){echo 'show';} ?>" role="tabpanel" aria-labelledby="collapse<?= $i; ?>_header" data-parent="#accordion<?= $i; ?>">
                                        <div class="card-body">
                                            <?php the_sub_field('text'); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <?php endwhile; ?>

                        </div>
                <?php endif; ?>


            </div>
            <div class="divider-30 hidden-above-md"></div>
            <div class="col-xs-12 col-md-6">
                <h4 class="mb-35"> Задайте свой вопрос </h4>
                <form class="" method="post" action="./">
                    <div class="form-group">
                        <input title="name" name="name" type="text" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input title="email" name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input title="phone" name="phone" type="tel" class="form-control" placeholder="Телефон">
                    </div>
                    <div class="form-group">
                        <textarea title="message" name="message" cols="30" class="form-control" rows="5" placeholder="Ваш вопрос"></textarea>
                    </div>
                    <div class="form-group mt-30">
                        <button type="submit" class="btn btn-maincolor">Задать вопрос</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
