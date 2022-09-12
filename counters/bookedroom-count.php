<?php 
    include './db.php';
    $sql = "SELECT * FROM room WHERE `booking_status` = '1'";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>