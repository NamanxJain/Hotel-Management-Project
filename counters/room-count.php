<?php 
    include './db.php';
    $sql = "SELECT * FROM `room`";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>