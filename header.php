<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hóa đơn điện tử HILO - Nhanh chóng - An toàn - Tiết kiệm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.5/css/uikit.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit-icons.min.js"></script>
    <script src="assets/numeral/numeral.min.js"></script>
</head>
<body class="<?= $page; ?>">
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="app" class="uk-height-viewport uk-offcanvas-content">
<header id="header" uk-sticky="animation: uk-animation-slide-top; top: 0">
    <div class="top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li><a href="#"><span uk-icon="icon: facebook; ratio: 1"></a></li>
                    <li><a href="#"><span uk-icon="icon: youtube; ratio: 1"></span></a></li>
                </ul>

            </div>

            <div class="uk-navbar-center">
                <a class="uk-navbar-item uk-logo" href="#">HOTLINE 24/7: 1900 29 29 62</a>
            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li><a href="#">EMAIL: SUPPORT@TVANHILO.VN</a></li>
                </ul>

            </div>

        </nav>
    </div>
    <div class="bottom">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="."><img src="imgs/logo1.png" alt=""></a>
            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">trang chủ</a></li>
                    <li>
                        <a href="#">hóa đơn điện tử <i class="fa fa-angle-down uk-margin-small-left" aria-hidden="true"></i></a>
                        <ul class="uk-nav uk-navbar-dropdown uk-navbar-dropdown-nav">
                            <li><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">hóa đơn phong thủy <i class="fa fa-angle-down uk-margin-small-left" aria-hidden="true"></i></a>
                        <ul class="uk-nav uk-navbar-dropdown uk-navbar-dropdown-nav">
                            <li><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">kiến thức <i class="fa fa-angle-down uk-margin-small-left" aria-hidden="true"></i></a>
                        <ul class="uk-nav uk-navbar-dropdown uk-navbar-dropdown-nav">
                            <li><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">chi nhánh & đại lý <i class="fa fa-angle-down uk-margin-small-left" aria-hidden="true"></i></a>
                        <ul class="uk-nav uk-navbar-dropdown uk-navbar-dropdown-nav">
                            <li><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="uk-button uk-button-secondary">đăng ký <i class="fa fa-angle-down uk-margin-small-left" aria-hidden="true"></i></span></a>
                        <ul class="uk-nav uk-navbar-dropdown uk-navbar-dropdown-nav">
                            <li><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
    </div>
</header>