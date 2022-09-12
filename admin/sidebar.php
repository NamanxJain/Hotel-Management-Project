<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="../images/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $user['name'];?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Manager</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <?php 
        if (isset($_GET['dashboard'])){ ?>
        <li class="active">
            <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
                Dashboard
            </a>
        </li>
        <?php } else{?>
        <li>
            <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
                Dashboard
            </a>
        </li>
        <?php }
        if (isset($_GET['booking'])){ ?>
        <li class="active">
            <a href="index.php?booking"><em class="fa fa-bed">&nbsp;</em>
                Booking
            </a>
        </li>
        <?php } else{?>
        <li>
            <a href="index.php?booking"><em class="fa fa-bed">&nbsp;</em>
                Booking
            </a>
        </li>
        <?php }
        if (isset($_GET['room_manage'])){ ?>
        <li class="active">
            <a href="index.php?room_manage"><em class="fa fa-users">&nbsp;</em>
                Room Manage
            </a>
        </li>
        <?php } else{?>
        <li>
            <a href="index.php?room_manage"><em class="fa fa-users">&nbsp;</em>
                Room Manage
            </a>
        </li>
        <?php }
        if (isset($_GET['message'])){ ?>
        <li class="active">
            <a href="index.php?message"><em class="fa fa-comments">&nbsp;</em>
                message
            </a>
        </li>
        <?php } else{?>
        <li>
            <a href="index.php?message"><em class="fa fa-comments">&nbsp;</em>
                Messages
            </a>
        </li>
        <?php }
        ?>

    </ul>
</div>
<!--/.sidebar-->
