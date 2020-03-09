<?php
    require("db.php");

    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $content = $_POST['content'];
    $date = date("Y-m-d");

    // var_dump($_FILES);
    // exit();
    if(isset($_FILES['cover'])) {
        $cover = $_FILES['cover'];
        $filename = $cover['name'];
        move_uploaded_file($cover['tmp_name'], "images/$filename");
    };
    exit();

    mysqli_query($connection, "INSERT INTO articles(title, category_id, content, date) VALUES ('$title', '$category_id', '$content', '$date')");

    header("Location: index.php");
?>