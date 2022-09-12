<?php

require_once('admin/db.php');


$room_available=5;

if(isset($_POST['submit']))
{

    function datechange($date)
    {
        $result=explode('-',$date);
        $day=$result[2];
        $month=$result[1];
        $year=$result[0];

        $new= $day.'-'.$month.'-'.$year;

        return $new;

    }

    $full_name=$_POST['full_name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $id_card=$_POST['id_card'];
    $id_number=$_POST['id_number'];
    $number_adult=$_POST['number_adult'];
    $number_child=$_POST['number_child'];
    $room_type=$_POST['room_type'];
    $check_in=datechange($_POST['check_in']);
    $check_out=datechange($_POST['check_out']);

    if($room_type="Classic Room")
    {
        $query="UPDATE `customer` SET `full_name`= '$full_name' ,`contact_no`= '$phone',`email`= '$email',`address`='$address',`id_card`='$id_card',`id_number`='$id_number',`number_adult`='$number_adult',`number_child`='$number_child',`check_in`='$check_in',`check_out`='$check_out' WHERE `room_type`='Classic Room' AND `full_name`='0' ORDER BY `room_id` ASC LIMIT 1";

        $result=mysqli_query($connection,$query);

        if(mysqli_affected_rows($connection)==1)
        {
           $query2=" UPDATE `room` SET `booking_status`='1',`check_in`='1',`check_out`='0' WHERE `booking_status`='0' AND `room_type_id`='1' ORDER BY `room_id` ASC LIMIT 1";
           $result2=mysqli_query($connection,$query2);
           if($result2)
           {
            $room_available=1;
           }
           else
           {
            echo "not working";
           }
        }
        else{
            $room_available=0;
        }
    }

    else if($room_type="Budget Room")
    {
        $query="UPDATE `customer` SET `full_name`= '$full_name' ,`contact_no`= '$phone',`email`= '$email',`address`='$address',`id_card`='$id_card',`id_number`='$id_number',`number_adult`='$number_adult',`number_child`='$number_child',`check_in`='$check_in',`check_out`='$check_out' WHERE `room_type`='Budget Room' AND `full_name`='0' ORDER BY `room_id` ASC LIMIT 1";

        $result=mysqli_query($connection,$query);

        if(mysqli_affected_rows($connection)==1)
        {
           $query2=" UPDATE `room` SET `booking_status`='1',`check_in`='1',`check_out`='0' WHERE `booking_status`='0' AND `room_type_id`='2' ORDER BY `room_id` ASC LIMIT 1";
           $result2=mysqli_query($connection,$query2);
           if($result2)
           {
            $room_available=1;
           }
           else
           {
            echo "not working";
           }
        }
        else{
            $room_available=0;
        }
    }

    else
    {
        $query="UPDATE `customer` SET `full_name`= '$full_name' ,`contact_no`= '$phone',`email`= '$email',`address`='$address',`id_card`='$id_card',`id_number`='$id_number',`number_adult`='$number_adult',`number_child`='$number_child',`check_in`='$check_in',`check_out`='$check_out' WHERE `room_type`='Premium Room' AND `full_name`='0' ORDER BY `room_id` ASC LIMIT 1";

        $result=mysqli_query($connection,$query);

        if(mysqli_affected_rows($connection)==1)
        {
           $query2=" UPDATE `room` SET `booking_status`='1',`check_in`='1',`check_out`='0' WHERE `booking_status`='0' AND `room_type_id`='3' ORDER BY `room_id` ASC LIMIT 1";
           $result2=mysqli_query($connection,$query2);
           if($result2)
           {
            $room_available=1;
           }
           else
           {
            echo "not working";
           }
        }
        else{
            $room_available=0;
        }
    }
}

?>

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
                    <li class="menu-item"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="container bg-light my-5">
            <h2 class="text-center w-100 mt-3">THANK YOU FOR CHOOSING US</h2>
            <h5 class="text-center w-100 mt-3">
             <?php   
             if($room_available==1)    
              {
                echo 'YOU ROOM IS BOOKED SUCCESSFULLY';
              } 
              else{
                echo'SORRY! ROOM IS NOT AVAILABLE WE WILL LET YOU KNOW WHEN ROOMS ARE AVAILABLE';
              }
           ?> </h5>
            <div class="room-single row">
                <main class="site-main col-sm-12 col-md-12 w-auto">
                    <div class="room-wrapper mt-5">
                        <div class="room_gallery clearfix">
                            <div class="camera_wrap camera_emboss" id="camera_wrap">
                                <div data-src="images/slides/thank_you_1.jpg"></div>
                                <div data-src="images/slides/thank_you_2.jpg"></div>
                                <div data-src="images/slides/h1-slider2.jpg"></div>
                            </div>
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
                                        <i class="ion-ios-telephone"></i><a href="tel:8812345678">(+88) 12-345-678</a>
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
    if(room_type=="Classic Room")
    {   
        $('#bill_payment').val('$100');
    }
    if(room_type=="Budget Room")
    {
        $('#bill_payment').val('$200');
    }
    if(room_type=="Premium Room")
    {
        $('#bill_payment').val('$300');
    }

})
</script>