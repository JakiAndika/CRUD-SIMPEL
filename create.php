<?php
require("db.php");

$data = mysqli_query($connection, "SELECT * FROM categories");
$categories = mysqli_fetch_all($data, MYSQLI_ASSOC);

// var_dump($categories);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Article</title>
</head>

<body>
    <h2>Create Article</h2>

    <form method="POST" action="action_create.php" enctype="multipart/form-data">
        <p>
            <label>Title</label><br>
            <input type="text" name="title" />
        </p>

        <p>
            <label>Category</label>
            <select name="category_id">
            <?php foreach($categories as $category) { ?>
                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php } ?>
            </select>
        </p>

        <p>
            <label>Content</label><br>
            <textarea name="content"></textarea>
        </p>

        <p>
            <label>Cover</label><br>
            <input type="file" name="cover" />
        </p>

        <p>
            <input type="submit" />
        </p>
    </form>
</body>

</html>