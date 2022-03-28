<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Music</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/template/css/price-range.css" rel="stylesheet">
    <link href="/template/css/animate.css" rel="stylesheet">
    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/responsive.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>

<body>
    <header id="header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-envelope"></i> example@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <div class=icon_style><a href="https://uk-ua.facebook.com"><i class="fa fa-facebook"></i></a></div>
                                </li>
                                <li>
                                    <div class=icon_style><a href="#"><i class="fa fa-google-plus"></i></a></div>
                                </li>
                                <li>
                                    <div class=icon_style><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></div>
                                </li>
                                <li>
                                    <div class=icon_style><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="/template/images/home/logo.jpg" alt="" width=200 height=100 /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav ">
                                <li>
                                    <div class=icon_style_md><a href="/">Main</a></div>
                                </li>
                                <li>
                                    <div class=icon_style_md><a href="/catalog">All music</a></div>
                                </li>
                                <?php if (User::isGuest()) : ?>
                                    <li>
                                        <div class=icon_style_md><a href="/register"><span class="fa fa-plus"></span> Registration</a></div>
                                    </li>
                                    <li>
                                        <div class=icon_style_md><a href="/user/login"><i class="fa fa-lock"></i> Login</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <div class=icon_style_md><a href="/playlist"><i class="fa fa-music"></i> Playlist</a></div>
                                    </li>
                                    <li>
                                        <div class=icon_style_md><a href="/cabinet"><i class="fa fa-user"></i> Account</a></div>
                                    </li>
                                    <li>
                                        <div class=icon_style_md><a href="/user/logout"><i class="fa fa-sign-out"></i> Logout</a></div>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>