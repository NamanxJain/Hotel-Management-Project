<?php
include("db.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="SELECT `username` FROM user WHERE `id`='$id'";
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($result);
    $username=$row['username'];
}
?>
<html>

<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css" />

    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>


    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="../images/htl.png" />

            <br>
            <div class="result">
                <?php
            // if (isset($_GET['empty'])){
            //     echo '<div class="alert alert-danger">Enter Username or Password</div>';
            // }elseif (isset($_GET['loginE'])){
            //     echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
            // } ?>
            </div>
            <form class="form-signin" id=frm action="crud.php" method="post">
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Username</label>

                        <input type="hidden" name="id" value=<?php echo @$id ;?> >
                        <input type="text" name="username" class="form-control" placeholder=""
                            data-error="Enter Username or Email" value=<?php echo @$username; ?> >
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder=""
                            data-error="Enter Password" id=password>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" placeholder=""
                            data-error="Enter Password" id=confirmpassword>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <input type="submit" class="btn btn-lg btn-success btn-block btn-signin" value="submit" name="update_btn">
                <!-- <button  type="submit" name="login">Register</button> -->

            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->

    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script>
    $('#frm').validate({
        rules: {
            username: {
                required: true,
            },
            password: {
                required: true,
                minlength: 5,
            },
            confirmpassword: {
                required: true,
                minlength: 5,
                equalTo: "#password" //for checking both passwords are same or not
            },
        },
        messages: {
            username: {
                required: "please enter username",
            },
            password: {
                required: "Please enter your password",
                minlength: "Password must be 5 char long",
            },
            confirmpassword: {
                required: "Please enter your password",
                minlength: "Password must be 5 char long",
                equalTo: " Please enter the same password as above"
            },

        },
    });
    </script>
</body>

</html>