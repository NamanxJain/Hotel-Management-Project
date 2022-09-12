<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Booking</li>
        </ol>
    </div>
    <!--/.row-->

    <br>

    <div class="row">
        <div class="col-lg-12">
            <div id="success"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Booking
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%"
                        id="rooms">
                        <thead>
                            <tr>
                                <th>Room No</th>
                                <th>Room Type</th>
                                <th>Booking Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $room_query = "SELECT * FROM room NATURAL JOIN room_type";
                        $rooms_result = mysqli_query($connection, $room_query);
                        if (mysqli_num_rows($rooms_result) > 0) {
                            while ($rooms = mysqli_fetch_assoc($rooms_result)) { ?>
                            <tr>
                                <td><?php echo $rooms['room_no'] ?></td>
                                <td><?php echo $rooms['room_type'] ?></td>
                                <td>
                                    <?php
                                        if ($rooms['booking_status'] == 0) {
                                            echo '<a href="index.php?reservation&room_id=' . $rooms['room_id'] . '&room_type_id=' . $rooms['room_type_id'] . '" class="btn btn-success" style="border-radius:0%">Book Room</a>';
                                        } else {
                                            echo '<a href="#" class="btn btn-danger" style="border-radius:0%";>Booked</a>';
                                            echo '&nbsp;';
                                            echo '&nbsp;';
                                            echo '&nbsp;';
                                            echo '<button class="btn btn-info" data-toggle="modal" data-id="'.$rooms['room_id'].'" data-target="#deleteModal" id="unbookbutton"  style="border-radius:0%" ;>Unbook</button>';
                                        }
                                        ?>
                                </td>
                                <td>
                                    <?php
                                        if ($rooms['booking_status'] == 1) {
                                            echo '<button title="Customer Information" data-toggle="modal" data-target="#customerDetailsModal" data-id="' . $rooms['room_id'] . '" id="customerDetails" class="btn btn-primary" style="border-radius:60px;"><i class="fa fa-eye">View Details</i></button>';
                                        }
                                        ?>
                                </td>
                            </tr>
                            <?php }
                        } else {
                            echo "No Rooms";
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!---customer details-->
    <!---customer details-->
    <div id="customerDetailsModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center"><b>Customer's Detail</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-responsive table-bordered">
                                <!-- <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Detail</th>
                                </tr>
                                </thead> -->
                                <tbody>
                                <tr>
                                    <td><b>Customer Name</b></td>
                                    <td id="customer_full_name"></td>
                                </tr>
                                <tr>
                                    <td><b>Contact Number</b></td>
                                    <td id="customer_contact_no"></td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td id="customer_email"></td>
                                </tr>
                                <tr>
                                    <td><b>Address</b></td>
                                    <td id="customer_address"></td>
                                </tr>
                                <tr>
                                    <td><b>ID Card</b></td>
                                    <td id="customer_id_card"></td>
                                </tr>
                                <tr>
                                    <td><b>ID Card Number</b></td>
                                    <td id="customer_id_number"></td>
                                </tr>
                                <tr>
                                    <td><b>No. of Adult</b></td>
                                    <td id="customer_number_adult"></td>
                                </tr>
                                <tr>
                                    <td><b>No. of Child</b></td>
                                    <td id="customer_number_child"></td>
                                </tr>
                                <tr>
                                    <td><b>Check In</b></td>
                                    <td id="customer_check_in"></td>
                                </tr>
                                <tr>
                                    <td><b>Check Out</b></td>
                                    <td id="customer_check_out"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---customer details ends here-->
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UNBOOK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Do you Want to Unbook</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="unbookModalbutton" class="btn btn-danger">unbook</button>
      </div>
    </div>
  </div>
</div>
<!--/.main-->

