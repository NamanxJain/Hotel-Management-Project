<?php 
    include './db.php';
    $sql = "SELECT * FROM `message`";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>