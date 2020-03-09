<?php
require("db.php");

$articles = mysqli_query($connection, "SELECT articles.*, categories.name as 'category_name' from articles
inner join categories on articles.category_id = categories.id ORDER BY articles.id ASC");
// mysqli_fetch_all($articles);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
</head>

<body>
    <h1>Data Article</h1>

    <a href="create.php">Tambah Artikel</a>

    <?php if (mysqli_num_rows($articles) > 0) { ?>
        <table border="1" cellpadding="5" cellspacing="0" width="50%">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($article = mysqli_fetch_assoc($articles)) { ?>
                    <tr>
                        <td><?php echo $article['title']; ?></td>
                        <td><?= $article['content']; ?></td>
                        <td><?= $article['date']; ?></td>
                        <td><?= $article['category_name']; ?></td>
                        <td> <a href="edit.php?id=<?= $article['id']; ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?= $article['id']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <h1>Data Artikel belum ada</h1>
    <?php }?>
</body>

</html>