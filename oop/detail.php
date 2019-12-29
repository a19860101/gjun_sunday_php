<?php
    include("pdo.php");
    include("post.php");
    $post = new Post;
    $row = $post->showPost($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $row["title"]?></h2>
    <div class="content">
        <?php echo $row["content"]; ?>
    </div>
</body>
</html>