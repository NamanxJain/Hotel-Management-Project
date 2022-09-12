<?php
include_once 'db.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$email && !$password) {
        header('Location:login.php?empty');
    } else {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password='$password'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            header('Location:index.php?dashboard');
        } else {
            header('Location:login.php?loginE');
        }
    }
}


if (isset($_POST['room'])) {
    $room_id = $_POST['room_id'];

    $sql = "SELECT * FROM room WHERE room_id = '$room_id'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $room = mysqli_fetch_assoc($result);
        $response['done'] = true;
        $response['room_no'] = $room['room_no'];
        $response['room_type_id'] = $room['room_type_id'];
    } else {
        $response['done'] = false;
        $response['data'] = "DataBase Error";
    }

    echo json_encode($response);
}
if (isset($_POST['room_type'])) {
    $room_type_id = $_POST['room_type_id'];

    $sql = "SELECT * FROM room WHERE room_type_id = '$room_type_id' AND status IS NULL AND deleteStatus = '0'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "<option selected disabled>Select Room Type</option>";
        while ($room = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $room['room_id'] . "'>" . $room['room_no'] . "</option>";
        }
    } else {
        echo "<option>No Available</option>";
    }
}

if (isset($_POST['room_price'])) {
    $room_id = $_POST['room_id'];

    $sql = "SELECT * FROM room NATURAL JOIN room_type WHERE room_id = '$room_id'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $room = mysqli_fetch_assoc($result);
        echo $room['price'];
    } else {
        echo "0";
    }
}

if (isset($_POST['customerDetails'])) {
    //$customer_result='';
    $room_id = $_POST['room_id'];

    if ($room_id != '') {
        $sql = "SELECT * FROM  customer WHERE room_id = '$room_id'";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            $customer_details = mysqli_fetch_assoc($result);
            $response['done'] = true;
            $response['full_name'] = $customer_details['full_name'];
            $response['contact_no'] = $customer_details['contact_no'];
            $response['email'] = $customer_details['email'];
            $response['address'] = $customer_details['address'];
            $response['id_card'] = $customer_details['id_card'];
            $response['id_number'] = $customer_details['id_number'];
            $response['number_adult'] = $customer_details['number_adult'];
            $response['number_child'] = $customer_details['number_child'];
            $response['check_in'] = $customer_details['check_in'];
            $response['check_out'] = $customer_details['check_out'];
        } else {
            $response['done'] = false;
            $response['data'] = "DataBase Error";
        }

        echo json_encode($response);
    }
}


if (isset($_POST['update_id'])) {

    $room_id=$_POST['update_id'];
    $query = "SELECT * FROM room  NATURAL JOIN room_type WHERE `room_id`='$room_id'";
    $result=mysqli_query($connection,$query);
    if($result)
    {
        $room_details = mysqli_fetch_assoc($result);
        $response['done']=true;
        $response['room_no']=$room_details['room_no'];
        $response['room_type']=$room_details['room_type']; 
    }
    else
    {
        $response['done']=false;
        $response['data'] = "DataBase Error";
    }
    
    echo json_encode($response);
}

if (isset($_POST['booked_room'])) {
    $room_id = $_POST['room_id'];

    $sql = "SELECT * FROM room NATURAL JOIN room_type NATURAL JOIN booking NATURAL JOIN customer WHERE room_id = '$room_id' AND payment_status = '0'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $room = mysqli_fetch_assoc($result);
        $response['done'] = true;
        $response['booking_id'] = $room['booking_id'];
        $response['name'] = $room['customer_name'];
        $response['room_no'] = $room['room_no'];
        $response['room_type'] = $room['room_type'];
        $response['check_in'] = date('M j, Y', strtotime($room['check_in']));
        $response['check_out'] = date('M j, Y', strtotime($room['check_out']));
        $response['total_price'] = $room['total_price'];
        $response['remaining_price'] = $room['remaining_price'];
    } else {
        $response['done'] = false;
        $response['data'] = "DataBase Error";
    }

    echo json_encode($response);
}

if (isset($_GET['username'])) {

    $username=$_GET['username'];
    $query="SELECT `id` FROM `user` WHERE `username` = '$username'";
    $checkUser = mysqli_query($connection, $query);
    $checkUserCount = mysqli_num_rows($checkUser);

    if ($checkUserCount > 0) 
    {
        echo "false";
    }
    else
    {
        echo "true";
    }
}

// if (isset($_POST['check_in_room'])) {
//     $booking_id = $_POST['booking_id'];
//     $advance_payment = $_POST['advance_payment'];

