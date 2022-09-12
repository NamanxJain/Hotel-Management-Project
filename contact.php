<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.thimpress.com/hotelwp/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 11:24:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HOTEL SUNRISE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="images/icons/favicon.png" />

    <link rel="stylesheet" href="css/style.css" />
    <!-- <script async src='../cdn-cgi/challenge-platform/h/b/scripts/invisiblec612.js?ts=1656576000'></script> -->
</head>

<body class="page">
    <div id="preloading">
        <div class="loading-icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <div id="wrapper-container" class="content-pusher">
        <div class="overlay-close-menu"></div>
        <header id="masthead" class="header-default affix-top sticky-header">
            <div class="row">
                <div class="header-menu col-sm-12 tm-table">
                    <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                        <div class="icon-wrap">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <div class="width-logo sm-logo table-cell text-center">
                        <a href="#" class="no-sticky-logo" title="Hotel HTML Template">
                            <img class="logo" src="images/logo1.png" alt="" />
                            <img class="mobile-logo" src="images/logo1-sticky.png" alt="" />
                        </a>
                        <a href="#" class="sticky-logo">
                            <img src="images/logo1-sticky.png" alt="" />
                        </a>
                    </div>
                    <div class="width-navigation navigation table-cell">
                        <ul class="nav main-menu">
                            <li class="menu-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="rooms.php">Rooms</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog.php">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="about-us.php">About Us</a>
                            </li>
                            <li class="menu-item"><a href="contact.php" style="color:var(--primary-color-1)">Contact</a>
                            </li>
                        </ul>
                        <div class="header-right">
                            <a href="room_booking.php" class="btn-book">BOOK YOUR STAY</a>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <nav class="visible-xs mobile-menu-container mobile-effect" itemscope
            itemtype="http://schema.org/SiteNavigationElement">
            <div class="inner-off-canvas">
                <div class="menu-mobile-effect navbar-toggle">
                    Close <i class="fa fa-times"></i>
                </div>
                <ul class="nav main-menu">
                    <li class="menu-item">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="rooms.php">Rooms</a>
                    </li>
                    <li class="menu-item">
                        <a href="blog.php">Blog</a>
                    </li>
                    <li class="menu-item">
                        <a href="about-us.php">About Us</a>
                    </li>
                    <li class="menu-item"><a href="contact.php" style="color:var(--primary-color-1)" ;>Contact</a></li>
                </ul>
            </div>
        </nav>
        <div id="main-content">
            <div class="page-title">
                <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                    <div class="content container">
                        <h1 class="heading_primary">Contact</h1>
                        <ul class="breadcrumbs">
                            <li class="item"><a href="index.php">Home</a></li>
                            <li class="item"><span class="separator"></span></li>
                            <li class="item active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="site-content no-padding">
                <div class="page-content">
                    <div class="container">
                        
                        <div class="container m-5">
                        <?php
                 
                            if(isset($_SESSION["message"]))
                            {
                                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                      <strong>Dear Customer!</strong> Your meassage have been saved.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>';
                                    unset($_SESSION["message"]);
                                   
                            };

                  ?>
                  </div>
                        <div class="empty-space"></div>
                        <div class="row tm-flex">
                            <div class="col-sm-6">
                                <div class="sc-heading">
                                    <p class="first-title">SEND A</p>
                                    <h3 class="second-title">MESSAGE</h3>
                                    <p class="description">
                                        Do you have anything in your mind to tell us? <br />
                                        Please don't hesitate to get in touch to us via our
                                        contact form.
                                    </p>
                                </div>
                                <div class="sc-contact-form">
                                    <form action="admin/crud.php" id="ajaxform" method="post">
                                        <input type="text" name="full_name" required placeholder="Your name*" />
                                        <input type="email" name="email" required placeholder="Your email*" />
                                        <input type="tel" name="phone" required placeholder="Your phone*" />
                                        <textarea name="message" id="your-message" cols="30" rows="10" required
                                            placeholder="Your message*"></textarea>
                                        <input type="submit" value="submit" name="message_btn" class="submit" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="sc-contact-info">
                                    <div class="sc-heading">
                                        <p class="first-title">GET IN TOUCH</p>
                                        <p class="description">
                                            329 Queensberry Street, North Melbourne VIC 3051,
                                            Australia.
                                        </p>
                                    </div>
                                    <p class="phone">
                                        Call. <a href="tel:01794340979">01794 340 979</a>
                                    </p>
                                    <p class="email">
                                        <a
                                            href="https://html.thimpress.com/cdn-cgi/l/email-protection#563f38303916223e3f3b26243325257835393b"><span
                                                class="__cf_email__"
                                                data-cfemail="0861666e67487c606165787a6d7b7b266b6765">[email&#160;protected]</span></a>
                                    </p>
                                    <ul class="sc-social-link style-03">
                                        <li>
                                            <a target="_blank" class="face" href="https://www.facebook.com/thimpress/"
                                                title="Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank" class="twitter" href="https://www.twitter.com/thimpress/"
                                                title="Twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank" class="skype" href="skype:hotamdhv?call" title="Skype"><i
                                                    class="fa fa-skype"></i></a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="http://www.thimpress.com/" title="Instagram"><i
                                                    class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="colophon" class="site-footer">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-text">
                                <div class="footer-location">
                                    <img src="images/logo1-footer.png" alt="" />
                                    <p>
                                        You have questions regarding our services? Contact us, we
                                        will be happy to help you out!
                                    </p>
                                    <ul class="info">
                                        <li>
                                            <i class="ion-ios-location"></i>
                                            <span>123 Camino Ramon, Suite 500 San Ramon, United
                                                Kingdom</span>
                                        </li>
                                        <li>
                                            <i class="ion-ios-telephone"></i><a href="tel:8812345678">(+88)
                                                12-345-678</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mx-auto">
                            <div class="widget-menu">
                                <h3 class="widget-title">Connect Us</h3>
                                <ul class="list-social">
                                    <li>
                                        <a class="facebook" href="https://www.facebook.com/thimpress">Facebook</a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="https://www.twitter.com/thimpress">Twitter</a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="http://www.thimpress.com/">Instagram</a>
                                    </li>
                                    <li>
                                        <a class="youtube" href="http://www.thimpress.com/">Youtube</a>
                                    </li>
                                    <li>
                                        <a class="google" href="http://www.thimpress.com/">Google +</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright-content col-sm-12">
                            <p class="copyright-text">
                                © 2018 <a href="#">Sunrise Hotel</a>. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="back-to-top">
        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/libs/jquery.min.js"></script>
    <script src="js/libs/stellar.min.js"></script>
    <script src="js/libs/bootstrap.min.js"></script>
    <script src="js/libs/smoothscroll.min.js"></script>
    <script src="js/libs/owl.carousel.min.js"></script>
    <script src="js/libs/jquery.magnific-popup.min.js"></script>
    <script src="js/libs/theia-sticky-sidebar.min.js"></script>
    <script src="js/libs/counter-box.min.js"></script>
    <script src="js/libs/moment.min.js"></script>
    <script src="js/libs/jquery-ui.min.js"></script>
    <script src="js/libs/daterangepicker.min.js"></script>
    <script src="js/libs/daterangepicker.min-date.min.js"></script>
    <script src="js/libs/jquery.thim-content-slider.min.js"></script>
    <script src="js/theme-customs.js"></script>

    <script type="text/javascript">
    (function() {
        window["__CF$cv$params"] = {
            r: "7236877a5fcea3b7",
            m: "tIN4NR9lOQZ5sr1pyzOqVWiU8l2e7ma7M7T227g2uUs-1656588200-0-AZUQnspT4KN28Qvd9AjtVsbgd/NULtbZFP7odWp/aAG/9t35vslsgr3IUMYVoAojvrbiC9aziIR0052dcmO6tQQ/6b3T3x4FVAYLpJ+T7i0ECYSY+iFgiMDuuvlo19/1BvgUvZSuZqoOS0xNuyjukhM=",
            s: [0x93739dca2f, 0x9e8abd5b5e],
            u: "/cdn-cgi/challenge-platform/h/b",
        };
    })();
    </script>
</body>

<!-- Mirrored from html.thimpress.com/hotelwp/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 11:24:10 GMT -->

</html>