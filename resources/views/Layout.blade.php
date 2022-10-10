<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorimanae</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li>📢</li>
                            <li>자신만의 레시피를 모두에게 공유해보세요!</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__auth">
                            <a href="/sign-in"><img src="img/icon/user.svg" alt=""> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><h3>조리만해</h3></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        @if($menu == 'Home')
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/shop">Shop</a></li>
                            <li><a href="/blog_home">Blog</a></li>
                            <li><a href="#">MyPage</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">내정보</a></li>
                                    <li><a href="#">내블로그</a></li>
                                    <li><a href="#">내포인트</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        @elseif($menu == 'Shop')
                            <li><a href="/">Home</a></li>
                            <li class="active"><a href="/shop">Shop</a></li>
                            <li><a href="/blog_home">Blog</a></li>
                            <li><a href="#">MyPage</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">내정보</a></li>
                                    <li><a href="#">내블로그</a></li>
                                    <li><a href="#">내포인트</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        @elseif($menu == 'Blog')
                            <li><a href="/">Home</a></li>
                            <li><a href="/shop">Shop</a></li>
                            <li class="active"><a href="/blog_home">Blog</a></li>
                            <li><a href="#">MyPage</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">내정보</a></li>
                                    <li><a href="#">내블로그</a></li>
                                    <li><a href="#">내포인트</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        @elseif($menu == 'Contact')
                            <li><a href="/">Home</a></li>
                            <li><a href="/shop">Shop</a></li>
                            <li><a href="/blog_home">Blog</a></li>
                            <li><a href="#">MyPage</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">내정보</a></li>
                                    <li><a href="#">내블로그</a></li>
                                    <li><a href="#">내포인트</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="/contact">Contact</a></li>
                        @elseif($menu == 'User')
                            <li><a href="/">Home</a></li>
                            <li><a href="/shop">Shop</a></li>
                            <li><a href="/blog_home">Blog</a></li>
                            <li><a href="#">MyPage</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">내정보</a></li>
                                    <li><a href="#">내블로그</a></li>
                                    <li><a href="#">내포인트</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="/shopping-cart"><img src="img/icon/cart.svg" alt=""></i> <span>3</span></a></li>
                        <li><a href="#"><img src="img/icon/delivery.svg" alt=""></i> <span>2</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->




@yield('content')



<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <ul>
                        <li>Address: </li>
                        <li>Phone: </li>
                        <li>Email: </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>



</body>

</html>


