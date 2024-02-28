<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Platform</title>
</head>
<body>
    <h1>Welcome to the Blog Platform</h1>

    <?php foreach ($posts as $post): ?>
        <div>
            <h2><?= $post['title'] ?></h2>
            <p><?= $post['content'] ?></p>
        </div>
    <?php endforeach; ?>

    <a href="admin.php">Admin Panel</a>
</body>
</html>
