<?php
    include("pdo.php");
    include("post.php");
    if(isset($_POST["submit"])){
        // var_dump($_FILES["file"]);
        $u = Post::cover($_FILES["file"]);
        echo $u;
    }
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit">
    </form>
</body>
</html>