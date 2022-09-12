<?php

session_start();
require_once('db.php');

if(isset($_POST['submit']))
{


    $full_name=$_POST['full_name'];
    $contact_no=$_POST['contact_no'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $id_card=$_POST['id_card'];
    $id_number=$_POST['id_number'];
    $number_adult=$_POST['number_adult'];
    $number_child=$_POST['number_child'];
    $room_type=$_POST['room_type'];
    $check_in=$_POST['check_in'];
    $check_out=$_POST['check_out'];
    $room_id=$_POST['room_id'];


    $query="UPDATE `customer` SET `full_name`= '$full_name' ,`contact_no`= '$contact_no',`email`= '$email',`address`='$address',`id_card`='$id_card',`id_number`='$id_number',`number_adult`='$number_adult',`number_child`='$number_child',`check_in`='$check_in',`check_out`='$check_out' WHERE `room_id` ='$room_id'";

    $result= mysqli_query($connection,$query);

    if($result)
    {
        $query2=" UPDATE `room` SET `booking_status`='1',`check_in`='1',`check_out`='0' WHERE `room_id`='$room_id' ";
           $result2=mysqli_query($connection,$query2);
           if($result2)
           {
            header("location:index.php");
           }
           else
           {
            echo "data not inserted";
           }
    }


}
if(isset($_GET['room_id']))
{
    $room_id=$_GET['room_id'];

    $query1="UPDATE `customer` SET `full_name`= '0' ,`contact_no`= '0',`email`= '0',`address`='0',`id_card`='0',`id_number`='0',`number_adult`='0',`number_child`='0',`check_in`='0',`check_out`='0' WHERE `room_id` ='$room_id'";

    $result= mysqli_query($connection,$query1);

    if($result)
    {
        $query2=" UPDATE `room` SET `booking_status`='0',`check_in`='0',`check_out`='0' WHERE `room_id`='$room_id' ";
        $result2=mysqli_query($connection,$query2);
        if($result2)
        {
         echo "unbook";
        }
        else
        {
         echo "not working";
        }
    }

}

if(isset($_POST['updatedata']))
{
    $room_id=$_POST['room_id'];
    $room_type_id=$_POST['room_type_id'];
    $room_no=$_POST['room_no'];
    $room_type=$_POST['room_type'];
    $room_id=$_POST['room_id'];

    if($room_type=="Classic Room")
    {

            $query3=" UPDATE `room` SET `room_type_id`='1',`room_no`='$room_no' WHERE `room_id`='$room_id' ";
            $result3=mysqli_query($connection,$query3);
            if($result3)
            {
                $query3="UPDATE `customer` SET `room_type`='$room_type' WHERE `room_id`='$room_id'";
                $result3=mysqli_query($connection,$query3);
                
                if($result3)
                {
                    header('location:index.php?room_manage');
                }
            }
            else
            {
            echo "not working";
            }
    }
    else if($room_type=="Budget Room")
    {

            $query4=" UPDATE `room` SET `room_type_id`='2',`room_no`='$room_no' WHERE `room_id`='$room_id' ";
            $result4=mysqli_query($connection,$query4);
            if($result4)
            {
                $query4=" UPDATE `customer` SET `room_type`='$room_type' WHERE `room_id`='$room_id' ";
                $result4=mysqli_query($connection,$query4);
                if($result4)
                {
                    header('location:index.php?room_manage');
                }
                else
                {
                    echo "not working1";
                }
            }
            else
            {
            echo "not working";
            }
    }
    else if($room_type=="Premium Room")
    {

            $query5=" UPDATE `room` SET `room_type_id`='3',`room_no`='$room_no' WHERE `room_id`='$room_id' ";
            $result5=mysqli_query($connection,$query5);
            if($result5)
            {
                $query5="UPDATE `customer` SET `room_type`='$room_type' WHERE `room_id`='$room_id'";
                $result5=mysqli_query($connection,$query5);
                if($result5)
                {
                    header('location:index.php?room_manage');
                }
            }
            else
            {
            echo "not working";
            }
    }

}


if(isset($_POST['deletedata']))
{
    $room_id=$_POST['delete_id'];
    $query="DELETE FROM `room` WHERE `room_id`='$room_id'";
    $result=mysqli_query($connection,$query);
    if($result)
    {
        $query="DELETE FROM `customer` WHERE `room_id`='$room_id'";
        $result=mysqli_query($connection,$query);

        if($result)
        {
            header("location:index.php?room_manage");
        }
    }
}




if(isset($_POST['message_btn']))
{
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];


    $query="INSERT INTO `message`(`full_name`, `email`, `phone`, `message`) VALUES ('$full_name','$email','$phone','$message')";
    $result=mysqli_query($connection,$query);

    If($result)
    {
        $_SESSION['message']="submitted";
        header("location:../contact.php");
    }
}



