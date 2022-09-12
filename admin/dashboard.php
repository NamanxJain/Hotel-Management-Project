<body>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12 m-3">
                <?php
                // if(isset($_SESSION["registration_message"]))
                // {
                //     if($_SESSION["registration_message"]==1){
                //     echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                //     <strong>Resgistration Succesfull!</strong>
                //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //       <span aria-hidden="true">&times;</span>
                //     </button>
                //   </div>';
                  
                // }

                //   if($_SESSION["registration_message"]==2){
                //     echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                //     <strong>Resgistration Succesfull!</strong>
                //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //       <span aria-hidden="true">&times;</span>
                //     </button>
                //   </div>';
                // }
                
                //  unset($_SESSION["registration_message"]);
                // }
                ?>
               
            </div>
        </div>

        <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-teal panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-bed color-blue"></em>
                            <div class="large"><?php include '../counters/room-count.php'?></div>
                            <div class="text-muted">Total Rooms</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-check-circle color-green"></em>
                            <div class="large"><?php include '../counters/avrooms-count.php'?></div>
                            <div class="text-muted">Available Rooms</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-orange panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                            <div class="large">50</div>
                            <div class="text-muted">Staffs</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-teal panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-reorder color-red"></em>
                            <div class="large"><?php include '../counters/bookedroom-count.php'?></div>
                            <div class="text-muted">Booked Rooms</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->

            <hr>

            <div class="row">

                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-hotel color-red"></em>
                            <div class="large"><?php include '../counters/classic_room.php'?></div>
                            <div class="text-muted">Classic Room Booked</div>
                        </div>
                    </div>
                </div>

                <!--/.row-->
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-hotel color-orange"></em>
                            <div class="large"><?php include '../counters/Budget_room.php'?></div>
                            <div class="text-muted">Budget Room Booked</div>
                        </div>
                    </div>
                </div>

                <!--/.row-->
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-hotel color-green"></em>
                            <div class="large"><?php include '../counters/premium_room.php'?></div>
                            <div class="text-muted">Premium Room Booked</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-comments color-blue"></em>
                            <div class="large"><?php include '../counters/message_count.php'?></div>
                            <div class="text-muted">Messages</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>


    <hr>
    </div>

    </div>
    <!--/.main-->

</body>

</html>