<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Save the post to the database (replace with database logic)
    $newPost = ['title' => $title, 'content' => $content];
    $posts[] = $newPost;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Added</title>
</head>
<body>
    <h1>Post Added Successfully</h1>
    <a href="/">Back to Home</a>
</body>
</html>
