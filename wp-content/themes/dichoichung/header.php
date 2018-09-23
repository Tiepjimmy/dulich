<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory') ?>/assets/application.css" data-turbolinks-track="true" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/bootrap.min.css" data-turbolinks-track="true" />
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/html5shiv.js" data-turbolinks-track="true" data-turbolinks-eval="true"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/respond.js" data-turbolinks-track="true" data-turbolinks-eval="true"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/es5-shim.js" data-turbolinks-track="true" data-turbolinks-eval="false"></script>
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory') ?>/assets/ie8.css" data-turbolinks-track="true" />
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory') ?>/assets/ie7.css" data-turbolinks-track="true" />
    <![endif]-->
    <?php wp_head() ?>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
</head>

<body>
<div id="container">
    <div id="header">
        <header>
            <div class="header-top">
                <div class="container-fluid container-full">
                    <div class="row">
                        <div class="col-xs-4 col-ms-4 col-sm-3">
                           <!--  <div class="hidden-xs hidden-ms"> -->
                                <label for="header-mega-menu-toggle" class="search-opener" data-toggle="active">
                                    <span class="state-inactive">
                                        <i class="icon icon-search"></i>
                                        <span class="search-link">
                                            Tìm kiếm trải nghiệm
                                        </span>
                                    </span>
                                    <span class="state-active">
                                        <span class="icon">&times;</span> Close
                                    </span>
                                </label>
                            <!-- </div> -->
                        </div>
                       
                        <div class="col-xs-4 col-ms-4 col-sm-4 col-sm-push-1">
                            <div class="logo-container">
                                <div class="logo">
                                    <a href="<?php echo bloginfo('url') ?>">
                                           <img class="size-medium wp-image-135 aligncenter" src="http://beta.dichoichung.com/wp-content/uploads/2018/07/logo-di-choi-chung-ngang-300x60.png" alt="" width="300" height="60" srcset="http://dichung.local/wp-content/uploads/2018/07/logo-di-choi-chung-ngang-300x60.png 300w, http://dichung.local/wp-content/uploads/2018/07/logo-di-choi-chung-ngang.png 554w" sizes="(max-width: 300px) 100vw, 300px">
                                    </a>

                                </div>

                            </div>
                        </div>
                        <div class="col-xs-4 col-ms-4 col-sm-4">
                            <div class="menu hidden-xs hidden-ms hidden-sm">
                                <nav>
                                    <ul class="list-inline">
                                        <li>
                                            <a href="<?php echo get_page_link(50) ?>"><strong>Về chúng tôi</strong></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_page_link(52) ?>"><strong>Liên hệ</strong></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="menu-opener hidden-md hidden-lg" role="button">
                                <i class="icon icon-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-toggle-menu">
                <div class="menu-wrapper"></div>
            </div>
            <?php get_template_part('search-tour') ?>
        </header>
    </div>