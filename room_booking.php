<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HOTEL HTML TEMPLATE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/icons/favicon.png">
    <link rel="stylesheet" href="css/libs/jquery-ui/jquery-ui.min.css">

    <link rel="stylesheet" href="css/style.css">
    <script async src='../cdn-cgi/challenge-platform/h/b/scripts/invisiblec612.js?ts=1656576000'></script>
</head>

<body class="room single">
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
                            <li class="menu-item"><a href="contact.php">Contact</a></li>
                        </ul>
                        <div class="header-right">
                            <a href="room-calssic.php" class="btn-book">BOOK YOUR STAY</a>
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
                    <li class="menu-item"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="container bg-light my-5">
            <h2 class="text-center w-100 mt-3">BOOK YOUR ROOM</h2>
            <div class="room-single row">
                <main class="site-main col-sm-12 col-md-12 w-auto">
                    <form action="thankyou.php" method="post">
                        <div class="form-row ">
                            <div class="form-group col-md-6 p-3 ">
                                <label class="text-dark ">Full Name</label>
                                <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name"
                                    required>
                            </div>
                            <div class="form-group col-md-6 p-3">
                                <label  class="text-dark ">Mobile No.</label>
                                <input class="form-control" type="tel" name="phone" pattern="[0-9]{10}"
                                    placeholder="Enter 10 digits mobile number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 p-3">
                                <label  class="text-dark ">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="example@example.com" required>
                            </div>
                            <div class="form-group col-md-6 p-3">
                                <label class="text-dark ">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Current Residential Address"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 p-3">
                                <label  class="text-dark">Select Identification</label>
                                <select name="id_card" class="form-control"  required>
                                    <option selected disabled>ID Card</option>
                                    <option>Driving License</option>
                                    <option>Aadhar Card</option>
                                    <option>Passport</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 p-3">
                                <label  class="text-dark ">ID Number</label>
                                <input type="text" class="form-control" name="id_number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 p-3">
                                <label for="" class="text-dark"> No.of Adult(maximum two adult allowed in one
                                    room)</label>
                                <select name="number_adult" class="form-control" required>
                                    <option selected disable> Select Adult</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 p-3">
                                <label for="" class="text-dark"> No.of Child(maximum two child allowed in one
                                    room)</label>
                                <select id="inputState" class="form-control"  name="number_child"required>
                                    <option selected disable> Select Child</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 p-3">
                                <label  class="text-dark">Room Type</label>
                                <select id="room_type" class="form-control" name="room_type" required>
                                    <option selected disable> Select Room</option>
                                    <option>Classic Room</option>
                                    <option>Budget Room</option>
                                    <option>Premium Room</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 p-3">
                                <label for="" class="text-dark">Payment Bill(while Check in)</label>
                                <input type="text" id="bill_payment"  name="payment_bill"value="0" disabled>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 p-3">
                                <label for="inputEmail4" class="text-dark ">From</label>
                                <input type="date" class="form-control" max="" id="fromDate" name="check_in" requiured>
                            </div>
                            <div class="form-group col-md-6 p-3">
                                <label for="inputEmail4" class="text-dark ">To</label>
                                <input type="date" class="form-control" min="" id="toDate" name="check_out" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <input type="submit" class="btn btn-outline-primary btn-block m-3" name="submit" value="Book Here">
                        </div>
                    </form>
                    <div class="room-wrapper mt-5">
                        <div class="room_gallery clearfix">
                            <div class="camera_wrap camera_emboss" id="camera_wrap">
                                <div data-src="images/slides/h1-slider1.jpg"></div>
                                <div data-src="images/slides/h1-slider3.jpg"></div>
                                <div data-src="images/slides/h1-slider2.jpg"></div>
                            </div>
                        </div>
                        <div class="title-share clearfix">
                            <h2 class="title">Classic Room</h2>
                            <div class="social-share">
                                <ul>
                                    <li><a class="link facebook" title="Facebook"
                                            href="https://www.facebook.com/sharer/sharer.php?u=#" rel="nofollow"
                                            onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                            target="_blank"><i class="ion-social-facebook"></i></a></li>
                                    <li><a class="link twitter" title="Twitter"
                                            href="https://twitter.com/intent/tweet?url=#&amp;text=TheTitleBlog"
                                            rel="nofollow"
                                            onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                            target="_blank"><i class="ion-social-twitter"></i></a></li>
                                    <li><a class="link google" title="Google" href="https://plus.google.com/share?url=#"
                                            rel="nofollow"
                                            onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                            target="_blank"><i class="ion-social-googleplus"></i></a>
                                </ul>
                            </div>
                        </div>
                        <div class="room_price">
                            <span class="price_value price_min">$100.0</span>
                            <span class="unit">Night</span>
                        </div>
                        <div class="description">
                            <p>This large suite in the courtyard adobe has a Queen-size built-in platform bed and a
                                large indoor/outdoor stone tub with a rain shower. The suite features a full kitchen
                                with breakfast bar, a spacious sitting area with a wood burning fireplace. The
                                private patio offers dramatic views of the San Jacinto Mountains. The suite features
                                a full kitchen with breakfast bar, a spacious sitting area with a wood burning
                                fireplace. The private patio offers dramatic views of the San Jacinto Mountains.</p>
                            <p>The suite features a full kitchen with breakfast bar, a spacious sitting area with a
                                wood burning fireplace. The private patio offers dramatic views of the San Jacinto
                                Mountains.
                            </p>
                        </div>
                        <div class="room_additinal">
                            <h3 class="title style-01">AMENITIES AND SERVICES</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul>
                                        <li><i class="fa fa-check"></i>Priviliged in Bruges</li>
                                        <li><i class="fa fa-check"></i>High satisfaction</li>
                                        <li><i class="fa fa-check"></i>Unparalleded service</li>
                                        <li><i class="fa fa-check"></i>Aenean sollicitudin</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>


    </div>
    </div>

    <footer id="colophon" class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="newsletter">
                    <h3>Newsletter</h3>
                    <form method="post" class="form-newsletter">
                        <input type="email" name="EMAIL" placeholder="Enter your Email" required>
                        <button type="submit">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="widget-text">
                            <div class="footer-location">
                                <img src="images/logo1-footer.png" alt="">
                                <p>You have questions regarding our services? Contact us, we will be happy to help you
                                    out!</p>
                                <ul class="info">
                                    <li><i class="ion-ios-location"></i> 329
                                        Queensberry Street, North Melbourne VIC 3051, Australia.</li>
                                    <li><i class="ion-ios-telephone"></i><a href="tel:8812345678">(+88) 12-345-678</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="widget-menu">
                            <h3 class="widget-title">Booking</h3>
                            <ul class="menu">
                                <li><a href="#">Rooms & Suites</a></li>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Spa & Fitness</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="widget-menu">
                            <h3 class="widget-title">About Us</h3>
                            <ul class="menu">
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Blog & Events</a></li>
                                <li><a href="#">Awards</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="widget-menu">
                            <h3 class="widget-title">Connect Us</h3>
                            <ul class="list-social">
                                <li><a class="facebook" href="https://www.facebook.com/thimpress">Facebook</a></li>
                                <li><a class="twitter" href="https://www.twitter.com/thimpress">Twitter</a></li>
                                <li><a class="instagram" href="http://www.thimpress.com/">Instagram</a></li>
                                <li><a class="youtube" href="http://www.thimpress.com/">Youtube</a></li>
                                <li><a class="google" href="http://www.thimpress.com/">Google +</a></li>
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
                        <p class="copyright-text">© 2018 <a href="#">Sunrise Hotel</a> by <a
                                href="https://thimpress.com/">ThimPress</a>. All Rights Reserved.</p>
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
    <script src="js/libs/jquery-1.12.4.min.js"></script>
    <script src="js/libs/stellar.min.js"></script>
    <script src="js/libs/bootstrap.min.js"></script>
    <script src="js/libs/smoothscroll.min.js"></script>
    <script src="js/libs/owl.carousel.min.js"></script>
    <script src="js/libs/jquery.magnific-popup.min.js"></script>
    <script src="js/libs/theia-sticky-sidebar.min.js"></script>
    <script src="js/libs/counter-box.min.js"></script>
    <script src="js/libs/jquery.flexslider-min.js"></script>
    <script src="js/libs/jquery.thim-content-slider.min.js"></script>
    <script src="js/libs/gallery.min.js"></script>
    <script src="js/libs/moment.min.js"></script>
    <script src="js/libs/jquery-ui.min.js"></script>
    <script src="js/libs/daterangepicker.min.js"></script>
    <script src="js/libs/daterangepicker.min-date.min.js"></script>
    <script src="js/theme-customs.js"></script>
    <script type="text/javascript">
    (function() {
        window['__CF$cv$params'] = {
            r: '7236875b3b33794a',
            m: '1rBH7YlBACMNz_wpxn45.K9ceG5Mb0Se5.hbRZYVJL4-1656588195-0-Ae5E4kg2Jvn/EWw9OuDF9vKfFXXo2S0stS0quomhlVf58LHKouHpt4pddmsE4qxYo/IQ5ddQzE96aK44BuqwNDwmJm/NG2gxNjG3n0YZBgtiCuLCJAQylB+EH7Ij9i4LEIvJ3QzYKjsQap5GBUIU+tU=',
            s: [0x5dd168379c, 0xe3688669ed],
            u: '/cdn-cgi/challenge-platform/h/b'
        }
    })();
    </script>
</body>

</html>
<script>
var fromDate;
$('#fromDate').on('change', function() {
    fromDate = $(this).val();
    $('#toDate').prop('min', function() {
        return fromDate;
    })
});
var toDate;
$('#toDate').on('change', function() {
    toDate = $(this).val();
    $('#fromDate').prop('max', function() {
        return toDate;
    })
})

$('#room_type').on('change', function() {
    var room_type = $('#room_type').val();
    if (room_type == "Classic Room") {
        $('#bill_payment').val('$100');
    }
    if (room_type == "Budget Room") {
        $('#bill_payment').val('$200');
    }
    if (room_type == "Premium Room") {
        $('#bill_payment').val('$300');
    }

})
</script>