if(isset($_POST['message_delete_data']))
{
    echo '<pre>';
    $message_id=$_POST['delete_id'];


    $query="DELETE FROM `message` WHERE `message_id`='$message_id'";
    $result=mysqli_query($connection,$query);
    If($result)
    {
        $_SESSION['message']="submitted";
        header("location:index.php?message");
    }
}


if(isset($_POST["register_btn"]))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $query= "INSERT INTO `user`(`name`,`username`,`password`) VALUES ('manager', '$username','$password')";
    $result=mysqli_query($connection,$query);
    if($result)
    {   
        $user_id= mysqli_insert_id($connection);
        $_SESSION['user_id'] =$user_id ;
        $_SESSION["registration_message"]="1";
        header('Location:index.php?dashboard');
    }
    else
    {
        echo "error";
    }
}

if(isset($_POST["update_btn"]))
{
   $id=$_POST['id'];
   $username=$_POST['username'];
   $password=md5($_POST['password']);
   $query="UPDATE `user` SET `username`='$username',`password`='$password' WHERE `id`='$id' ";
   $result=mysqli_query($connection,$query);
   if($result)
   {
    $_SESSION['user_id'] =$id ;
    $_SESSION["registration_message"]="2";
    header('Location:index.php?dashboard');
   }
   else
   {
       echo "error";
   }
}
// if(isset($_POST["adddata"]))
// {
//     $room_no=$_POST['room_no'];
//     $room_type=$_POST['room_type'];

//     if($room_type=="Classic Room")
//     {

//             $query3="INSERT INTO `room`(`room_no`,`room_type_id`,`booking_status`, `check_in`, `check_out) VALUES ('$room_no','1','0','0','0')";
//             $result3=mysqli_query($connection,$query3);
//             if($result3)
//             {
//                 $query3="NSERT INTO `customer`(``,`room_type_id`) VALUES ('$room_no','1')";
//                 $result3=mysqli_query($connection,$query3);
                
//                 if($result3)
//                 {
//                     header('location:index.php?room_manage');
//                 }
//             }
//             else
//             {
//             echo "not working";
//             }
//     }
//     else if($room_type=="Budget Room")
//     {

//             $query4=" UPDATE `room` SET `room_type_id`='2',`room_no`='$room_no' WHERE `room_id`='$room_id' ";
//             $result4=mysqli_query($connection,$query4);
//             if($result4)
//             {
//                 $query4=" UPDATE `customer` SET `room_type`='$room_type' WHERE `room_id`='$room_id' ";
//                 $result4=mysqli_query($connection,$query4);
//                 if($result4)
//                 {
//                     header('location:index.php?room_manage');
//                 }
//                 else
//                 {
//                     echo "not working1";
//                 }
//             }
//             else
//             {
//             echo "not working";
//             }
//     }
//     else if($room_type=="Premium Room")
//     {

//             $query5=" UPDATE `room` SET `room_type_id`='3',`room_no`='$room_no' WHERE `room_id`='$room_id' ";
//             $result5=mysqli_query($connection,$query5);
//             if($result5)
//             {
//                 $query5="UPDATE `customer` SET `room_type`='$room_type' WHERE `room_id`='$room_id'";
//                 $result5=mysqli_query($connection,$query5);
//                 if($result5)
//                 {
//                     header('location:index.php?room_manage');
//                 }
//             }
//             else
//             {
//             echo "not working";
//             }
//     }

// }
?>



