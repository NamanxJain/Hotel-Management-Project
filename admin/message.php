<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Feedback</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Make Complaint</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" hidden>message id</th>
                                <th scope="col">Customer name</th>
                                <th scope="col">Customer Email</th>
                                <th scope="col">Customer phone</th>
                                <th scope="col">Customer Message</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $query = "SELECT * FROM `message` ";
                        $result = mysqli_query($connection, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($message = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td hidden><?php echo $message['message_id'] ?></td>
                                <td><?php echo $message['full_name']?></td>
                                <td><?php echo $message['email'] ?></td>
                                <td><?php echo $message['phone'] ?></td>
                                <td><?php echo $message['message'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger messagedeletebtn"> DELETE </button>
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

</div>
<!-- ==================================================================================================================== -->

 <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
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
                        <button type="submit" name="message_delete_data" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<?php
