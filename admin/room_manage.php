<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Room Manage</li>
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
                <div class="panel-heading">Room Manage
                </div>
                <div class="panel-body">
                    <div class="text-center">
                        <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal">
                            ADD ROOMS
                        </button> -->
                    </div>
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%"
                        id="rooms">
                        <thead>
                            <tr>
                                <th hidden>Room_id</th>
                                <th hidden>Room_type_id</th>
                                <th>Room No</th>
                                <th>Room Type</th>
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
                                <td hidden><?php echo $rooms['room_id'] ?></td>
                                <td hidden><?php echo $rooms['room_type_id']?></td>
                                <td><?php echo $rooms['room_no'] ?></td>
                                <td><?php echo $rooms['room_type'] ?></td>

                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
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


    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="crud.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="room_id" id="update_id">
                        <input type="hidden" name="room_type_id" id="room_type_id">

                        <div class="form-group">
                            <label> Room No. </label>
                            <input type="text" name="room_no" id="edit_room_number" class="form-control"
                                placeholder="Room no.">
                        </div>

                        <div class="form-group">
                            <label>Room Type </label>
                            <select name="room_type" class="form-control" id="edit_room_type">
                                <option>Classic Room</option>
                                <option>Budget Room</option>
                                <option>Premium Room</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="crud.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD ROOMS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="crud.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="room_id" id="update_id">
                        <input type="hidden" name="room_type_id" id="room_type_id">

                        <div class="form-group">
                            <label> Room No. </label>
                            <input type="text" name="room_no" id="edit_room_number" class="form-control"
                                placeholder="Room no.">
                        </div>

                        <div class="form-group">
                            <label>Room Type </label>
                            <select name="room_type" class="form-control" id="edit_room_type">
                                <option>Classic Room</option>
                                <option>Budget Room</option>
                                <option>Premium Room</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="adddata" class="btn btn-primary">Update Data</button>
                    </div>
            </div>
        </div>
    </div>