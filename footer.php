    <footer class="page_footer ds s-overlay s-parallax s-pt-80 s-pb-30 s-pb-md-65 s-pt-md-120 s-pt-lg-135 s-pb-xl-110 c-mb-20 c-gutter-60">
        <div class="container">
            <div class="row">
                <div class=" col-lg-4 text-center animate" data-animation="fadeInUp">
                    <div class="divider-25 d-none d-xl-block"></div>
                    <div class="widget mb-0">

                        <h3 class="widget-title">Newsletter</h3>

                        <p>
                            We promise not to spam!
                        </p>

                        <form class="signup" action="/">

                            <input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email text-center" placeholder="Email Address">

                            <button type="submit" class="btn btn-outline-maincolor mt-30">
                                Subscribe
                            </button>
                            <div class="response"></div>
                        </form>

                    </div>
                    <div class="divider-50"></div>
                </div>

                <div class=" col-lg-4 text-center animate" data-animation="fadeInUp">
                    <div class="widget widget_icons_list">
                        <a href="./" class="logo flex-column text-center pb-0">
                            <img src="/wp-content/themes/podkova/assets/dist/img/images/logo.png" alt="logo">
                        </a>
                        <p>Загородный клуб рыболовов "Подкова"</p>
                        <ul class="mb-10">
                            <li class="icon-inline">
                                <div class="icon-styled icon-top color-main fs-14">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <p>г.Химки<br>
                                    ‌Мкр.Клязьма-Старбеево влд.1<br>
                                    ‌В навигаторе: Подкова-Химки<br>
                                    ‌Наши координаты: 55°57′8″N, 37°22′54″E</p>
                            </li>
                            <li class="icon-inline">
                                <div class="icon-styled icon-top color-main fs-14">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <p>+7(926)111-87-15</p>
                            </li>
                            <li class="icon-inline">
                                <div class="icon-styled icon-top color-main fs-14">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <p>
                                    <a href="mailto:Podkova2o21@yandex.ru">Podkova2o21@yandex.ru</a>
                                </p>
                            </li>
                        </ul>


                    </div>
                </div>

                <div class="col-lg-4 animate" data-animation="fadeInUp">
                    <div class="divider-25 d-none d-xl-block"></div>
                    <div class="widget ">
                        <h3 class="widget-title">Мы в соцсетях</h3>
                        <span class="social-icons ">
                                    <a href="#" class="fa fa-paper-plane bg-light border-icon rounded-icon" title="telegram"></a>
                                    <a href="#" class="fa fa-vk bg-light border-icon rounded-icon" title="vk"></a>
                                    <a href="#" class="fa fa-youtube-play bg-light border-icon rounded-icon" title="youtube"></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="page_copyright ls s-py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="divider-20 d-none d-lg-block"></div>
                <div class="divider-10 d-none d-md-block"></div>
                <div class="col-md-12 text-center">
                    <p>&copy; Copyright <span class="copyright_year">2023</span> Все права защищены</p>
                </div>
                <div class="divider-20 d-none d-lg-block"></div>
                <div class="divider-10 d-none d-md-block"></div>
            </div>
        </div>
    </section>


    </div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Закажите обратный звонок</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="contact-form c-mb-20 c-gutter-20" method="post" action="/">

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="name">Ваше имя <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Ваше имя">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="phone">Телефон<span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Телефон">
                                </div>
                            </div>

                        </div>

                        <div class="row mt-30">

                            <div class="col-sm-12 text-left">

                                <div class="form-group">
                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Перезвоните мне
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php wp_footer(); ?>


    </body>

</html>
