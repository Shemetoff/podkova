 <!DOCTYPE html>

        <html class="no-js" <?php language_attributes(); ?>>
        <!--<![endif]-->

        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <?php wp_head(); ?>

        </head>

        <body <?php body_class(); ?>>


        <div class="preloader">
            <div class="preloader_image pulse"></div>
        </div>

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="widget widget_search">
                <form method="get" class="searchform search-form" action="/">
                    <div class="form-group">
                        <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                    </div>
                    <button type="submit" class=""></button>
                </form>
            </div>
        </div>

        <!-- Unyson messages modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls p-normal">
                <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
                <!--
            <ul class="list-unstyled">
                <li>Message To User</li>
            </ul>
            -->

            </div>
        </div><!-- eof .modal -->

        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas">
            <div id="box_wrapper">

                <!-- template sections -->

                <div class="header_absolute ds <?php if(is_front_page()){echo 'home';} else { echo 'cover-background s-overlay s-parallax';} ?>">
                    <!--topline section visible only on small screens|-->
                    <section class="page_topline ds s-py-10 c-my-10">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4 col-xl-4">
                                    <div class="media align-items-center">
									<span class="icon-styled ">
										<i class="fa color-main2 fa-phone"></i>
									</span>
                                        <div class="media-body">
                                            <span class="small-text test">Бронирование вашего  отдыха</span>
                                            <a href="tel:<?php echo am_esc(get_field('phone','options'), 'phone'); ?>"><?php echo get_field('phone','options'); ?></a>
                                            <buton class="btn  btn-sm btn-maincolor " data-toggle="modal" data-target="#exampleModal">Обратный звонок</buton>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center hidden-below-md">
                                    <a href="./" class="logo">
                                        <img src="/wp-content/themes/podkova/assets/dist/img/images/logo.png" alt="img">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-xl-4">
                                    <div class="media align-items-center">
                                        <div class="media-body align-items-end">
                                            <span class="small-text">наш адрес</span>
                                            <p style="font-size: 16px; text-align: right;">г.Химки <br>‌Мкр.Клязьма-Старбеево влд.1</p>
                                        </div>
                                        <span class="icon-styled ">
										<i class="fa color-main2 fa-map-marker"></i>
									</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--eof topline-->
                    <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
                    <header class="page_header ls justify-nav-center">
                        <div class="container-fluid">
                            <div class="row align-items-lg-end align-items-center">
                                <div class="col-10 col-md-4 hidden-above-md d-flex">
                                    <a href="/" class="logo">
                                        <img src="/wp-content/themes/podkova/assets/dist/img/images/logo.png" alt="img">
                                    </a>

                                    <div class="media-wrap">
                                        <div class="media align-items-center">
										<span class="icon-styled ">
											<i class="fa color-main2 fa-phone"></i>
										</span>
                                            <div class="media-body">
                                                <span class="small-text">Бронирование вашего  отдыха</span>
                                                <a href="tel:<?php echo am_esc(get_field('phone','options'), 'phone'); ?>"><?php echo get_field('phone','options'); ?></a>

                                            </div>
                                        </div>
                                        <div class="media align-items-center">
                                            <div class="media-body align-items-end">
                                                <span class="small-text">Наш адрес</span>
                                                <p style="font-size: 16px; text-align: right;">г.Химки <br>‌Мкр.Клязьма-Старбеево влд.1</p>
                                            </div>
                                            <span class="icon-styled ">
											<i class="fa color-main2 fa-map-marker"></i>
										</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-1">
                                    <!-- main nav start -->
                                    <nav class="top-nav">
                                        <?php wp_nav_menu( array(
                                                'theme_location' => 'menu-main',
                                                'menu_id' => 'menu-main ',
                                                'container' => 'ul',
                                                'items_wrap'=> '<ul id="%1$s" class="nav sf-menu sf-js-enabled sf-arrows">%3$s</ul>',
                                                //'container_class' => 'top-nav',
                                                'menu_class' => 'nav sf-menu sf-js-enabled sf-arrows'
                                        ) ); ?>
                                    </nav>

                                    <!-- eof main nav -->
                                </div>

                            </div>
                        </div>
                        <!-- header toggler -->
                        <span class="toggle_menu"><span></span></span>
                    </header>
                    <?php if(!is_front_page()): ?>
                        <section class="page_title ds s-py-5">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-12 text-center">
                                        <h1 class="bold"><?php the_title(); ?> </h1>
                                        <!--<ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="./">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Pages</a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                About
                                            </li>
                                        </ol>-->
                                    </div>

                                </div>
                            </div>
                        </section>
                    <?php endif; ?>

                </div>
