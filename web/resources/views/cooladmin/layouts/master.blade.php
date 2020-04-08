<?php
$theme = 'themes/cooladmin/';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Module Admin</title>

        {{-- Laravel Mix - CSS File --}}

        <!-- Fontfaces CSS-->
        <link href="{{ url($theme . 'css/font-face.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{ url($theme . 'vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="{{ url($theme . 'vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/wow/animate.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/slick/slick.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
        <link href="{{ url($theme . 'vendor/vector-map/jqvmap.min.css') }}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{ url($theme . 'css/theme.css') }}" rel="stylesheet" media="all">

    </head>
    <body class="animsition">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
            @include('cooladmin.layouts.menu')
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container2">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop2">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap2">
                                <div class="logo d-block d-lg-none">
                                    <a href="#">
                                        <img src="{{ url($theme . 'images/icon/logo-white.png') }}" alt="CoolAdmin" />
                                    </a>
                                </div>
                                <div class="header-button2">
                                    <div class="header-button-item js-item-menu">
                                        <i class="zmdi zmdi-search"></i>
                                        <div class="search-dropdown js-dropdown">
                                            <form action="">
                                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                                <span class="search-dropdown__icon">
                                                    <i class="zmdi zmdi-search"></i>
                                                </span>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header-button-item has-noti js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-button-item mr-0 js-sidebar-btn">
                                        <i class="zmdi zmdi-menu"></i>
                                    </div>
                                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-globe"></i>Language</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-pin"></i>Location</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-email"></i>Email</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                @include('cooladmin.layouts.menu_mobile')
                <!-- END HEADER DESKTOP-->

                <!-- BREADCRUMB-->
                <section class="au-breadcrumb m-t-75">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="au-breadcrumb-content">
                                        <div class="au-breadcrumb-left">
                                            <span class="au-breadcrumb-span">You are here:</span>
                                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                <li class="list-inline-item active">
                                                    <a href="#">Home</a>
                                                </li>
                                                <li class="list-inline-item seprate">
                                                    <span>/</span>
                                                </li>
                                                <li class="list-inline-item">Dashboard</li>
                                            </ul>
                                        </div>
                                        <button class="au-btn au-btn-icon au-btn--green">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END BREADCRUMB-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
            </div>
            <!-- END PAGE CONTAINER-->
        </div>

        <script src="{{ url($theme . 'vendor/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/bootstrap-4.1/popper.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/slick/slick.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/wow/wow.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/animsition/animsition.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ url($theme . 'vendor/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/select2/select2.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/vector-map/jquery.vmap.js') }}"></script>
        <script src="{{ url($theme . 'vendor/vector-map/jquery.vmap.min.js') }}"></script>
        <script src="{{ url($theme . 'vendor/vector-map/jquery.vmap.sampledata.js') }}"></script>
        <script src="{{ url($theme . 'vendor/vector-map/jquery.vmap.world.js') }}"></script>
        <script src="{{ url($theme . 'js/main.js') }}"></script>
    </body>
</html>
