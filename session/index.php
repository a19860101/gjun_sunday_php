<?php
    session_start();
    if(isset($_POST["submit"])){
        $_SESSION["USER"] = $_POST["user"];
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
    <form action="" method="post">
        <input type="text" name="user">
        <input type="submit" value="登入" name="submit">
    </form>
    <div>
        <?php echo $_SESSION["USER"];?>
    </div>
</body>
</html>