<?php
    require("db.php");

    $id = $_GET['id'];
    mysqli_query($connection, "DELETE from articles where id=$id");

    header("Location: index.php");
?>