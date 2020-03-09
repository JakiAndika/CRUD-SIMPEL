<?php
    $connection = mysqli_connect("localhost", "root", "", "crud");

    if(!$connection) {
        echo "Gagal connect ke Server!";
    }
?>