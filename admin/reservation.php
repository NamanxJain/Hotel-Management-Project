<?php
if (isset($_GET['room_id'])){
    $get_room_id = $_GET['room_id'];
    $get_room_sql = "SELECT * FROM room NATURAL JOIN room_type WHERE room_id = '$get_room_id'";
    $get_room_result = mysqli_query($connection,$get_room_sql);
    $get_room = mysqli_fetch_assoc($get_room_result);

    $get_room_type_id = $get_room['room_type_id'];
    $get_room_type = $get_room['room_type'];
    $get_room_no = $get_room['room_no'];
    $get_room_price = $get_room['price'];
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Reservation</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <form action=crud.php method="post">
                <div class="response"></div>
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group col-lg-6">
                                <label>Room Type</label>
                                <select class="form-control" id="room_type" name="room_type" required>
                                    <option selected disabled>Select Room Type</option>
                                    <option selected>
                                        <?php echo $get_room_type; ?></option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Room No</label>
                                <select class="form-control" id="room_no" onchange="fetch_price(this.value)" required
                                    data-error="Select Room No" name="room_id">
                                    <option selected disabled>Select Room No</option>
                                    <option selected value="<?php echo $get_room_id; ?>"><?php echo $get_room_no; ?>
                                    </option>
                                </select>
                                
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Check In Date</label>
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="check_in_date"
                                   name="check_in" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Check Out Date</label>
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="check_out_date" name="check_out" required>
                            </div>

                            <div class="col-lg-12">
                                <h4 style="font-weight: bold">Total Days : <span id="staying_day">0</span> Days</h4>
                                <h4 style="font-weight: bold">Price: <span
                                        id="price"><?php echo $get_room_price; ?></span> /-</h4>
                                <h4 style="font-weight: bold">Total Amount : <span id="total_price">0</span> /-</h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Customer Detail:</div>
                        <div class="panel-body">
                            <div class="form-group col-lg-6">
                                <label>Full Name</label>
                                <input class="form-control" placeholder="First Name" name="full_name" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" placeholder="Contact No" name="contact_no"
                                    required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email"
                                    required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="Address" name="address" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>ID Card Type</label>
                                <select class="form-control" name="id_card" required>
                                    <option selected disabled>Select ID Card Type</option>
                                    <option>Driving License</option>
                                    <option>Aadhar Card</option>
                                    <option>Paasport</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Selected ID Card Number</label>
                                <input type="text" class="form-control" placeholder="ID Card Number" id="id_number"
                                    name="id_number" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Number of Adult</label>
                                <select class="form-control" name="number_adult" required>
                                    <option selected disabled>Select number of Person</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>No.of child</label>
                                <select class="form-control" name="number_child" required>
                                    <option selected disabled>Select number of child</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="form-group text-center col-lg-12">
                                <input type="submit" class="btn btn-primary btn-block" value="submit" name="submit">
                            </div>
                        </div>
                    </div>



                </div>
            </form>
        </div>
    </div>

</div>
<!--/.main-->


<!-- Booking Confirmation-->
<div id="bookingConfirm" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"><b>Room Booking</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert bg-success alert-dismissable" role="alert"><em
                                class="fa fa-lg fa-check-circle">&nbsp;</em>Room Successfully Booked</div>
                        <table class="table table-striped table-bordered table-responsive">
                            <tbody>
                                <tr>
                                    <td><b>Customer Name</b></td>
                                    <td id="getCustomerName"></td>
                                </tr>
                                <tr>
                                    <td><b>Room Type</b></td>
                                    <td id="getRoomType"></td>
                                </tr>
                                <tr>
                                    <td><b>Room No</b></td>
                                    <td id="getRoomNo"></td>
                                </tr>
                                <tr>
                                    <td><b>Check In</b></td>
                                    <td id="getCheckIn"></td>
                                </tr>
                                <tr>
                                    <td><b>Check Out</b></td>
                                    <td id="getCheckOut"></td>
                                </tr>
                                <tr>
                                    <td><b>Total Amount</b></td>
                                    <td id="getTotalPrice"></td>
                                </tr>
                                <tr>
                                    <td><b>Payment Status</b></td>
                                    <td id="getPaymentStaus"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" style="border-radius:60px;" href="index.php?reservation"><i
                        class="fa fa-check-circle"></i></a>
            </div>
        </div>

    </div>
</div>

<?php

}

?>