//     if ($booking_id != '') {
//         $query = "select * from booking where booking_id = '$booking_id'";
//         $result = mysqli_query($connection, $query);
//         $booking_details = mysqli_fetch_assoc($result);
//         $room_id = $booking_details['room_id'];
//         $remaining_price = $booking_details['total_price'] - $advance_payment;

//         $updateBooking = "UPDATE booking SET remaining_price = '$remaining_price' where booking_id = '$booking_id'";
//         $result = mysqli_query($connection, $updateBooking);
//         if ($result) {
//             $updateRoom = "UPDATE room SET check_in_status = '1' WHERE room_id = '$room_id'";
//             $updateResult = mysqli_query($connection, $updateRoom);
//             if ($updateResult) {
//                 $response['done'] = true;
//             } else {
//                 $response['done'] = false;
//                 $response['data'] = "Problem in Update Room Check in status";
//             }
//         } else {
//             $response['done'] = false;
//             $response['data'] = "Problem in payment";
//         }
//     } else {
//         $response['done'] = false;
//         $response['data'] = "Error With Booking";
//     }
//     echo json_encode($response);
// }

// if (isset($_POST['check_out_room'])) {
//     $booking_id = $_POST['booking_id'];
//     $remaining_amount = $_POST['remaining_amount'];

//     if ($booking_id != '') {
//         $query = "select * from booking where booking_id = '$booking_id'";
//         $result = mysqli_query($connection, $query);
//         $booking_details = mysqli_fetch_assoc($result);
//         $room_id = $booking_details['room_id'];
//         $remaining_price = $booking_details['remaining_price'];

//         if ($remaining_price == $remaining_amount) {
//             $updateBooking = "UPDATE booking SET remaining_price = '0',payment_status = '1' where booking_id = '$booking_id'";
//             $result = mysqli_query($connection, $updateBooking);
//             if ($result) {
//                 $updateRoom = "UPDATE room SET status = NULL,check_in_status = '0',check_out_status = '1' WHERE room_id = '$room_id'";
//                 $updateResult = mysqli_query($connection, $updateRoom);
//                 if ($updateResult) {
//                     $response['done'] = true;
//                 } else {
//                     $response['done'] = false;
//                     $response['data'] = "Problem in Update Room Check in status";
//                 }
//             } else {
//                 $response['done'] = false;
//                 $response['data'] = "Problem in payment";
//             }

//         } else {
//             $response['done'] = false;
//             $response['data'] = "Please Enter Full Payment";
//         }
//     } else {
//         $response['done'] = false;
//         $response['data'] = "Error With Booking";
//     }
//     echo json_encode($response);
// }


// if (isset($_POST['createComplaint'])) {
//     $complainant_name = $_POST['complainant_name'];
//     $complaint_type = $_POST['complaint_type'];
//     $complaint = $_POST['complaint'];

//     $query = "INSERT INTO complaint (complainant_name,complaint_type,complaint) VALUES ('$complainant_name','$complaint_type','$complaint')";
//     $result = mysqli_query($connection, $query);
//     if ($result) {
//         header("Location:index.php?complain&success");
//     } else {
//         header("Location:index.php?complain&error");
//     }

// }

// if (isset($_POST['resolve_complaint'])) {
//     $budget = $_POST['budget'];
//     $complaint_id = $_POST['complaint_id'];
//     $query = "UPDATE complaint set budget = '$budget',resolve_status = '1' WHERE id='$complaint_id'";
//     $result = mysqli_query($connection, $query);
//     if ($result) {
//         header("Location:index.php?complain&resolveSuccess");
//     } else {
//         header("Location:index.php?complain&resolveError");
//     }
// }


// if (isset($_POST['change_shift'])) {
//     $emp_id = $_POST['emp_id'];
//     $shift_id = $_POST['shift_id'];
//     $query = "UPDATE staff set shift_id = '$shift_id' WHERE emp_id='$emp_id'";
//     $result = mysqli_query($connection, $query);
//     $to_date = date("Y-m-d H:i:s");
//     $update = "UPDATE emp_history SET to_date = '$to_date' WHERE emp_id = '$emp_id' AND to_date IS NULL";
//     $update_result = mysqli_query($connection,$update);
//     $insert = "INSERT INTO emp_history (emp_id,shift_id) VALUES ('$emp_id','$shift_id')";
//     $insert_result = mysqli_query($connection,$insert);

//     if ($result && $insert_result && $update_result) {
//         header("Location:index.php?staff_mang&success");
//     } else {
//         header("Location:index.php?staff_mang&error");
//     }
// }