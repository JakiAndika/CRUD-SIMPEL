<?php
    require("db.php");

    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];
    $article_id = $_POST['article_id'];

    mysqli_query($connection, "UPDATE articles set title='$title', content='$content', category_id=$category_id WHERE id=$article_id");

    header("Location: index.php");
?>