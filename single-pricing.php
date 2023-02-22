<?php
get_header();
?>
    <section class="ls routs rout-single s-py-80 s-py-md-120 s-py-xl-160">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row c-gutter-60">

                        <div class="col-md-12 mb-45 col-lg-5">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span><?php the_field('price') ?></span>
                                </div>
                                <div class="item-media">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <?php the_title(); ?>
                                    </h4>
                                    <span class="small-text subtitle">
												<?php the_field('title'); ?>
									</span>
                                    <?php the_field('decription'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-7 text-content">
                            <div class="mt--25"></div>

                            <?php the_content(); ?>



                            <form class="c-mb-20 c-gutter-20 mt-50" method="post" action="/">

                                <h4 class="text-normal">Закажите путевку</h4>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="name">Имя<span class="required">*</span></label>
                                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Имя">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="email">Email</label>
                                            <input type="email"  size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="phone">Телефон<span class="required">*</span></label>
                                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Телефон">
                                        </div>
                                    </div>



                                </div>

                                <div class="row">

                                    <div class="col-sm-12 mb-0">

                                        <div class="form-group has-placeholder">
                                            <label for="message">Сообщение</label>
                                            <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Сообщение..."></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-30">

                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor mb-0">Заказать
                                            </button>

                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


<?php
get_footer();
