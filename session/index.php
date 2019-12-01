<?php
    session_start();
    if(isset($_POST["submit"])){
        $_SESSION["USER"] = $_POST["user"];
    }
    if(isset($_POST["logout"])){
        session_destroy();
        header("location:index.php");
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
    <?php if(isset($_SESSION["USER"])){ ?>
    
        <form action="" method="post">
            <input type="submit" value="登出" name="logout">
        </form>

    <?php }else{ ?>

        <form action="" method="post">
            <input type="text" name="user">
            <input type="submit" value="登入" name="submit">
        </form>
    
    <?php } ?>
    
    <div>
        <?php
            if(isset($_SESSION["USER"])){
                echo $_SESSION["USER"];
            }
        ?>
    </div>
</body>
</html>